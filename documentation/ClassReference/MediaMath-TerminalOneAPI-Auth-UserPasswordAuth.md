MediaMath\TerminalOneAPI\Auth\UserPasswordAuth
===============

Class UserPasswordAuth




* Class name: UserPasswordAuth
* Namespace: MediaMath\TerminalOneAPI\Auth
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable](MediaMath-TerminalOneAPI-Infrastructure-CookieAuthenticable.md)




Properties
----------


### $username

    private  $username





* Visibility: **private**


### $password

    private  $password





* Visibility: **private**


### $api_key

    private  $api_key





* Visibility: **private**


### $session_id

    private null $session_id = null





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Auth\UserPasswordAuth::__construct($username, $password, $api_key)

UserPasswordAuth constructor.



* Visibility: **public**


#### Arguments
* $username **mixed**
* $password **mixed**
* $api_key **mixed**



### cookieValues

    mixed MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable::cookieValues()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable](MediaMath-TerminalOneAPI-Infrastructure-CookieAuthenticable.md)




### authUniqueId

    mixed MediaMath\TerminalOneAPI\Infrastructure\Authenticable::authUniqueId()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Authenticable](MediaMath-TerminalOneAPI-Infrastructure-Authenticable.md)




### keepAliveSession

    null|string MediaMath\TerminalOneAPI\Auth\UserPasswordAuth::keepAliveSession()





* Visibility: **private**




### logIn

    mixed MediaMath\TerminalOneAPI\Auth\UserPasswordAuth::logIn()





* Visibility: **private**



