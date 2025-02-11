<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Laravel</title>
    <style>
        .welcome {
            color: blueviolet;
            font-style: italic;
            text-align: center;
        }

        .navbar {
            width: 300px;
            display: flex;
            justify-content: space-evenly;
        }

        .cell {
            width: 100px;
            height: 100px;
            margin: 10px;
            border: 1px solid blueviolet;
            text-align: center;
            cursor: pointer;
        }

        .mytable {
            margin: auto;
        }

        .cell-color {
            animation-name: example;
            animation-duration: 4s;
        }

        @keyframes example {
            from {
                background-color: blue;
                font-weight: 200;
                font-style: normal;
                color: black;
            }

            to {
                background-color: red;
                font-weight: 600;
                font-style: italic;
                color: white
            }
        }
    </style>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 class="welcome">Welcome Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem animi suscipit aspernatur voluptas in nemo
        voluptates, tenetur repellendus ex? </p>
    <ul class="navbar">
        <li><a href="/user">User</a></li>
        <li><a href="/contact-us">Contact</a></li>
        <li><a href="/admin">Admin</a></li>
        <li><a href="/about-us">About</a></li>
    </ul>
    <table class="mytable">
        <tr>
            <td class='cell'>A</td>
            <td class='cell'>B</td>
            <td class='cell'>C</td>
            <td class='cell'>D</td>
            <td class='cell'>E</td>
        </tr>
        <tr>
            <td class='cell'>F</td>
            <td class='cell'>G</td>
            <td class='cell'>H</td>
            <td class='cell'>I</td>
            <td class='cell'>J</td>
        </tr>
        <tr>
            <td class='cell'>K</td>
            <td class='cell'>L</td>
            <td class='cell'>M</td>
            <td class='cell'>N</td>
            <td class='cell'>O</td>
        </tr>
        <tr>
            <td class='cell'>P</td>
            <td class='cell'>Q</td>
            <td class='cell'>R</td>
            <td class='cell'>S</td>
            <td class='cell'>T</td>
        </tr>
        <tr>
            <td class='cell'>U</td>
            <td class='cell'>V</td>
            <td class='cell'>W</td>
            <td class='cell'>X</td>
            <td class='cell'>Y</td>
        </tr>
    </table>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.cell').click(function() {
            $(this).addClass('cell-color');
        })
    })
</script>
<?php /**PATH /Users/macbookpro/Documents/GitExercise/resources/views/welcome.blade.php ENDPATH**/ ?>