<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro </title>
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
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">

            <div class="col bg-white p-5 rounded-end">

                <h2 class="fd-bold text-center pt-5 mb-5">{{$libro->name}}</h2>

                <form>
                    <div class="mb-4">
                        <label for="autor" class="form-label">Autor: </label>
                        <label for="autor" class="form-label">{{$libro->autor}} </label>
                    </div>
                    <div class="mb-4">
                        <label for="FechaPublicacion" class="form-label">Fecha de Publicacion: </label>
                        <label for="fecha_publicacion" class="form-label">{{$libro->fecha_publicacion}}
                        </label>
                    </div>
                    <div class="mb-4">
                        <label for="FechaPublicacion" class="form-label">Link del libro:</label>
                        <a href="{{$libro->link}}">Pincha aqui</a>
                    </div>


                </form>

            </div>
        </div>
    </div>

</body>

</html>