<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    echo "About";


    ?>
    </h1>
<p>
    <?php
    $indexedArray = [
        "Lorem ipsum dolor sit amet.",
    "Lorem ipsum dolor sit amet, consectetur adipisicing.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."
];
    foreach($indexedArray as $value){
        echo ($value);

    }


    ?>
    </p>
</body>
</html>