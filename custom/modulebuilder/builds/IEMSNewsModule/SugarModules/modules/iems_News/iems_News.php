<?PHP
require_once('modules/iems_News/iems_News_sugar.php');

class iems_News extends iems_News_sugar
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_News()
    {
        self::__construct();
    }

    /**
     * Sync the Listing Delete before actually deleting the record
     * @param $id
     */
    public function mark_deleted($id)
    {
        /**@ var $afterDeleteSync AfterDeleteWordpressSync*/
        require_once('custom/WebsiteHelpers/AfterDeleteWordpressSync.php');
        $afterDeleteSync = new AfterDeleteWordpressSync();
        $afterDeleteSync->deleteSync($this,'','');
        parent::mark_deleted($id);
    }

    public function deleteAttachment($isduplicate = "false")
    {
        if ($this->ACLAccess('edit')) {
            if ($isduplicate == "true") {
                return true;
            }
        }

        $this->filename = '';
        $this->file_mime_type = '';
        $this->save();

        return true;
    }

    public function save($check_notify = false)
    {
        global $timedate;

        /**@var $timedate TimeDate */
        if (!empty($this->id)) {
            if ($this->published && (empty($this->fetched_row['published']) || !$this->fetched_row['published'])) {
                $this->published_date  = $this->getPublishedDate();
            }

            if (!$this->published) {
                $this->published_date = false;
            }
        }

        if (empty($this->date_entered)) {
            if ($this->published) {
                $this->published_date  = $this->getPublishedDate();
            }
        }

        return parent::save($check_notify);
    }

    private function getPublishedDate(){
        $now = TimeDate::getInstance()->getNow()->asDb();

        // convert to user local date
        $tz = TimeDate::userTimezone($GLOBALS["current_user"]);
        $myDateTime = new DateTime($now, new DateTimeZone('GMT'));
        $myDateTime->setTimezone(new DateTimeZone($tz));
        $userDateNow = $myDateTime->format(TimeDate::DB_DATE_FORMAT);
        $userDateNow = explode(' ', $userDateNow);
        return $userDateNow[0];
    }

    /**
     * Populates the project_id field based on the parameters
     * passed to the http request.
     *
     * Note: This method is only intended for automatically popuplating the proejct id
     * when the news is created via subpanel under project.
     */
    private function populateProjectIdBasedFromHttpParams()
    {
        global $service;
        /**@var $service RestService */

        if ($service && $service instanceof RestService) {
            $request = $service->getRequest();
            $args = $request->getArgs();

            if (strtolower($args['module']) == 'iems_project' && !empty($args['record'])) {
                $this->iems_project_id_c = $args['record'];
            }
        }
    }
}

?>