<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do Lists!!</title>
    <!-- Bootstrap Link !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body style="background-color: #3C5A72;">
<div class= "container w-25 mt-5">
    <div class= "card shadow-sm">
        <div class= "card-body">
        <h1>To Do Lists</h1>
        <form action="{{ route('store')}}" method="POST" autocomplete="off">
            {{-- CSRF == Cross-site request forgery   CSRF Token 
                เป็นระบบป้องกันของ laravel ต้องทำทุกครั้งที่ต้องใช้ form
                ถ้าไม่ใส่หลังจากกด submit จะขึ้น 419 | Page Expired--}}
            @csrf   
            <div class="input-group">
                <input type="text" name="Lists" class="form-control" placeholder="Create your To Do Lists">
                <button type="submit" class="btn btn-dark btn-xs"><i class="bi bi-plus-lg"></i></button>
            </div>
        </form>
        @if (count($toDoLists))
        <ul class="list-group list-group-flush mt-3">
            @foreach ($toDoLists as $toDoList)
            <li class="list-group-item">
                <form action="{{ route('destroy', $toDoList -> id) }}" method="POST">
                    {{ $toDoList -> Lists }}
                    @method('DELETE')
                    @csrf 
                    <button type="submit" class="btn btn-danger btn-sm float-end"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </li>
            @endforeach
        </ul>
        @else
            <div class="alert alert-warning mt-3" role="alert">
                You should Create Todo List !!!
          </div>
        @endif
        </div>
        @if (count($toDoLists))
                  <div class="alert alert-primary" role="alert">
                    You have {{ count($toDoLists) }} pending tasks !!!
                  </div>

        @endif
    </div>
</div>
    
</body>
</html>