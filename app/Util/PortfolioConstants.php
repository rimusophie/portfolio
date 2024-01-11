<?php
namespace App\Util;

/**
 * 定数クラス
 */
class PortfolioConstants
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
    public const CSS_HREF_RMS = '/css/rms.css';
    
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
    public const LAYOUT_SECTION_STARTHEAD = 'starthead';
    public const LAYOUT_SECTION_LASTHEAD = 'lasthead';
    
    public const LAYOUT_FILE_BASE = 'templates.base';
    public const LAYOUT_FILE_HEADER = 'templates.header';
    public const LAYOUT_FILE_FOOTER = 'templates.footer';
    public const BLADE_PORTFOLIO_ERROR = 'errors.error';
    public const BLADE_PORTFOLIO_ERROR_401 = 'errors.401';
    public const BLADE_PORTFOLIO_ERROR_403 = 'errors.403';
    public const BLADE_PORTFOLIO_ERROR_404 = 'errors.404';
    public const BLADE_PORTFOLIO_ERROR_419 = 'errors.419';
    public const BLADE_PORTFOLIO_ERROR_429 = 'errors.429';
    public const BLADE_PORTFOLIO_ERROR_500 = 'errors.500';
    public const BLADE_PORTFOLIO_ERROR_503 = 'errors.503';

    public const TITLE_TOP = self::SITE_NAME;

    public const TITLE_ERROR = 'エラー';
    public const TITLE_404 = 'ページが見つかりません';
    public const TITLE_500 = 'サーバーエラー';

    public const VAR_NAME_ERROR = 'error';

    public const MSG_EXCEPTION = '不明なエラーが発生しました';

    // CSSクラス
    public const CSS_CLASS_BACKGROUND = 'background';
    public const CSS_CLASS_MAIN = 'page-layout';
    public const CSS_CLASS_HEADER = 'header-layout hf-design';
    public const CSS_CLASS_FOOTER = 'footer-layout hf-design';
}

