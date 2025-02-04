<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            .welcome{
                color: blueviolet;
                font-style: italic;
                text-align: center;
            }
            .navbar{
                width: 300px;
                display: flex;
                justify-content: space-evenly;
            }

        </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
                <h1 class="welcome">Welcome Page</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem animi suscipit aspernatur voluptas in nemo voluptates, tenetur repellendus ex? </p>
                <ul class="navbar">
                    <li><a href="/user">User</a></li>
                    <li><a href="/contact-us">Contact</a></li>
                    <li><a href="/admin">Admin</a></li>
                    <li><a href="/about-us">About</a></li>
                </ul>

    </body>
</html>