# HTML Form Example

## Aim
Create a basic HTML form with the following fields:
- Name
- Email
- Gender
- Date of Birth
- Submit Button

---

## HTML Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form>
        Name:
        <input type="text" name="name"><br><br>

        Email:
        <input type="email" name="email"><br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        Date of Birth:
        <input type="date" name="dob"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
```

---

## Output
The webpage displays a simple registration form with input fields for name, email, gender, and date of birth along with a submit button.