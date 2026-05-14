# Image, Hyperlink and Nested Table

## Aim
Design a web page that includes an image, hyperlink, and a nested table.

---

## HTML Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>Image, Hyperlink and Nested Table</title>
</head>
<body>

    <h1>Web Page Example</h1>

    <!-- Image -->
    <img src="https://via.placeholder.com/200"
         alt="Sample Image"
         width="200">

    <br><br>

    <!-- Hyperlink -->
    <a href="https://www.google.com" target="_blank">
        Visit Google
    </a>

    <br><br>

    <!-- Nested Table -->
    <table border="1" cellpadding="10">

        <tr>
            <th>Name</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Aarya</td>

            <td>
                <table border="1" cellpadding="5">

                    <tr>
                        <th>Course</th>
                        <th>City</th>
                    </tr>

                    <tr>
                        <td>Computer Engineering</td>
                        <td>Pune</td>
                    </tr>

                </table>
            </td>

        </tr>

    </table>

</body>
</html>
```

---

## Output
The webpage displays:
- An image
- A hyperlink
- A nested table inside the main table

---

## Conclusion
A web page containing an image, hyperlink, and nested table was created successfully using HTML.