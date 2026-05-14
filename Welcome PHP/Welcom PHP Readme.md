# PHP Welcome Message and Date-Time Display

## Aim
Design a PHP script to display a Welcome message and current date & time.

---

## Code

```php
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
```

---

## Explanation

### `echo`

```php
echo
```

Used to display output on the webpage.

---

### `date()`

```php
date("d-m-Y h:i:s A")
```

Displays current date and time.

---

### `date_default_timezone_set()`

```php
date_default_timezone_set("Asia/Kolkata");
```

Sets the timezone to India.

---

## Output

The webpage displays:
- Welcome message
- Current date
- Current time

---

## How to Run

1. Save the file as `index.php`
2. Place it inside the `htdocs` folder of XAMPP
3. Start Apache server
4. Open browser and run:

```text
http://localhost/index.php
```