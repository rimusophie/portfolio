<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends RmsBaseController
{
    public function index() {
        return view('skills-index', $this->data);
    }
}
