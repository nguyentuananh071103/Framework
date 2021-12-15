<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form method="post" action="/discount">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Enter Description">
    </p>
    <p>
        <input type="number" name="price" placeholder="Enter Price">
    </p>
    <p>
        <input type="number" name="percent" placeholder="Enter Percent">
    </p>
    <p>
        <button type="submit">Tính</button>
    </p>
</form>
</body>
</html>
