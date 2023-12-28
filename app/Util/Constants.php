<?php
namespace App\Util;

/**
 * 定数クラス
 * @author rimusophie
 *
 */
class Constants
{
    /**
     * サイト名
     */
    public const SITE_NAME = 'ポートフォリオ';

    // 共通レイアウト関連
    /**
     * CSSパス
     */
    public const CSS_HREF_DESTYLE = '/css/destyle.css';
    public const CSS_HREF_PORTFOLIO = '/css/portfolio.css';
    
    /**
     * JSパス
     */
    public const JS_SRC_PORTFOLIO = '/js/portfolio.js';
    public const JS_SRC_JQUERY = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js';

    /**
     * レイアウトテンプレート系
     */
    public const LAYOUT_SECTION_TITLE = 'title';
    public const LAYOUT_SECTION_MAIN = 'main';
    
    public const LAYOUT_FILE_BASE = 'templates.base';

    public const TITLE_TOP = self::SITE_NAME;
}

