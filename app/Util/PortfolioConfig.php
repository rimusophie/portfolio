<?php

namespace App\Util;

/**
 * コンフィグクラス
 */
class PortfolioConfig
{
    /**
     * エラー情報をログに出力する
     *
     * @return void
     */
    public static function isPortfolioMaintenance() {
        // デフォルトはfalse固定
        return config('portfolio_settings.portfolio_maintenance', false);
    }
}
