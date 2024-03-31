<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    {{-- Navbar Handphone --}}
    <nav class=" py-2 px-2  bg-blue-900 mx-auto lg:hidden">
        <div class="container">
            <div class="flex justify-between">
                <img class="w-14" src="{{ asset('image/logo.png') }}" alt="Contoh Gambar">
                <p class="text-xs text-white">PROFESSIONAL TECHNICAL PROGRAM <br>WORKFORCE EDUCATION</p>
                <img class="w-10" src="{{ asset('image/toogle.svg') }}" alt="Contoh Gambar">
            </div>
        </div>
    </nav>
    {{-- Navbar Desktop --}}
    <nav class="grid grid-rows-3 grid-flow-col ">
        <div class="row-span-3">
            <a href="">
            <img class="w-36" src="{{ asset('image/logo.png') }}" alt="Contoh Gambar">
            </a>
        </div>
        <div class="bg-blue-900 w-full h-16 flex justify-between col-span-2    ">
            <p class="text-xl text-white pt-2 pl-2">PROFESSIONAL TECHNICAL PROGRAM <br>WORKFORCE EDUCATION</p>
            <div class="flex justify-end space-x-8 ">
                <p class="text-l text-white pt-5 ">Registration Form :</p>
                <div class="pt-5">
                            <button class="bg-blue-200 rounded-full text-l  ">Registration Form</button>
                </div>
                <div class="bg-blue-700 ">
                    <img class="w-36 " src="{{ asset('image/24.png') }}" alt="Contoh Gambar">
                </div>
            </div>
        </div>
        <div class="bg-blue-200 w-full h-8 space-x-8 row-span-2 col-span-2  text-center">
            <a href="" class="">Home</a>
            <a href="" class="">About Us</a>
            <a href="" class="">Programs and Course</a>
            <a href="" class="">Admissions</a>
            <a href="" class="">Profesional Services</a>
            <a href="" class="">Alumni</a>
            <a href="" class="">Media Center</a>
            <a href="" class="">Book Now</a>
            <select name="" id="" class="">
                <option><?php $s="reg.php"; ?>Find a Program</option>
                <option><?php $s="reg.php"; ?>Course Schedules</option>
                <option><?php $s="reg.php"; ?>Operation</option>
                <option><?php $s="reg.php"; ?>Mechanical Maintenances</option>
                <option><?php $s="reg.php"; ?>Industrial Safety</option>
                <option><?php $s="reg.php"; ?>Instrumentation</option>
                <option><?php $s="reg.php"; ?>Tuition and Fees</option>
                <option><?php $s="reg.php"; ?>Payment Options</option>
                <option><?php $s="reg.php"; ?>Cancellation</option>
                <option><?php $s="reg.php"; ?>Certification</option>
            </select>
        </div>    
    </nav>
    </body>
</html>