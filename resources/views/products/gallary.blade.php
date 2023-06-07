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
    <div class="conainer float-left">
        <h3>
            <a href="{{url('/show')}}"><button class="btn btn-primary"> Show Products</button></a>
        </h3>
    </div>
    <div class="container">
        <h1> All Product </h1>
        <table class="table table-borderd table-striped">

            <tbody>
                @foreach($products as $item)
                <tr>


                    <td> <img src="{{asset('uploads/product/'.$item->image)}}" width="150px" alt="Image" height="100px" </td>
                    <td> <img src="{{asset('uploads/product/'.$item->image)}}" width="150px" alt="Image" height="100px" </td>
                    <td> <img src="{{asset('uploads/product/'.$item->image)}}" width="150px" alt="Image" height="100px" </td>

                </tr>


                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>