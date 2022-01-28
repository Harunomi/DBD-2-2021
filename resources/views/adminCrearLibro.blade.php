<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background: #15202B;
        }
    </style>

<body>
    @include('includes.navbarAdmin')
    <section>
        <div class="container">
            <h4 class="mb-3 text-white">Creacion de un Libro</h4>
            <form method="POST" action="{{route('crearLibro')}}">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="NombreUsuario" class="form-label text-white">Nombre</label>
                    <input type="string" id="name" name="name" class="form-control" aria-describedby="emailHelp">
                    <div id="nameHelp" class="form-text text-white">nombre no debe superar los 50 caracteres</div>

                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label text-white">Autor</label>
                    <input type="autor" class="form-control" name="autor" id="autor">

                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label text-white">Link</label>
                    <input type="link" class="form-control" name="link" id="link">
                </div>
                <div class="mb-3">
                    <label for="fecha_publicacion" class="form-label text-white">Fecha de Publicacion</label>
                    <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion">
                </div>


                <button type="submit" class="btn btn-primary">Crear Libro!</button>
            </form>
        </div>
    </section>

</body>

</html>