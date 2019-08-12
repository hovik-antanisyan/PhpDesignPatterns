<?php


namespace App\Creational\FactoryMethod\Example2;


class LinkedInPoster extends SocialNetworkPoster
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
        return new LinkedInConnector($this->email, $this->password);
    }
}
