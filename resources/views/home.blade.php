<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background: #15202B;
        }
    </style>
</head>
<body>
    @if(session('id_rol')==1)
    @include('includes.navbarUser')
    @endif
    @if(session('id_rol')==2)
    @include('includes.navbarAdmin')
    @endif
    <h4 class="mb-5 text-white">Libros</h4>
            <div class="row text-center mb-4">
              @foreach($libros as $l)
              <div class="col-4 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{$l->name}}</h5>
                    <a href="{{route('vistaLibro', $l)}}" class="btn btn-primary">Ver Libro</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

</body>
</html>