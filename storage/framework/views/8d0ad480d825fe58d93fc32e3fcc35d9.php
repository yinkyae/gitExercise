<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            .cell-attr{
                width: 100px;
                height: 50px;
                color: wheat;
                border: 0.5px solid black;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      <table>
        <tr>
            <td class="cell-attr">User</td>
            <td class="cell-attr">Admim</td>
            <td class="cell-attr">Contact</td>
            <td class="cell-attr">About</td>
            <td class="cell-attr">Welcome</td>
        </tr>
        <tr>
            <td class="cell-attr"><a href="/user">User</a></td>
            <td class="cell-attr"><a href="/admin">Admin</a></td>
            <td class="cell-attr"><a href="/contact-us">Contact Us</a></td>
            <td class="cell-attr"><a href="/about-us">About Us</a></td>
            <td class="cell-attr"><a href="/">Welcome</a></td>
        </tr>
      </table>
    </body>
</html><?php /**PATH /Users/macbookpro/Documents/GitExercise/resources/views/contact.blade.php ENDPATH**/ ?>