<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $cars[0]["title"] ?></h1>
    <p>model : <?php echo $cars[0]["model"] ?></p>
    <p><?php echo $cars[0]["description"] ?></p>
    <img src="<?php echo $pictures[0]["path"] ?>" alt="<?php echo $pictures[0]["title"] ?>" style="width: 400px;">
</body>
</html>