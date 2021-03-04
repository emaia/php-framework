<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        $home = 'Home Page';

        return view('index', compact('home'));
    }

    public function contact()
    {
        $contact = 'Contact Page';

        return view('contact', compact('contact'));
    }

    public function send()
    {
        die(var_dump($_POST));
        require 'app/views/contact.view.php';
    }
}
