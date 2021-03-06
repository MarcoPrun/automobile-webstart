<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $title ?></h1>
    <p><?php echo $introduction ?></p>
    <div>
    <?php foreach($brands as $brand): ?>
    <div>
        <a href="/?page=brands&brand=<?php echo $brand["title"] ?>"><h2><?php echo $brand["title"]; ?></h2></a>
        <?php foreach($cars as $car): ?>
        <div>
            <?php if($car["brands_id"] === $brand["id"]): ?>
                <a href="/?page=cars&car=<?php echo $car["id"] ?>"><h3><?php echo $car["title"] ?></h3></a>
                
                <?php foreach($pictures as $picture): ?>
                    <?php if($picture["cars_id"] === $car["id"]): ?>
                        <img src="<?php echo $picture["path"] ?>" alt="<?php echo $picture["title"] ?>" style="width: 400px;">
                    <?php endif ?>
                <?php endforeach ?>

                <p><?php echo $car["description"] ?></p>
            <?php endif ?>
        </div>
        <?php endforeach ?>
    </div>
    <?php endforeach ?>
    </div>

</body>
</html>