<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Util\PortfolioConstants;
use App\Util\PortfolioConfig;
use App\Util\PortfolioUtil;
use Exception;
use PDOException;

class SkillController extends RmsBaseController
{
    public function index() {
        try {
            $skills = Skill::all();
            $this->data['skills'] = $skills;
            //$this->data['skills'] = [];

            // メンテナンスモードを取得
            $this->data['is_maintenance'] = PortfolioConfig::isPortfolioMaintenance();

        } catch (PDOException $e) {
            // データベース系のエラー
            $this->data[PortfolioConstants::VAR_NAME_ERROR] = 'スキル情報の取得に失敗しました。';
            PortfolioUtil::outputErrorLog($this->data[PortfolioConstants::VAR_NAME_ERROR], $e);

            return view(PortfolioConstants::BLADE_PORTFOLIO_ERROR_500, $this->data);
        } catch (Exception $e) {
            // その他エラー
            $this->data[PortfolioConstants::VAR_NAME_ERROR] = PortfolioConstants::MSG_EXCEPTION;
            PortfolioUtil::outputErrorLog($this->data[PortfolioConstants::VAR_NAME_ERROR], $e);

            return view(PortfolioConstants::BLADE_PORTFOLIO_ERROR_500, $this->data);
        }
        return view('skills-index', $this->data);
    }
}
