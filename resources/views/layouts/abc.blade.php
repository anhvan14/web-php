<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Hello {{$tung}}</h1>
    <a href="{{route('index')}}">Back</a>
    <a class="btn btn-info" href="{{route('login')}}">Bấm vào đây để login</a>
    <div class="card">
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name Product</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number"  class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text"  class="form-control" name="description">
            </div>
            <button class="btn btn-info">Create</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
