<?php

namespace MediaMath\TerminalOneAPI\Auth;

use MediaMath\TerminalOneAPI\Infrastructure\ApiHost;
use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

class UserPasswordAuth implements CookieAuthenticable
{

    private $username, $password, $api_key;
    private $session_id = null;

    public function __construct($username, $password, $api_key)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function cookieValues()
    {
        $this->keepAliveSession();

        return ['adama_session' => $this->keepAliveSession()];
    }

    public function authUniqueId()
    {
        return $this->keepAliveSession();
    }

    private function keepAliveSession()
    {
        if (is_null($this->session_id)) {

            $ch = curl_init();
            $data_array=array('user' => $this->username, 'password' => $this->password, 'api_key' => $this->api_key);
            curl_setopt($ch, CURLOPT_URL, ApiHost::T1_AUTHENTICATION .'login');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST,TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_array);
            $result_body = trim(curl_exec($ch));
            $http_code=curl_getinfo($ch,CURLINFO_HTTP_CODE);
            $output["http_code"]=$http_code;
            curl_close($ch);
            $xml = simplexml_load_string($result_body,'SimpleXMLElement', LIBXML_NOCDATA);

            $this->session_id=(string)$xml->session[0]->attributes()->sessionid;
        }

        return $this->session_id;

    }

}