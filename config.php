<?php
// created: 2014-08-06 17:52:24
$sugar_config = array (
  'SAML_X509Cert' => '',
  'SAML_loginurl' => '',
  'admin_access_control' => false,
  'admin_export_only' => false,
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 30,
  ),
  'currency' => '',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'm/d/Y',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => '',
    'db_user_name' => 'root',
    'db_password' => 'gyrostabilizer',
    'db_name' => 'inproperty_v1',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => false,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '￥',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '₨',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '₩',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '฿',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'USD',
  'default_currency_name' => 'US Dollar',
  'default_currency_show_preferred' => false,
  'default_currency_significant_digits' => '2',
  'default_currency_symbol' => '$',
  'default_date_format' => 'm/d/Y',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => '7',
  'default_module' => 'Home',
  'default_module_favicon' => false,
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 432,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => false,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'RacerX',
  'default_time_format' => 'h:ia',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'no',
  'developerMode' => false,
  'disable_convert_lead' => false,
  'disable_count_query' => true,
  'disable_export' => false,
  'disable_persistent_connections' => 'false',
  'disable_uw_upload' => true,
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => false,
  'email_default_editor' => 'html',
  'email_xss' => 'YToxOntzOjY6InNjcmlwdCI7czo2OiJzY3JpcHQiO30=',
  'enable_action_menu' => true,
  'enable_mobile_redirect' => true,
  'enable_web_services_user_creation' => true,
  'export_delimiter' => ',',
  'external_cache_disabled' => true,
  'external_cache_disabled_memcache' => true,
  'fts_disable_notification' => true,
  'full_text_engine' => 
  array (
    'Elastic' => 
    array (
      'host' => '192.168.56.102',
      'port' => '9200',
    ),
  ),
  'hide_admin_backup' => true,
  'hide_full_text_engine_config' => true,
  'hide_history_contacts_emails' => 
  array (
    'Cases' => false,
    'Accounts' => false,
    'Opportunities' => true,
  ),
  'history_max_viewed' => 50,
  'host_name' => '192.168.56.102',
  'http_referer' => 
  array (
    'list' => 
    array (
      0 => 'ion.sjc.sugarcrm.pvt',
      1 => 'ion',
      2 => 'apps.lotuslive.com',
      3 => 'www.sugarcrm.com',
    ),
    'actions' => 
    array (
      0 => 'index',
      1 => 'ListView',
      2 => 'DetailView',
      3 => 'EditView',
      4 => 'Login',
      5 => 'Authenticate',
      6 => 'oauth',
    ),
  ),
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => 1,
  'js_lang_version' => 4,
  'languages' => 
  array (
    'en_us' => 'English (US)',
    'bg_BG' => 'Български',
    'cs_CZ' => 'Česky',
    'da_DK' => 'Dansk',
    'de_DE' => 'Deutsch',
    'el_EL' => 'Ελληνικά',
    'es_ES' => 'Español',
    'fr_FR' => 'Français',
    'he_IL' => 'עברית',
    'hu_HU' => 'Magyar',
    'it_it' => 'Italiano',
    'lt_LT' => 'Lietuvių',
    'ja_JP' => '日本語',
    'ko_KR' => '한국어',
    'lv_LV' => 'Latviešu',
    'nb_NO' => 'Bokmål',
    'nl_NL' => 'Nederlands',
    'pl_PL' => 'Polski',
    'pt_PT' => 'Português',
    'ro_RO' => 'Română',
    'ru_RU' => 'Русский',
    'sv_SE' => 'Svenska',
    'tr_TR' => 'Türkçe',
    'zh_CN' => '简体中文',
    'pt_BR' => 'Português Brasileiro',
    'ca_ES' => 'Català',
    'en_UK' => 'English (UK)',
    'sr_RS' => 'Српски',
    'sk_SK' => 'Slovenčina',
    'sq_AL' => 'Shqip',
    'et_EE' => 'Eesti',
    'es_LA' => 'Español (Latinoamérica)',
    'fi_FI' => 'Finnish',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 5,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'sugarcrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'fatal',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'sugarcrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 1,
      'suffix' => '',
    ),
  ),
  'mass_actions' => 
  array (
    'mass_update_chunk_size' => 20,
    'mass_delete_chunk_size' => 20,
  ),
  'max_dashlets_homepage' => '15',
  'max_record_fetch_size' => 1000,
  'max_record_link_fetch_size' => 5000,
  'merge_duplicates' => 
  array (
    'merge_relate_fetch_concurrency' => 2,
    'merge_relate_fetch_timeout' => 90000,
    'merge_relate_fetch_limit' => 20,
    'merge_relate_update_concurrency' => 4,
    'merge_relate_update_timeout' => 90000,
    'merge_relate_max_attempt' => 3,
  ),
  'metric_providers' => 
  array (
    'SugarMetric_Provider_Newrelic' => 'include/SugarMetric/Provider/Newrelic.php',
  ),
  'metric_settings' => 
  array (
    'SugarMetric_Provider_Newrelic' => 
    array (
      'applicationname' => 'On-Demand 7.1.6 Pro',
    ),
  ),
  'metrics_enabled' => 1,
  'moduleInstaller' => 
  array (
    'validExt' => 
    array (
      0 => 'xml',
    ),
    'packageScan' => false,
  ),
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'passwordsetting' => 
  array (
    'minpwdlength' => 6,
    'maxpwdlength' => '',
    'oneupper' => '0',
    'onelower' => '0',
    'onenumber' => '0',
    'onespecial' => '0',
    'SystemGeneratedPasswordON' => '0',
    'generatepasswordtmpl' => '2577d4e8-db38-2e6d-448a-52fcd4019927',
    'lostpasswordtmpl' => '30c60a74-1af1-34b4-e6a3-52fcd4aeec91',
    'customregex' => '',
    'regexcomment' => '',
    'forgotpasswordON' => true,
    'linkexpiration' => true,
    'linkexpirationtime' => 24,
    'linkexpirationtype' => 60,
    'userexpiration' => '0',
    'userexpirationtime' => '',
    'userexpirationtype' => '1',
    'userexpirationlogin' => '',
    'systexpiration' => 1,
    'systexpirationtime' => 7,
    'systexpirationtype' => '0',
    'systexpirationlogin' => '',
    'lockoutexpiration' => '0',
    'lockoutexpirationtime' => '',
    'lockoutexpirationtype' => '1',
    'lockoutexpirationlogin' => '',
  ),
  'portal_view' => 'single_user',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 1000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'show_download_tab' => true,
  'site_url' => 'http://192.168.56.102',
  'slow_query_time_msec' => '5000',
  'snip_url' => 'http://ease.sugarcrm.com:20010/',
  'stack_trace_errors' => false,
  'sugar_version' => '7.2.2.0',
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 30,
  'translation_string_prefix' => false,
  'unique_key' => '0ac608785780cff5bf057bc037ca5e44',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'use_sprites' => true,
  'vcal_time' => '2',
  'verify_client_ip' => true,
  'wl_list_max_entries_per_page' => 10,
  'wl_list_max_entries_per_subpanel' => 3,
);