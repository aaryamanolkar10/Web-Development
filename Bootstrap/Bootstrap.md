# Responsive Web Page Using Bootstrap

## Aim
Develop a responsive web page using Bootstrap Grid and Components.

---

## Code

```html
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h1 class="text-center text-primary">
        Bootstrap Grid
    </h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card p-3">
                <h3>HTML</h3>
                <button class="btn btn-primary">
                    Button
                </button>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <h3>CSS</h3>
                <button class="btn btn-success">
                    Button
                </button>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <h3>Bootstrap</h3>
                <button class="btn btn-danger">
                    Button
                </button>
            </div>
        </div>

    </div>

</div>

</body>
</html>
```

---

## Bootstrap Components Used

- Container
- Grid System
- Card
- Button

---

## Output

The webpage displays a responsive Bootstrap layout with cards and buttons.

---

## How to Run

1. Save the file as `index.html`
2. Open the file in any browser
3. Ensure internet connection for Bootstrap CDN