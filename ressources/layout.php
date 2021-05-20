<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $l_description ?? 'Bienvenue' ?>">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $l_title ?? 'Site web' ?></title>
</head>
<body>

    <?= $l_content ?>

    <?= $l_script ?? '' ?>   
</body>
</html>