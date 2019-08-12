<?php

use App\Creational\FactoryMethod\Example2\FacebookPoster;
use App\Creational\FactoryMethod\Example2\LinkedInPoster;
use App\Creational\FactoryMethod\Example2\SocialNetworkPoster;

require '../../../../vendor/autoload.php';

function createClient(SocialNetworkPoster $socialNetworkPoster)
{
    $socialNetworkPoster->createPost();
}

createClient(new FacebookPoster('johndoe@gmail.com', '123654'));

createClient(new LinkedInPoster('anndoe@gmail.com', '987123'));
