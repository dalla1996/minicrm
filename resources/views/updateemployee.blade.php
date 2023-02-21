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
        <h1 class="text-gray-400"> Company Update Form</h1>
        <p class="text-2xl font-bold text-violet-900">Mini Customer Relationship Management.</p>    
</div>  

<div class="relative z-10 flex flex-col justify-center items-center w-[85%] max-w-[350px] h-full mx-auto gap-3 text-center mt-10">
        @foreach($errors->all()  as $error) 
        <div class="text-red-600">{{$error}}</div>  
        @endforeach
        

    <form method="POST" action="/updatecompanyinfo">
     {{ csrf_field() }}
   
        <input type="hidden" id="id" name="id" value="{{$details->id}}"><br> 
        <label for="cname">company name:</label><br>
        <input type="text" id="cname" name="cname" value="{{$details->name}}"><br>
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email" value="{{$details->email}}email"><br>
        <label for="website">website:</label><br>
        <input type="text" id="website" name="website" value="{{$details->website}}"><br>
        <label for="logo">Select logo:</label><br>
        <input  type="file" id="image" accept="image/*" value="{{$details->logo}}" name="image"><br>
        <input type="submit" value="Update">
        <input type="Reset" value="Cancel"> 

<div class=" p-2 mt-10 bg-green-900 rounded-full flex flex-col text-white justify-center items-center w-[85%] max-w-[170px] h-full mx-auto gap-3 text-center">
    <a class="flex flex-col font-semibold text-center rounded-full"  href="/company">Back to list</a>
</div>
</body>
</html>