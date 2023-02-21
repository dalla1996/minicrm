<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRM - Employee</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="relative z-10 flex flex-col justify-center items-center w-[85%] max-w-[350px] h-full mx-auto gap-3 text-center mt-10">
        <h1 class="text-gray-400">Employee</h1>
        <p class="text-2xl font-bold text-violet-900">Mini Customer Relationship Management.</p>    
</div> 
<div class=" p-2 mt-10 bg-gray-900 rounded-full flex flex-col text-white justify-center items-center w-[85%] max-w-[170px] h-full mx-auto gap-3 text-center">
    <a class="flex flex-col font-semibold text-center rounded-full"  href="/">Home</a>
    
</div> 
<div class="flex flex-col justify-center items-center w-[100%] max-w-[800px] h-full mx-auto gap-3 text-center mt-10">
    <table class="border rounded-lg table-auto border-slate-400">
    <thead>
  
        <tr>
        <th class="border border-gray-400">First name</th>
        <th class="border border-gray-400">Last name</th>
        <th class="border border-gray-400">Company ID</th>
        <th class="border border-gray-400">Company</th>
        <th class="border border-gray-400">Email</th>
        <th class="border border-gray-400">Phone</th>
        <th class="border border-gray-400">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($details as $detail)
        <tr>
        <td class="border border-gray-400 p-2.5">{{$detail->fname}}</td>
        <td class="border border-gray-400 p-2.5">{{$detail->lname}}</td>
        <td class="border border-gray-400 p-2.5">{{$detail->c_id}}</td>
        <td class="border border-gray-400 p-2.5">{{$detail->cname}}</td>
        <td class="border border-gray-400 p-2.5">{{$detail->email}}</td>
        <td class="border border-gray-400 p-2.5">{{$detail->phone}}</td>
        <td class="border border-gray-400 p-2.5">
        <a class="flex flex-col px-2 font-semibold text-center text-white bg-green-500 rounded-full hover:bg-green-100 hover:text-green-600"  href="/updateemployee/{{$detail->id}}">Update</a>
            
        <td class="border border-gray-400 p-2.5">
            <a class="flex flex-col px-2 font-semibold text-center text-white bg-red-500 rounded-full hover:bg-red-100 hover:text-red-600"  href="/deleteemployee/{{$detail->id}}">Delete</a>
        </td>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class=" p-2 mt-10 bg-orange-400 rounded-full flex flex-col text-white justify-center items-center w-[85%] max-w-[170px] h-full mx-auto gap-3 text-center">
    <a class="flex flex-col font-semibold text-center rounded-full"  href="/addemployee">Add New Employee</a>
    
</div>

</body>
</html> 