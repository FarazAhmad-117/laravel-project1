<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-nav-link link="/" label="Home"/>
        <x-nav-link link="/about" label="About"/>
        <x-nav-link link="/contact" label="Contact"/>
    </nav>


    <?php // echo $slot; ?>

    {{$slot}}

</body>
</html>
