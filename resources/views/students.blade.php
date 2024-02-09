<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettagli Studenti classe 113</h1>
                <ul>@foreach ($students_data as $student)
                    <li class="list-unstyled" >
                        {{ $student }}
                    </li>
                    @endforeach
                    <div class="mt-3">
                        <a href="{{ route("home")}}"><button class="btn btn-success">Home</button></a>
                        <a href="{{ route("teachers")}}"><button class="btn btn-success">Info teachers</button></a>

                    </div>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>