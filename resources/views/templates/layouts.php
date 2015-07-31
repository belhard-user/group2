<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1><?= $header ?></h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, officia.</p>
<ul>
<?php foreach($names as $name):?>
    <li><?= $name ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>