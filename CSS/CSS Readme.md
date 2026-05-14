# CSS Styling Web Page

This project demonstrates the use of:
- Inline CSS
- Internal CSS
- External CSS

It styles headings and tables using different CSS methods.

---

## Files Used

### 1. index.html

```html
<!DOCTYPE html>
<html>
<head>
    <title>CSS Example</title>

    <!-- Internal CSS -->
    <style>
        h2 {
            color: blue;
            text-align: center;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Inline CSS -->
    <h1 style="color:red; text-align:center;">
        Student Details
    </h1>

    <h2>Table Example</h2>

    <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Marks</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Aarya</td>
            <td>90</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Rahul</td>
            <td>85</td>
        </tr>
    </table>

</body>
</html>
```

---

### 2. style.css

```css
body {
    background-color: lightgray;
    font-family: Arial;
}
```

---

## Output

The webpage displays:
- Red heading using inline CSS
- Blue heading using internal CSS
- Styled table
- Gray background using external CSS

---

## How to Run

1. Create a folder
2. Add `index.html`
3. Add `style.css`
4. Open `index.html` in any browser