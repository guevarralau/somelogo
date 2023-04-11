<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Jobs</title>
        @vite('resources/css/app.css')
    </head>
    <div class="flex flex-col h-screen justify-between">
    <header class="bg-gray-800 text-white w-full h-16 shadow">
        <nav class="flex justify-between items-center container mx-auto h-full">
            <!-- <div class="w-8 h-8 bg-black rounded-full">

            </div> -->
            <div class="text-2xl italic ">SomeLogo</div>
            <ul class="list-none flex w-full max-w-md justify-center items-center">
                <li class="px-5 py-2 mx-3 text-lg hover:underline"><a href="{{ route('login');}}">Login </a></li>
                <li class="px-5 py-2 mx-3 text-lg hover:underline"><a href="{{ route('register');}}">Register </a></li>
            </ul>
        </nav>
    </header>
    <body class="w-full bg-gradient-to-r from-purple-500 to-pink-500 backdrop-blur-md">
        <div class="container mx-auto px-4 flex-col items-center justify-center text-center">
        <img class="ease-in-out duration-300 mx-auto w-[300px] h-[300px] rounded-full border-4 border-gray-800 hover:border-8 hover:w-[350px] hover:h-[350px] " src="{{url('/bg-mountain.jpg')}}" alt="bg-mountain">
            <h1 class="text-5xl my-5">Welcome to this SomeLogo Page!</h1>
            <p class="text-1xl italic my-5">"Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing."</p>
        </div>
    </body>
    <footer class="bg-gray-800 shadow">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="{{ url('/')}}" class="hover:underline">SomeLogo</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
        </div>
    </footer>
    </div>
   
    
</html>
