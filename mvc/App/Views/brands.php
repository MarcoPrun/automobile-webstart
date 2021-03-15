<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h2><?php echo $brands[0]["title"]; ?></h2>
        <?php foreach($cars as $car): ?>
        <div>
            <a href="/?page=cars&car=<?php echo $car["id"] ?>"><h3><?php echo $car["title"] ?></h3></a>
                <?php foreach($pictures as $picture): ?>
                    <?php if($picture["cars_id"] === $car["id"]): ?>
                        <img src="<?php echo $picture["path"] ?>" alt="<?php echo $picture["title"] ?>" style="width: 400px;">
                    <?php endif ?>
                <?php endforeach ?>
            <p><?php echo $car["description"] ?></p>
        </div>
        <?php endforeach ?>
    </div>
</body>
</html>