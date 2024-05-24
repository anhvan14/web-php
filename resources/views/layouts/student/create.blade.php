<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name student</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Age</label>
                <input type="number"  class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gender</label>
                <input type="text"  class="form-control" name="gender">
            </div>
            <button class="btn btn-info">Create</button>
        </form>
</body>
</html>