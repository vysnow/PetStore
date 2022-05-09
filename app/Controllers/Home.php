<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    //path: app/Controllers/Home.php
    // ...
    public function docs()
    {
        return view('docs', [
            'docPath' => base_url('api.yaml?t=' . time()),
        ]);
    }
    // ...
}
