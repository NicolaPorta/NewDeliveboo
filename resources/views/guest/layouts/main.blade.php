<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        {{-- font-awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

        {{-- Google font Spartan --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">

        <!-- CSS libraries -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        {{-- Media Queries --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        
        <!-- Styles -->
        @yield('style & title')
    </head>
    <body>
        {{-- app Vue.js --}}
        <div id="app">
            @yield('main')
        </div>
        {{-- app Vue.js --}}
        @yield('script')
    </body>
</html>