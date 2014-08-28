<?php

class UtilityHelper
{

    /**
     * This function uses the SugarPHPMailer to send out an email
     * on success this function then relates the email to the record passed.
     * @param string $to
     * @param string $subj
     * @param string $body
     * @param SugarBean $related_record
     * @return bool
     */
    function sendEmail($emailTo, $emailSubject, $emailBody, SugarBean $relatedBean = null)
    {
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $defaults['email'];
        $mail->FromName = $defaults['name'];
        $mail->ClearAllRecipients();
        $mail->ClearReplyTos();
        $mail->IsHTML(true);
        $mail->Subject=from_html($emailSubject);
        $mail->Body=from_html($emailBody);
        $mail->prepForOutbound();
        $mail->AddAddress($emailTo);

        //now create email
        if (@$mail->Send()) {
            $emailObj->to_addrs= '';
            $emailObj->type= 'archived';
            $emailObj->deleted = '0';
            $emailObj->name = $mail->Subject ;
            $emailObj->description = $mail->Body;
            $emailObj->description_html = null;
            $emailObj->from_addr = $mail->From;
            if ( $relatedBean instanceOf SugarBean && !empty($relatedBean->id) ) {
                $emailObj->parent_type = $relatedBean->module_dir;
                $emailObj->parent_id = $relatedBean->id;
            }
            $emailObj->date_sent = TimeDate::getInstance()->nowDb();
            $emailObj->modified_user_id = '1';
            $emailObj->created_by = '1';
            $emailObj->status = 'sent';
            $emailObj->save();
        } else{
            $GLOBALS['log']->debug('Cannot Send Email');
            $GLOBALS['log']->debug($emailTo);
            $GLOBALS['log']->debug($emailSubject);
            $GLOBALS['log']->debug($emailBody);
            $GLOBALS['log']->debug(print_r($relatedBean));
            return false;
        }
    }

    /**
     * Parses the template variable using the sugarcrm method
     * @param string $temp_id
     * @param SugarBean $record
     * @param array $additionalFields
     * @return bool|mixed
     */
    function parseTemplate($temp_id, $record, $additionalFields = array())
    {
        if (empty($temp_id) || empty($record)) {
            return false;
        }

        $template = new EmailTemplate();
        $template->retrieve($temp_id);

        if (empty($template) || empty($template->id)) {
            $GLOBALS['log']->debug('Template ID Does Not Exist : ' . $temp_id);
            return false;
        }

        if (!$template->body && !$template->body_html) {
            $GLOBALS['log']->debug('MISSING TEMPLATE BODY FOR : ' . $temp_id);
        }

        $parsedTemplate = array();
        $parsedTemplate['subject'] = $template->parse_template_bean($template->subject,$record->module_dir,$record);
        $parsedTemplate['body_html'] = $template->parse_template_bean($template->body_html,$record->module_dir,$record);

          if (!empty($additionalFields)) {
            $parsedTemplate['body_html'] = $this->additionalTemplateParsing($parsedTemplate['body_html'], $additionalFields, $record);
        }

        return $parsedTemplate;
    }

    function additionalTemplateParsing($template, $additionalFields, $record)
    {
        foreach ($additionalFields as $key => $value) {
            if (method_exists($record, $value)) {
                $template = str_replace($key, $record->$value, $template);
            }
        }

        return $template;
    }

    /**
     * Helper Function:
     * Used to return a cloned instance of the record.
     * Has an optional parameter that you can change the value of the fields on the fly
     * @param SugarBean $record
     * @param array $fieldsToChange
     * @return bool|SugarBean
     */
    function cloneRecord(SugarBean $record, $fieldsToChange = array())
    {
        if (!($record instanceof SugarBean) || empty($record->id)) {
            return false;
        }
        $newRecord = clone $record;

        if (!empty($fieldsToChange)) {
            foreach ($fieldsToChange as $key => $value) {
                if (property_exists($newRecord, $key)) {
                    $newRecord->$key = $value;
                }
            }
        }

        return $newRecord;
    }

    /**
     * This function checks if the passed id is existing on the modules passed.
     * returns an object if a record is found, and a boolean false if none
     * @param string $id
     * @param array $possibleParent
     * @return bool|SugarBean
     */
    function getParent($id, $possibleParent = array('iems_Pricing', 'iems_Project', 'iems_Listing', 'Contracts'))
    {
        if (!empty($id)) {
            foreach ($possibleParent as $module) {
                $record = BeanFactory::getBean($module, $id);
                if (!empty($record) && !empty($record->id)) {
                    return $record;
                }
            }
        }
        return false;
    }
}