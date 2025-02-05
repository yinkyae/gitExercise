<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <style>
            .user-cell{
                width: 100px;
                height: 30px;
                border: 1px dotted gray;
                text-align: center;
                cursor: pointer;

            }
            table{
                margin: auto;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>User Table</h1>
      <table>
        <tr>
            <td class="user-cell">No</td>
            <td class="user-cell">Name</td>
            <td class="user-cell">phone</td>
            <td class="user-cell">Address</td>
            <td class="user-cell">Link</td>
        </tr>
        <tr>
            <td class="user-cell">1</td>
            <td class="user-cell">Ma Ma</td>
            <td class="user-cell">01111111</td>
            <td class="user-cell">Mandalay</td>
            <td class="user-cell"><a href="/">Welcome</a></td>
        </tr>
        <tr>
            <td class="user-cell">2</td>
            <td class="user-cell">Su Su</td>
            <td class="user-cell">02222222</td>
            <td class="user-cell">Yangon</td>
            <td class="user-cell"><a href="/about-us">About Us</a></td>
        </tr>
        <tr>
            <td class="user-cell">3</td>
            <td class="user-cell">Aye Aye</td>
            <td class="user-cell">03333333</td>
            <td class="user-cell">Taungyi</td>
            <td class="user-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell">4</td>
            <td class="user-cell">Ma Ma</td>
            <td class="user-cell">04444444</td>
            <td class="user-cell">Lashio</td>
            <td class="user-cell"><a href="/about-us">About Us</a></td>
        </tr>
        <tr>
            <td class="user-cell">5</td>
            <td class="user-cell">Ei Ei</td>
            <td class="user-cell">05555555</td>
            <td class="user-cell">Monywa</td>
            <td class="user-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell">6</td>
            <td class="user-cell">Aung Aung</td>
            <td class="user-cell">06666666</td>
            <td class="user-cell">Monywa</td>
            <td class="user-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell">7</td>
            <td class="user-cell">Myo Myo</td>
            <td class="user-cell">07777777</td>
            <td class="user-cell">Monywa</td>
            <td class="user-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
      </table>
    </body>
</html>

<script>
    $(document).ready(function () {
        $('.user-cell').click(function () {
            $(this).text('hello');
        })
    })
</script>