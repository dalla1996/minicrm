<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRM - Comapany Registation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="relative z-10 flex flex-col justify-center items-center w-[85%] max-w-[350px] h-full mx-auto gap-3 text-center mt-10">
        <h1 class="text-gray-400"> Company Registation Form</h1>
        <p class="text-2xl font-bold text-violet-900">Mini Customer Relationship Management.</p>    
</div>  

<div class="relative z-10 flex flex-col  w-[85%] max-w-[350px] h-full mx-auto gap-3  mt-10">
        @foreach($errors->all()  as $error) 
        <div class="text-red-600">{{$error}}</div>  
        @endforeach
    <form method="POST" action="/insertcompany">
     {{ csrf_field() }}
     <div class="">
        <label for="cname" class="pb-2 text-gray-700">Company name:</label><br>
        <input type="text" id="cname" name="cname" placeholder="Enter company name" class="w-full rounded-lg">
    </div>
     <div class="">
     <label for="email" class="pb-2 text-gray-700">email:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter company email address" class="w-full rounded-lg">
     </div>
     <div class="">
     <label for="website" class="pb-2 text-gray-700" >website:</label><br>
        <input type="text" id="website" name="website" placeholder="Enter company website" class="w-full rounded-lg">
     </div>
     <div class="">
     <label for="logo" class="pb-2 text-gray-700" >Select logo:</label><br>
        <input class="block w-full h-8 pb-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" id="image" accept="image/*"  name="image">
     </div>
     <div class="flex flex-row mt-2">
        <input type="submit" value="Submit" class="w-20 px-2 font-semibold text-center text-white bg-red-500 rounded-full hover:bg-red-100 hover:text-red-600">
        <input type="Reset" value="Reset" class="w-20 px-2 ml-10 font-semibold text-center text-white bg-orange-500 rounded-full hover:bg-orange-100 hover:text-orange-600">
     </div>

    </form>
<div class=" p-2 mt-10 bg-green-900 rounded-full flex flex-col text-white justify-center items-center w-[85%] max-w-[170px] h-full mx-auto gap-3 text-center">
    <a class="flex flex-col font-semibold text-center rounded-full"  href="/company">Back to list</a>
</div>
</body>
</html>