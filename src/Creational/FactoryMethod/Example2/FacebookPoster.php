<?php


namespace App\Creational\FactoryMethod\Example2;


class FacebookPoster extends SocialNetworkPoster
{
    public $email;

    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->email, $this->password);
    }
}
