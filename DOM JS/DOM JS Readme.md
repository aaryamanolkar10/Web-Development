# Dynamic Content Using JavaScript DOM

## Aim
Create a web page that uses JavaScript to display dynamic content using DOM.

---

## Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>DOM Example</title>
</head>

<body>

    <h1 id="demo">Hello</h1>

    <button onclick="changeText()">
        Click Me
    </button>

    <script>
        function changeText() {
            document.getElementById("demo").innerHTML =
                "Welcome to JavaScript DOM";
        }
    </script>

</body>
</html>
```

---

## Explanation

### Selecting Element

```javascript
document.getElementById("demo")
```

Selects the HTML element using its id.

---

### Changing Content

```javascript
.innerHTML
```

Changes the text content dynamically.

---

### Button Click Event

```html
<button onclick="changeText()">
```

Calls the JavaScript function when button is clicked.

---

## Output

- Initially displays `Hello`
- After clicking button, text changes to:
  `Welcome to JavaScript DOM`

---

## How to Run

1. Save the file as `index.html`
2. Open the file in any browser
3. Click the button to see dynamic content