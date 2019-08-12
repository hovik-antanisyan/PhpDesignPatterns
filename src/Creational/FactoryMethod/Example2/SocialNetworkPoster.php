<?php


namespace App\Creational\FactoryMethod\Example2;


abstract class SocialNetworkPoster
{
    public abstract function getSocialNetwork(): SocialNetworkConnector;

    public function createPost()
    {
        $socialNetwork = $this->getSocialNetwork();

        $socialNetwork->login();
        $socialNetwork->post();
        $socialNetwork->logout();
    }
}
