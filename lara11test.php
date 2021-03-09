<!DOCTYPE html>
<html lang="{{ app()->getlocale()}}"
<!--{{}}で閉じているものはPHPないで変更される-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--ブラウザのedgeに対応できるという意味-->
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
	<!--画面の大きさを色々な大きさに対応出来るようにする-->
	
	<!--CSRF Token -->
	{{-- 後の章で説明が入る--}}
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<!--外部からの攻撃を防ぐためのプログラム-->
	<title>@yield('title')</title>
	
	<!-- Scripts -->
	{{-- Laravel標準で用意されているJSを読み込む--}}
	<script src="{{secure_asset('js/app.js') }}" defer></script>
	
	<!--fonts-->
	<link rel="dns-prefetch"  href="https://fonts.gstatic.com">
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
	<!--グーグルフォントを使用する-->
	
	<!-- styles -->
	{{--Laravel標準で用意されているCSSを読み込む--}}
	<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
	{{--この章の後半で使うCSSを読み込む--}}
	<link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		{{--画面上部につくナビゲーションバー--}}
		<nav class="navber navber-expand -md navber-dark navber-laravel">
			<div class="container">
				<a class="navber-brand" href="{{ url('/') }}">
					{{ config('app.name','laravel') }}
				</a>
				<button class="navber-toggler" type="button" data-toggle="collapse" data-target"#navberSupportedContent" aria-controld="navberSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navber-toggler-icon">
				</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!--左のナビ-->
					<ul class="navbar-nav mr-auto">
					</ul>
					<!--右のナビ-->
					<ul class="navber-nav ml-autp">
					</ul>
				</div>
			</div>
		</nav>
		<!--ここまでがナビゲーションバー-->
		
		<main class="py-4">
			{{--コンテンツを入れるため、＠yieldで空けておく--}}
			@yield('content')
		</main>
	</div>
</body>
</html>