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
<h1>Inicio</h1>

@foreach($products as $p)

    <div style="display: flex; gap: 2em">

        <h2>{{$p->name}}</h2>
        <h6>{{$p->description}}</h6>
        <h6>{{$p->price}}</h6>

    </div>
    <form method="POST" action="{{route("product2.destroy",$p)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>

    <a href="{{route("product2.edit",$p)}}">Update</a>

@endforeach

</body>
</html>
