<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="{{ route('product2.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name"></label><input type="text" name="name" id="name">
    <label for="description"></label><input type="text" name="description" id="description">
    <label for="price"></label><input type="number" name="price" id="price">
    <input type="submit" value="send">
</form>

</body>
</html>
