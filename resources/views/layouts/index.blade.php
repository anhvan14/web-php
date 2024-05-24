<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">
</head>
<body>
    <a href="{{route('create')}}" class="btn btn-info">Create</a>
<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  @foreach ($products as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->description}}</td>
        <td></td></td>
    </tr>
  @endforeach
</table>
</body>
</html>
