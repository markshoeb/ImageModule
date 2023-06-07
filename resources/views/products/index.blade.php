<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    @if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

    <form action="{{url('/add-product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h1>Add Products</h1>
            <label>Product Name</label>
            <input type="text" name="name" class="form-control">
        </div><br>
        <div class="container">
            <label>Description!</label>
            <textarea name="description" class="form-control"></textarea>
        </div><br>
        <div class="container">
            <label>Price!</label>
            <input type="text" name="price" class="form-control">
        </div><br>
        <div class="container">
            <label>Upload File!</label>
            <input type="file" name="image" class="form-control">
        </div><br>
        <div class="container">
            <button class="btn btn-primary" type="submit">Save!</button>
        </div>
    </form>
    <div class="conainer float-left">
        <h3>
            <a href="{{url('/show')}}"><button class="btn btn-primary"> Show Products</button></a>
        </h3>
    </div>
</body>

</html>