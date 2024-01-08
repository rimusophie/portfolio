cd .\public\css

# _rms.scssをコンパイル
sass _rms.scss rms.css
Write-Output "> rms.cssに出力しました。"

# _portfolio.scssをコンパイル
sass _portfolio.scss portfolio.css
Write-Output "> portfolio.cssに出力しました。"

cd ../../