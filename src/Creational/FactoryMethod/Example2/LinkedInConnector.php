<?php


namespace App\Creational\FactoryMethod\Example2;


class LinkedInConnector implements SocialNetworkConnector
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
        echo "{Create Linkedin post for user {$this->email}}" . '<br>';
    }

    public function login()
    {
        echo "{Login to Linkedin  with {$this->email} and {$this->password}}" . '<br>';
    }

    public function logout()
    {
        echo "{Logout from Linkedin by user {$this->email}}" . '<br>';
    }
}
