<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="copyright" content="Copyright 2021 rimusophie">
<title>@yield(Constants::LAYOUT_SECTION_TITLE)</title>
<!-- headタグの先頭に入れる場合は該当bladeファイルにstartheadを指定する -->
@yield('starthead')
<!-- headタグの最後に入れる場合は該当bladeファイルにendheadを指定する -->
@yield('lasthead')
</head>
<body class="background">
<header>
	{{-- @include('templates.header') --}}
</header>
<main role="main">
@yield(Constants::LAYOUT_SECTION_MAIN)
</main>
<footer>
	{{--  @include('templates.footer') --}}
</footer>
</body>
</html>