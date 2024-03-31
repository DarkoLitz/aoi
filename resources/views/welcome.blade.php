<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Course</title>
</head>
<body>
    <nav class=" py-2 px-2  bg-blue-900 mx-auto">
        <div class="container">
            <div class="flex justify-between">
                <img class="w-14" src="{{ asset('image/logo.png') }}" alt="Contoh Gambar">
                {{-- <img class="w-14" src="../public/image/logo.png" alt=""> --}}
                <p class="text-xs text-white">PROFESSIONAL TECHNICAL PROGRAM <br>WORKFORCE EDUCATION</p>
                <img class="w-5 " src="../public/image/toogle.svg">
            </div>
        </div>
    </nav>
    <div>
        <img src="..//public/image/AA (1).jpg" alt="">
    </div>

    <div class="bg-blue-600 py-2 px-5">
        <div class=" flex justify-between ">
            <img class="w-48 h-32" src="{{ asset('image/ogpo1.jpg') }}" alt="Contoh Gambar">
            <p class="text-xs text-white pt-5">OGPO - OIL & GAS <br>PRODUCTION OPERATOR</p>
            <p class="flex row  ">Start End</p>
        </div>
    </div>
    
</body>
</html>