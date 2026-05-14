# PHP Form Using POST Method

## Aim
Write a PHP program to accept form input and display it using the POST method.

---

## Code

```php
<!DOCTYPE html>
<html>
<head>
    <title>POST Method</title>
</head>

<body>

    <form method="POST">

        Name:
        <input type="text" name="name"><br><br>

        Email:
        <input type="text" name="email"><br><br>

        <input type="submit" value="Submit">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "<h3>Entered Details</h3>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email;
        }

    ?>

</body>
</html>
```

---

## Explanation

### POST Method

```php
method="POST"
```

Used to send form data securely.

---

### Accessing Form Data

```php
$_POST['name']
```

Gets the entered name.

```php
$_POST['email']
```

Gets the entered email.

---

### Displaying Data

```php
echo
```

Displays submitted values on the webpage.

---

## Output

The webpage:
- Accepts name and email
- Displays entered details after submission

---

## How to Run

1. Save the file as `index.php`
2. Place it inside `htdocs` folder
3. Start Apache server in XAMPP
4. Open browser and run:

```text
http://localhost/index.php
```