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
        .user-cell {
            width: 100px;
            height: 30px;
            border: 1px dotted gray;
            text-align: center;
            cursor: pointer;
            margin: 4px;
        }

        table {
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        .beautify-cell {
            animation: cell-animation 5s linear 0.1ms 3;
        }

        @keyframes cell-animation {
            from {

                width: 100px;
                height: 30px;
                border: 1px dotted gray;
                text-align: center;
                cursor: pointer;
                margin: 4px;

            }

            to {
                width: 160px;
                height: 50px;
                border: 1px solid green;
                text-align: center;
                cursor: pointer;
                margin: 50px;
            }
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1>User Table</h1>
    <table>
        <tr>
            <td class="user-cell beautify-cell">No</td>
            <td class="user-cell beautify-cell">Name</td>
            <td class="user-cell beautify-cell">phone</td>
            <td class="user-cell beautify-cell">Address</td>
            <td class="user-cell beautify-cell">Link</td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">1</td>
            <td class="user-cell beautify-cell">Ma Ma</td>
            <td class="user-cell beautify-cell">01111111</td>
            <td class="user-cell beautify-cell">Mandalay</td>
            <td class="user-cell beautify-cell"><a href="/">Welcome</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">2</td>
            <td class="user-cell beautify-cell">Su Su</td>
            <td class="user-cell beautify-cell">02222222</td>
            <td class="user-cell beautify-cell">Yangon</td>
            <td class="user-cell beautify-cell"><a href="/about-us">About Us</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">3</td>
            <td class="user-cell beautify-cell">Aye Aye</td>
            <td class="user-cell beautify-cell">03333333</td>
            <td class="user-cell beautify-cell">Taungyi</td>
            <td class="user-cell beautify-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">4</td>
            <td class="user-cell beautify-cell">Ma Ma</td>
            <td class="user-cell beautify-cell">04444444</td>
            <td class="user-cell beautify-cell">Lashio</td>
            <td class="user-cell beautify-cell"><a href="/about-us">About Us</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">5</td>
            <td class="user-cell beautify-cell">Ei Ei</td>
            <td class="user-cell beautify-cell">05555555</td>
            <td class="user-cell beautify-cell">Monywa</td>
            <td class="user-cell beautify-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">6</td>
            <td class="user-cell beautify-cell">Aung Aung</td>
            <td class="user-cell beautify-cell">06666666</td>
            <td class="user-cell beautify-cell">Monywa</td>
            <td class="user-cell beautify-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
        <tr>
            <td class="user-cell beautify-cell">7</td>
            <td class="user-cell beautify-cell">Myo Myo</td>
            <td class="user-cell beautify-cell">07777777</td>
            <td class="user-cell beautify-cell">Monywa</td>
            <td class="user-cell beautify-cell"><a href="/contact-us">Contact Us</a></td>
        </tr>
    </table>
</body>

</html>

<script>
    $(document).ready(function() {
        // $('.user-cell').click(function() {
        //     $(this).text('hello');
        //     $(this).addClass('beautify-cell')
        // })
    })
</script>
