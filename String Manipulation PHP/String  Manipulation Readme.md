# PHP String Manipulation Program

## Aim
Implement a PHP program for string manipulation such as reverse, length, and substring.

---

## Code

```php
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
```

---

## Explanation

### `strlen()`

Used to find the length of the string.

### `strrev()`

Used to reverse the string.

### `substr()`

Used to extract a part of the string.

---

## Output

The webpage displays:
- Original string
- String length
- Reversed string
- Substring

---

## How to Run

1. Save the file as `index.php`
2. Place it inside `htdocs`
3. Start Apache server in XAMPP
4. Open browser:
   ```text
   http://localhost/index.php
   ```