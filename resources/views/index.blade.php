<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>FrescoPack</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"
            rel="stylesheet"
        />

        <!-- Styles -->

        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>

    <body class="container">
        <a class="btn btn-primary"  href="{{route('users.create')}}">Nuevo Mayorista</a>
        <table id="example" class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nombre</td>
                    <td>Empresa</td>
                    <td>Correo Electronico</td>
                    <td>Telfono</td>
                    <td>Descuento%</td>
                    <td>No C</td>
                    <td>No O</td>
                    <td>No s</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->IdUser }}</td>
                    <td>{{ $user->Name." ".$user->LastName }}</td>
                    <td>{{ $user->Company }}</td>
                    <td>{{ $user->Email }}</td>
                    <td>{{ $user->Phone }}</td>
                    <td>{{ $user->Discount }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>

        <!-- <div>
            {{ $users }}
        </div> -->

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#example").DataTable();
            });
        </script>
    </body>
</html>
