<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How To Install Vue 3 in Laravel 9 with Vite</title>
     <script>
        (function() {
            window.Laravel = {
            csrfToken: '{{ csrf_token()}}'
            // user : {{ Auth::user() ? Auth::user() ->toJson() : 'null' }}
        };
        })();

    //     // pass auth user
    // window.authUser = {
    //     user: {{ auth()->user() ? auth()->user()->toJson() : 'null' }}}
    


    </script>

	@vite('resources/css/app.css')
</head>
<body>
       {{-- @if(Auth::check())
    <p>Welcome, {{ Auth::user()->name }}!</p>
@else
    <p>Welcome, Guest!</p>
@endif --}}

	<div id="app">
    
        
   

    </div>

	@vite('resources/js/app.js')
</body>
</html>