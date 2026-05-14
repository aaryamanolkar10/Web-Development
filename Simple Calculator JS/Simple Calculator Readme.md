# Simple Calculator Using JavaScript

## Aim
Write a JavaScript program for a simple calculator using functions and switch case.

---

## Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <script>
        function calculate() {

            let num1 = parseInt(document.getElementById("num1").value);
            let num2 = parseInt(document.getElementById("num2").value);
            let op = document.getElementById("op").value;

            let result;

            switch(op) {

                case "+":
                    result = num1 + num2;
                    break;

                case "-":
                    result = num1 - num2;
                    break;

                case "*":
                    result = num1 * num2;
                    break;

                case "/":
                    result = num1 / num2;
                    break;

                default:
                    result = "Invalid Operator";
            }

            document.getElementById("answer").innerHTML =
                "Result = " + result;
        }
    </script>
</head>

<body>

    Number 1:
    <input type="text" id="num1"><br><br>

    Number 2:
    <input type="text" id="num2"><br><br>

    Operator (+,-,*,/):
    <input type="text" id="op"><br><br>

    <button onclick="calculate()">
        Calculate
    </button>

    <h2 id="answer"></h2>

</body>
</html>
```

---

## Explanation

### Getting Input Values

```javascript
document.getElementById()
```

Used to get values entered by the user.

---

### Switch Case

```javascript
switch(op)
```

Checks the operator entered by the user.

---

### Operations

```javascript
case "+"
```

Performs addition.

```javascript
case "-"
```

Performs subtraction.

```javascript
case "*"
```

Performs multiplication.

```javascript
case "/"
```

Performs division.

---

### Display Result

```javascript
innerHTML
```

Displays the result dynamically on the webpage.

---

## Output

The webpage performs:
- Addition
- Subtraction
- Multiplication
- Division

using JavaScript switch case.

---

## How to Run

1. Save the file as `index.html`
2. Open the file in any browser
3. Enter numbers and operator
4. Click `Calculate`