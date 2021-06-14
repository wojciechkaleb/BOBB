<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOBB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{mix('css/app.css')}}" rel="stylesheet">

        <!-- Styles -->
	  </head>
    <body class="antialiased">
        <div id="app">
			<app></app>
		</div>
		<script charset="utf-8">
			window.auth_user = {!! json_encode($auth_user); !!};
		</script>
		<script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
