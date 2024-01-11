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
    public function getAllRecords() {
        try {
            $this->data['skills'] = Skill::all();

            // メンテナンスモードを取得
            $this->data['is_maintenance'] = PortfolioConfig::isPortfolioMaintenance();
        } catch (PDOException $e) {
            // データベース系のエラー
            $message = 'スキル情報の取得に失敗しました。';
            PortfolioUtil::outputErrorLog($message, $e);
            throw new Exception('スキル情報の取得に失敗しました。');
        } catch (Exception $e) {
            // その他エラー
            $message = PortfolioConstants::VAR_NAME_ERROR;
            PortfolioUtil::outputErrorLog($message, $e);
            throw new Exception(PortfolioConstants::MSG_EXCEPTION);
        }
        return $this->data;
    }
}
