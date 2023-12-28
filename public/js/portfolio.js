/**
 * 要素を開閉する
 * @param {Object} element 開閉する要素群
 * @param {Boolean} expand 開くならtrue、閉じるならfalse
 */
function expandElement(element, expand) {
  $(element).each(function(){
    
    if(expand === true) {
      $(this).fadeIn(300);
    } else {
      $(this).fadeOut(300);
    }
  });
}

/**
 * 10進数から16進数に変換
 * @param {Number} value 数値
 * @return {String} 16進数の値
 */
function decimalToHex(value) {
  return value.toString(16);
}

/**
 * 16進数から10進数に変換
 * @param {String} value 16進数の値
 * @return {Number} 10進数の値
 */
function hexToDecimal(value) {
  return parseInt(value, 16);
}

/**
 * カラーコードからRGBに分解
 * @param {String} color_code カラーコード(#あり)
 * @return {Object} RGBの連想配列
 */
function colorCodeToRgb(color_code) {
  // rgbに分解
  let r = color_code.substring(1,2);
  let g = color_code.substring(3,2);
  let b = color_code.substring(5,2);
  
  let ret = {};
  
  ret['r'] = r;
  ret['g'] = g;
  ret['b'] = b;
  
  return ret;
}

/**
 * カラーコードからHSVに変換
 * @param {String} color_code カラーコード(#あり)
 * @return {Object} HSVの連想配列
 */
function rgbToHsv(color_code) {
  
  
}

/**
 * 削除確認
 */
function deleteConfirm() {
  return confirm("削除します。よろしいですか?");
}

/**
 * トグルボタンのCSS切り替え
 * @param {Object} jquery_name $()に入れる名称(thisも可)
 */
function toggleButton(jquery_name) {
  $(jquery_name).toggleClass('button-toggle-on-layout');
  $(jquery_name).toggleClass('button-toggle-on-design');
  $(jquery_name).toggleClass('button-toggle-off-layout');
  $(jquery_name).toggleClass('button-toggle-off-design');
}