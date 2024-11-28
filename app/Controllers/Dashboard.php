<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('v_dashboard');
    }
}
