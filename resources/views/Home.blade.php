<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Laravel</title>
</head>

<body>
    <div class="top-header flex-display">
        <ul class="nav-menus flex-display">
            <li><img src="https://themixbysu.com/ecommerence/img/logo.svg" alt=""></li>
            <li>Home</li>
            <li>Shopping</li>
            <li>Shops</li>
            <li>Blog</li>
            <li>About</li>
            <li>Contact</li>
        </ul>

        <ul class="nav-action flex-display">

            <li><svg style="width: 35px; height:35px; color:black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
              </svg>
              </li>
            <li>
                <svg style="width: 35px; height:35px; color:black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                  </svg>
                  
            </li>
            <li>
                <svg style="width: 35px; height:35px; color:black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                  </svg>
            </li>

        </ul>
    </div>

    <div class="hero-section flex-display">
            <div class="number-design">
                01 / 03
            </div>
            <div class="sing-mig">
                <img src="https://themixbysu.com/brancy/assets/images/slider/text-theme.webp" alt="">
            </div>
            <div class="hero-photo">
                <img src="https://themixbysu.com/brancy/assets/images/slider/Slider-5-Camera.png?t=1738902213252" alt="" width="841" height="823">
            </div>
            <div class="favourite-collection">
                    Favourite Collection
            </div>
    </div>

    <div class="hero-text">
        <p style="font-size: 4rem; font-weight:bold; margin-bottom:0px">ALL PRODUCTS</p>
        <p style="width: 400px;">You can get all product of The Mix By Su in one place. You Can get</p>
        <button style="background: pint; padding: 15px 40px; border: 1px solid rgb(250, 132, 152); border-radius: 20px; background:rgb(250, 132, 152); color:white">KyiShu Mal</button>
    </div>


</body>

</html>
