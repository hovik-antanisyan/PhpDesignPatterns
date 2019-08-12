<?php


namespace App\Creational\FactoryMethod\Example2;


interface SocialNetworkConnector
{
    public function post();

    public function login();

    public function logout();
}
