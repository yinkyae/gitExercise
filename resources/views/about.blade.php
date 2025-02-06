<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
      
    </style>

</head>

<body class="m-0 p-0">

    <div class="font-bold bg-black text-white w-full">
        <div class="flex p-2 w-1/4 mx-auto">
            <p class="mx-4">OUR RECIPIE, YOUR INBOX.</p> <a href="/sign-up" class="">Sign Up</a>
        </div>
        
        <svg class="close " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18 17.94 6M18 18 6.06 6" />
        </svg>

    </div>
    <div class="navigation w-full">
        <ul class="flex w-4/6 justify-evenly mx-auto">
            <li class="nav-item">HOME</li>
            <li class="nav-item">PAGES</li>
            <li class="nav-item">PORTFOLIOS</li>
            <li class="nav-item">HEADER</li>
            <li class="nav-item">ELEMENTS</li>
            <li class="nav-item">BLOGS</li>
        </ul>
    </div>
</body>
</html>

<script>
    $(document).ready(

    function () {
            $('.close').click(function () {
                $('.head-nav').hide();
            })
    }

    )
      
</script>
