-- すでに存在すれば削除する
DROP DATABASE IF EXISTS portfolio;

-- データベースを作成
CREATE DATABASE portfolio;

-- データベース切り替え
USE portfolio;

-- ユーザを作成
-- データ管理者はテーブルのRead/Writeが可能
CREATE USER 'rms'@'%' IDENTIFIED BY '!rms!' -- データ管理者
GRANT SELECT, INSERT, UPDATE, DELETE ON *.* TO 'rms'@'%' IDENTIFIED BY '!rms!'

-- 訪問者はテーブルのReadのみ可能
CREATE USER 'guest'@'%'IDENTIFIED BY 'guest' -- 訪問者
GRANT SELECT ON *.* TO 'guest'@'%' IDENTIFIED BY 'guest'