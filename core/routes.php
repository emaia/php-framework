<?php

$router->get('', 'PagesController@home');
$router->get('/contact', 'PagesController@contact');
$router->post('contact/send', 'PagesController@send');
