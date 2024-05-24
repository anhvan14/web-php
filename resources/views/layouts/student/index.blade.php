<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">

</head>
<body>
<a href="{{route('student.create')}}">Create</a>
<table>
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
  </tr>
  @foreach ($student as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->gender}}</td>--
        <td></td></td>
    </tr>
  @endforeach
</table>
</body>
</html>
