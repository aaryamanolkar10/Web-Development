# PHP Array Program

## Aim
Create a PHP script to store and display values in an array.

---

## Code

```php
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
```

---

## Explanation

### Array Creation

```php
$colors = array("Red", "Blue", "Green");
```

Stores multiple values in an array.

---

### foreach Loop

```php
foreach($colors as $color)
```

Used to access and display each array value.

---

## Output

The webpage displays:
- Red
- Blue
- Green

---

## How to Run

1. Save the file as `index.php`
2. Place it inside `htdocs`
3. Start Apache server in XAMPP
4. Open browser and run:

```text
http://localhost/index.php
```