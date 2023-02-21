<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRM</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
          
    <!-- hero section -->
    <div class="bg-[url('https://images.pexels.com/photos/286565/pexels-photo-286565.jpeg?auto=compress&cs=tinysrgb&w=600')] h-[100vh] bg-cover bg-center relative mb-10" >
        
    <div class="fixed z-10 flex justify-center py-4 bg-gray-100 items-top sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-200 underline dark:text-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-200 underline dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-200 underline dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>      
    <!-- overlay section -->
        
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-black/70">
        </div>

        <!-- main text -->
        <div class="relative z-10 flex flex-col justify-center items-center w-[85%] max-w-[800px] h-full mx-auto gap-3 text-white text-center">
            <h1 class="text-6xl font-bold ">Mini Customer Relationship Management</h1>
            <p class="pt-5 text-xl text-gray-400">Media Horizon</p>
            <div class="grid grid-cols-2 gap-5 mt-10">
                <a href="/company" class="p-3 bg-gray-600 rounded-lg hover:bg-gray-100 hover:text-gray-800" >Company</a>
                <a  href="/employee" class="p-3 bg-gray-600 rounded-lg hover:bg-gray-100 hover:text-gray-800">Employee</a>
            </div>
        <div>
      
      
        </div>    
    </div>      
    
</body>
</html>