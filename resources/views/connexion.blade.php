<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FORUM MATT</title>
        
    </head>
    <body>
    <div class="Barre-du-haut">
        <div class="title m-b-md">
                    FORUM DE MATT
                </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    FORUM DE MATT
                </div>
            </div>
        </div>
        <form>
			<p><label for="nom">Surnom: </label>
				<input type="text" id="nom" /></p>
			<p><label for="mdp">Mot de passe: </label>
				<input type="text" id="mdp" /></p>
				<button type="submit">confirmer</button>
		</form>
    </body>
</html>
