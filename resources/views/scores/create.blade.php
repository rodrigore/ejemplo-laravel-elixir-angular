<!DOCTYPE html>
<html ng-app="bugueadosApp" ng-controller="ScoreController as vm">
    <head>
        <title>Laravel</title>

        <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
        </style>
    </head>
    <body style='padding-top:70px'>

        <div class="container">
            <div class="content">

                Listado de pokemons:
                <ul>
                    <li ng-repeat="pokemon in vm.list"> @{{ pokemon.value | uppercase}}</li>
                </ul>

                <input ng-model="vm.title" type='text' id='title' name='title' class='form-control'/>
                <button ng-click="vm.addPokemon()"> Agregar</button>


                @if (count($errors) > 0)
                    <div class='alert alert-danger'>
                        <strong> Errores: </strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form ng-submit="vm.submitForm()" id='form' method="POST" class='form'>

                    {{ csrf_field() }}

                    <div class='form-group'>
                        <label> Username:</label>
                        <input ng-model="vm.data.username" type='text' name='username' class='form-control'/>
                    </div>

                    <div class='form-group'>
                        <label> Correo:</label>
                        <input ng-model="vm.data.email" type='text' name='email' class='form-control' />
                    </div>

                    <div class='form-group'>
                        <button class='btn btn-primary'>Crear</button>
                    </div>
                </form>

                <pre>
                <code>
                    @{{ vm.data | json }}
                </code>
                </pre>
            </div>
        </div>

        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
        <script src='/js/main.js'></script>
    </body>
</html>

