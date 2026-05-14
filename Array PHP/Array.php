<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Example</title>
</head>

<body>

    <?php

        $colors = array("Red", "Blue", "Green");

        echo "<h2>Colors Array</h2>";

        foreach($colors as $color) {
            echo $color . "<br>";
        }

    ?>

</body>
</html>