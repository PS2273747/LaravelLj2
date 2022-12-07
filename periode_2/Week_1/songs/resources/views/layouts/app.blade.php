


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Songs</title>
	<meta name="author" content="Kinga Wullems">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-6 md:pt-6 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="/home">
            <h1 class="text-4xl font-bold text-white text-center">Your Songs</h1>
        </a>
        <a href="{{ route('albums.index')}}">
            <h1 class="text-4xl font-bold text-white text-center">Your Albums</h1>
        </a>
        <a href="{{ route('bands.index')}}">
            <h1 class="text-4xl font-bold text-white text-center">Your Bands</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-5  my-10 rounded-lg shadow-2xl">
        <section>
     
          
        </section>

        <section>
        @yield('content')

          
        </section>
    </main>




</body>
</html>