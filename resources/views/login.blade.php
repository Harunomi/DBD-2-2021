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


    <div class="container mt-5 rounded shadow">
        <div class="row align-items-stretch">
        </div>
        <div class="col bg-black p-5 rounded-end">
            <div class="text-end">
            </div>
            <h2 class="fd-bold text-center pt-5 mb-5" style="color:white">Bienvenido</h2>

            <form method="POST" action="{{route('sesionIniciada')}}">
                {{ csrf_field() }}
                <div class="mb-4">
                    <label for="email" class="form-label" style="color:white">Correo electrónico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label" style="color:white">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" href="/loginAttempt" style="color:white">Iniciar
                        Sesión</button>
                </div>
                <div class="my-3">
                    <span style="color:white">
                        No tienes cuenta?<a href="/register"> Regístrate</a>
                    </span>
                </div>
            </form>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>