<?php

require_once('vendor/Zend/Http/Client.php');

class SyncDataToWebsite
{
    private $client;
    private $config;
    private $url;
    private $requestType;

    public function __construct()
    {
        $this->client = new Zend_Http_Client();
        $this->setUrl();
    }

    public function syncToWordpress($data)
    {
        return $this->sendHTTPRequest($this->requestType, $data);
    }

    public function setUrl($url = array())
    {
        if (!empty($url)) {
            return ($this->url = $url);
        }
        $path = 'custom/LogicHookHelpers/SettingsHelper.php';
        if (SugarAutoLoader::fileExists($path) && !($this->config instanceof SettingsHelper)) {
            require_once($path);
            $this->config = new SettingsHelper();
        }
        if ($this->config instanceof SettingsHelper) {
            return ($this->url = $this->config->getConfig('inproperty_wp_url'));
        }

        $this->url = array();
    }

    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
    }

    private function sendHTTPRequest($requestType, $data)
    {
        if (
            empty($data) || !isset($data)
        ) {
            return false;
        }
        $response = array();
        foreach ((array)$this->url as $url) {
            if (empty($url)) {
                continue;
            }
            try {
                $this->client->setUri($url);
                if ($requestType == 'POST') {
                    $this->client->setMethod(Zend_Http_Client::POST);
                    $this->client->setParameterPost($data);
                } else {
                    $this->client->setMethod(Zend_Http_Client::GET);
                    $this->client->setParameterGet($data);
                }

                $response[] = $this->client->request();
            } catch (Exception $e) {
                $response[] = 'There was an error and the server did not response @ ' . $url;
            }

        }
        return $response;
    }
}