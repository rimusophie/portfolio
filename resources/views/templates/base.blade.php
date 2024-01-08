<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="copyright" content="Copyright 202４ rimusophie">
	<title>@yield(Constants::LAYOUT_SECTION_TITLE)</title>
	{{-- headタグの先頭に入れる場合は該当bladeファイルにstartheadを指定する --}}
	@yield(Constants::LAYOUT_SECTION_STARTHEAD)
	<link rel="stylesheet" href="{{ Constants::CSS_HREF_DESTYLE }}" />
	<link rel="stylesheet" href="{{ Constants::CSS_HREF_RMS }}" />
	{{-- headタグの最後に入れる場合は該当bladeファイルにendheadを指定する --}}
	@yield(Constants::LAYOUT_SECTION_LASTHEAD)
</head>
<script>
$(function(){
	// スタイルシートの切り替え
	
});
</script>
<body class="{{ Constants::CSS_CLASS_BACKGROUND }}">
	<header class="{{ Constants::CSS_CLASS_HEADER }}">
		@include(Constants::LAYOUT_FILE_HEADER)
	</header>
	<main class="{{ Constants::CSS_CLASS_MAIN }}" role="main">
		@yield(Constants::LAYOUT_SECTION_MAIN)
	</main>
	<footer class="{{ Constants::CSS_CLASS_FOOTER }}">
		@include(Constants::LAYOUT_FILE_FOOTER)
	</footer>
</body>
</html>