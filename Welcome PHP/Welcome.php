<!DOCTYPE html>
<html>
<head>
    <title>PHP Welcome</title>
</head>

<body>

    <?php

        date_default_timezone_set("Asia/Kolkata");

        echo "<h1>Welcome</h1>";

        echo "Current Date and Time: "
             . date("d-m-Y h:i:s A");

    ?>

</body>
</html>