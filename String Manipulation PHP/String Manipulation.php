<!DOCTYPE html>
<html>
<head>
    <title>String Functions</title>
</head>

<body>

    <?php

        $str = "Hello World";

        echo "<h2>Original String: $str</h2>";

        echo "String Length: " . strlen($str) . "<br><br>";

        echo "Reverse String: " . strrev($str) . "<br><br>";

        echo "Substring: " . substr($str, 0, 5);

    ?>

</body>
</html>