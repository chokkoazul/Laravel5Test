@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Nuevo Usuario</div>

                <div class="panel-body">
                {!!Form::open(['route'=> 'admin.users.store','method'=>'POST'])!!}

                    <form>
                        <div class="form-group">
                            {!! Form::label('email','Correo electrónico') !!}
                            {!! Form::text('email',null,['class' => 'form-control','placeholder' => 'Por favor introduzca su e-mail']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password','Contraseña') !!}
                            {!! Form::password('password',['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('first_name','Nombre') !!}
                            {!! Form::text('first_name',null,['class' => 'form-control','placeholder' => 'Por favor introduzca su Nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name','Apellido') !!}
                            {!! Form::text('last_name',null,['class' => 'form-control','placeholder' => 'Por favor introduzca su Apellido']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('type','Tipo') !!}
                            {!! Form::select('type',['' => 'Seleccione Tipo','user' => 'Usuario','admin' => 'Administrador'],null,['class' => 'form-control','placeholder' => 'Por favor introduzca su Apellido']) !!}
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
