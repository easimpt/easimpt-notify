<?php

namespace EasimptNotify;

use EasimptNotify\Curl;
use Illuminate\Http\JsonResponse;

class EasimptNotify {
    private $rootUrl = 'https://api.notify.easimpt.com';
    private $subUrl = 'mail/trigger';
    private $fullUrl = '';
    private $token = '';
    private $data = [];

    function __construct($token = '')
    {
        $this->token = $token;

        $this->fullUrl = $this->rootUrl . '/' . $this->subUrl;
    }

    public function sendMail()
    {
        $easimptNotify = new Curl();

        return $easimptNotify->postRequest($this->fullUrl, $this->data);
    }

    public function setData($data = [])
    {
        $this->data = $data;
        $this->data['token'] = $this->token;
    }
}