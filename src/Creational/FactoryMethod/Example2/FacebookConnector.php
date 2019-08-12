<?php


namespace App\Creational\FactoryMethod\Example2;


class FacebookConnector implements SocialNetworkConnector
{
    public $email;

    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function post()
    {
        echo "{Created facebook post by {$this->email} user}" . '<br>';
    }

    public function login()
    {
        echo "{login to facebook with {$this->email} and {$this->password}}" . '<br>';
    }

    public function logout()
    {
        echo "{logout from facebook for {$this->email}}" . '<br>';
    }
}
