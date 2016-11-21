<?php

namespace MediaMath\TerminalOneAPI\Auth;

use MediaMath\TerminalOneAPI\Exception\LoginFailedException;
use MediaMath\TerminalOneAPI\Infrastructure\ApiHost;
use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

/**
 * Class UserPasswordAuth
 * @package MediaMath\TerminalOneAPI\Auth
 */
class UserPasswordAuth implements CookieAuthenticable
{

    /**
     * @var
     */
    private $username;
    
    /**
     * @var
     */
    private $password;

    /**
     * @var
     */
    private $api_key;

    /**
     * @var null
     */
    private $session_id = null;

    /**
     * @var
     */
    private $api_subdomain;

    /**
     * @var
     */
    private $api_version;

    /**
     * UserPasswordAuth constructor.
     * @param $username
     * @param $password
     * @param $api_key
     * @param null $api_subdomain
     * @param null $api_version
     */
    public function __construct($username, $password, $api_key, $api_subdomain = null, $api_version = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->api_key = $api_key;
        $this->api_subdomain = $api_subdomain;
        $this->api_version = $api_version;
    }

    /**
     * @return array
     */
    public function cookieValues()
    {
        return ['adama_session' => $this->keepAliveSession()];
    }

    /**
     * @return null|string
     */
    public function authUniqueId()
    {
        return $this->keepAliveSession();
    }

    /**
     * @return null|string
     * @throws LoginFailedException
     */
    private function keepAliveSession()
    {

        if (is_null($this->session_id)) {

            $xml = $this->logIn();

            $this->session_id = (string)$xml->session[0]->attributes()->sessionid;

        }

        return $this->session_id;

    }

    /**
     * @return mixed
     * @throws LoginFailedException
     */
    private function logIn()
    {
        $ch = curl_init();
        $data_array = array('user' => $this->username, 'password' => $this->password, 'api_key' => $this->api_key);
        curl_setopt($ch, CURLOPT_URL, ApiHost::getHost('T1_AUTHENTICATION', $this->api_subdomain, $this->api_version) . 'login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_array);
        $result_body = trim(curl_exec($ch));

        curl_close($ch);
        $xml = simplexml_load_string($result_body, 'SimpleXMLElement', LIBXML_NOCDATA);

        $authcode = $xml->status[0]->attributes()->code;

        if ($authcode == "auth_error") {
            throw new LoginFailedException("Login to T1 API failed. Incorrect username, password, or api key supplied");
        }
        return $xml;
    }

}