<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRM - Employee Registation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="relative z-10 flex flex-col justify-center items-center w-[85%] max-w-[350px] h-full mx-auto gap-3 text-center mt-10">
        <h1 class="text-gray-400"> Employee Registation Form</h1>
        <p class="text-2xl font-bold text-violet-900">Mini Customer Relationship Management.</p>    
</div>  
<div class="relative z-10 flex flex-col  w-[85%] max-w-[350px] h-full mx-auto gap-3  mt-10">
       
    @foreach($errors->all()  as $error) 
    <div class="text-red-600">{{$error}}</div>  
     @endforeach

    <form method="POST" action="/insertemployee">
    {{ csrf_field() }}
    <div>
        <label for="fname" class="pb-2 text-gray-700">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="Enter employee first name" class="w-full rounded-lg"><br>
    </div>
    <div>
        <label for="lname" class="pb-2 text-gray-700">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="Enter employee last name" class="w-full rounded-lg"><br>
    </div>
    <div>
        <label for="cname" class="pb-2 text-gray-700">Company name:</label><br>
        <input type="text" id="cname" name="cname" placeholder="Enter employee's company name" class="w-full rounded-lg"><br>
    </div>
    <div>
    <label for="cid" class="pb-2 text-gray-700">Company id:</label><br>
        <input type="text" id="cid" name="cid" placeholder="Enter employee company id" class="w-full rounded-lg"><br>
    </div>
    <div>
        <label for="email" class="pb-2 text-gray-700">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter employee email address" class="w-full rounded-lg"><br>
    </div>
    <div>
        <label for="phone" class="pb-2 text-gray-700">Phone number:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Enter employee phone number" class="w-full rounded-lg"><br>
    </div>
    <div class="flex flex-row mt-2">
        <input type="submit" value="Submit" class="w-20 px-2 font-semibold text-center text-white bg-red-500 rounded-full hover:bg-red-100 hover:text-red-600">
        <input type="Reset" value="Reset" class="w-20 px-2 ml-10 font-semibold text-center text-white bg-orange-500 rounded-full hover:bg-orange-100 hover:text-orange-600">
     </div>  
    </form>
</div>
<div class=" p-2 mt-10 bg-green-900 rounded-full flex flex-col text-white justify-center items-center w-[85%] max-w-[170px] h-full mx-auto gap-3 text-center">
    <a class="flex flex-col font-semibold text-center rounded-full"  href="/employee">Back to  list</a>
</div>
</body>
</html>