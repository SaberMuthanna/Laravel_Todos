<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Todos</title>
    </head>
    <body>
        <h1 class ="text-center my-5"> Todos Pages </h1>
        <div class = " row justify-content-center">
            <div class = "col-md-8 ">
                <div class="card card-default">
                    <div class="card-header">
                      todos
                    </div>
                   <div class="card-body">
                        <ul class="list-group ">
                            @foreach ( $todos as $todo)
                                <li class="list-group-item">{{ $todo->name }}
                                    <Button class = "btn btn-primary float-right">View</Button>
                                </li>
                            @endforeach
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>
