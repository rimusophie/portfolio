<?php

namespace App\Util;

use Illuminate\Support\Facades\Log;

/**
 * ユーティティクラス
 */
class PortfolioUtil
{
    /**
     * エラー情報をログに出力する
     *
     * @param string $summary 概要
     * @param Object $e 例外オブジェクト
     * @return void
     */
    public static function outputErrorLog($summary, $e) {
        Log::error($summary);
        Log::error($e->getMessage());
        Log::error(report($e));
    }
}
