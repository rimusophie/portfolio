<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillSheetController extends RmsBaseController
{
    public function index() {
        return view('skillsheet-index', $this->data);
    }
}
