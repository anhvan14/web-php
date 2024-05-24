<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">
</head>
<body>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
  </tr>
  @foreach ($tung as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
    </tr>
  @endforeach
</table>
</body>
</html>
