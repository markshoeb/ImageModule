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

    <br><br>
    <div class="container">
        <h1>Product Details</h1>
        <table class="table table-borderd table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->name}} </td>
                    <td> {{$item->price}} </td>

                    <td> <img src="{{asset('uploads/product/'.$item->image)}}" width="100px" alt="Image" height="50px" </td>
                    <td>
                        <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="conainer float-right">
            <h3>
                <a href="{{url('/products')}}"><button class="btn btn-primary"> Add Products</button></a>
            </h3>
        </div>
    </div>
    <div class="conainer float-left">
        <h3>
            <a href="{{url('/all-product')}}"><button class="btn btn-primary"> All Products</button></a>
        </h3>
    </div>
</body>

</html>