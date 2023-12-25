<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends RmsBaseController
{
    public function index() {
        return view('index', $this->data);
    }
}
