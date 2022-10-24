<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
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
        
    <body class="container">
       

        
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="row">
                <button type="submit" class="btn btn-primary">
                    Crear Mayorista
                </button>
                <a class="btn btn-primary" href="{{ route('users.index') }}"
                >Cancelar</a
            >
                <h1>Informacion del mayorista</h1>
                <div class="col">
                    <label for="exampleInputEmail1"
                        >Escribe el nombre del mayorista</label
                    >
                    <input
                        name="Name"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Empresa</label>
                    <input
                        name="Company"
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1"
                        >Correo Electronico del mayorista</label
                    >
                    <input
                        name="Email"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Numero de telefono</label>
                    <input
                        name="Phone"
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1"
                        >Porcentaje de descuento</label
                    >
                    <input
                        name="Discount"
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                    />
                </div>

               <!-- <h1>Direccion de envio</h1>

                <div class="col">
                    <label for="exampleInputEmail1">Nombre del contacto</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>

                <div class="col">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input
                        name="Address"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Codigo postal</label>
                    <input
                        name="PostalCode"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Colonia</label>
                    <select
                        name="Neighborhood"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <input
                        name="City"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Estado</label>
                    <input
                        name="State"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Correo electronico</label>
                    <input
                        name="Email"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input
                        name="Phone"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>

                 <h1>Direccion de facturacion</h1>

                <div class="col">
                    <input type="checkbox" name="checkBillings" > direccion facturacion </input>

                    <label for="exampleInputEmail1">Nombre del contacto</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Codigo postal</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Colonia</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Estado</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Corrreo Electronico</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input
                        name="ContactName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>-->

                
                <h1>Datos de facturacion</h1>

                <div class="col">
                    <label for="exampleInputEmail1">Razon social</label>
                    <input
                        name="BusinessName"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Uso del CFDI</label>
                    <input
                        name="Cfdi"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">RFC</label>
                    <input
                        name="Rfc"
                        type="text"
                        class="form-control"
                        placeholder="First name"
                    />
                </div> 
            </div>
        </form>
    </body>
</html>
