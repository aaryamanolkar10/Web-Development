# JavaScript Form Validation

## Aim
Write a JavaScript program to validate form inputs such as email and empty fields.

---

## Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>

    <script>
        function validateForm() {

            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;

            if (name == "" || email == "") {
                alert("Fields cannot be empty");
                return false;
            }

            if (!email.includes("@")) {
                alert("Enter valid email");
                return false;
            }

            alert("Form Submitted");
            return true;
        }
    </script>
</head>

<body>

    <form onsubmit="return validateForm()">

        Name:
        <input type="text" id="name"><br><br>

        Email:
        <input type="text" id="email"><br><br>

        <input type="submit" value="Submit">

    </form>

</body>
</html>
```

---

## Explanation

### Empty Field Validation

```javascript
if (name == "" || email == "")
```

Checks whether fields are empty.

---

### Email Validation

```javascript
if (!email.includes("@"))
```

Checks whether email contains `@`.

---

### Form Validation Call

```html
<form onsubmit="return validateForm()">
```

Calls JavaScript function when form is submitted.

---

## Output

The webpage validates:
- Empty fields
- Invalid email format

and displays alert messages accordingly.

---

## How to Run

1. Save the file as `index.html`
2. Open it in any browser
3. Enter values and click Submit