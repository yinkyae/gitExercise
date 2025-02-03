<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      <table>
        <th>
            <td>No</td>
            <td>Name</td>
            <td>phone</td>
            <td>Address</td>
            <td>Link</td>
        </th>
        <tr>
            <td>1</td>
            <td>Ma Ma</td>
            <td>01111111</td>
            <td>Mandalay</td>
            <td><a href="/">Welcome</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Su Su</td>
            <td>02222222</td>
            <td>Yangon</td>
            <td><a href="/about-us">About Us</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Aye Aye</td>
            <td>03333333</td>
            <td>Taungyi</td>
            <td><a href="/contact-us">Contact Us</a></td>
        </tr>
      </table>
    </body>
</html>