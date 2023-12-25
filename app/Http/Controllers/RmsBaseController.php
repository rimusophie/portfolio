<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * コントローラーの自作基本クラス
 */
class RmsBaseController extends Controller
{
    /**
     * Bladeに渡すデータ配列(全画面共通のもの)
     *
     * @var array
     */
    protected $data = [];

    function __construct() {
        //parent::__construct();  // 親クラスに定義なし
    }
}
