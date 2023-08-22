
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image:   linear-gradient(315deg, #072d80 0%, #0e113e 74%);
            position: relative;
        }
        .body-bg::before{
            content: "";
            background-image: url("{{asset('images/st.magdalena_logo.png')}}");
            position: absolute;
            top: -70px;
            right: 0px;
            bottom: 0px;
            left: 250px;
            opacity: 0.08;
            background-repeat: no-repeat;
            background-size:1000px;
            z-index: -1;
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">AICS RECORDING MANAGEMENT SYSTEM</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to AICS Program</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-10 z-index">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3"  type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3" type="password"
                                name="password"
                                required autocomplete="current-password" />
                </div>
                <div class="flex justify-end">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:text-blue-800 hover:underline mb-6">Forgot your password?</a>
                @endif
                </div>
                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
            </form>
        </section>
    </main>

  
   
</body>
</html>
