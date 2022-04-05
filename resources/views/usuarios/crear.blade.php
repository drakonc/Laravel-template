<x-app-layout>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa-user-secret fa fa-fwr"></i>
                </div>
                <div>Usuarios</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('usuarios.index')}}" type="button"  aria-haspopup="true" aria-expanded="false" class="btn btn-primary">
                        <i class="fa fa-list-ol fa-w-20"></i> Lista Usuarios
                    </a>
                </div>
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Ingresar Nuevo Usuario</div>
                <div class="card-body">
                    <x-alerta-component />
                    {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="nombres" class="col-form-label">Nombre:</label>
                                    {!! Form::text('nombres', null, ['id'=>'nombres','class' => 'form-control','placeholder'=>'Ingrese el nombre del usuario','required'])!!}
                                    @error('nombres')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="apellidos" class="col-form-label">Apellido:</label>
                                    {!! Form::text('apellidos', null, ['id'=>'apellidos','class' => 'form-control','placeholder'=>'Ingrese el apellido del usuario','required'])!!}
                                    @error('apellidos')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="usuario" class="col-form-label">Usuario:</label>
                                    {!! Form::text('usuario', null, ['id'=>'usuario', 'class' => 'form-control','placeholder'=>'Ingrese el usuario','required'])!!}
                                    @error('usuario')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="email" class="col-form-label">Correo:</label>
                                    {!! Form::email('email', null, ['id'=>'email','class' => 'form-control','placeholder'=>'Ingrese el correo electronico','required'])!!}
                                    @error('email')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="password" class="col-form-label">Contraseña:</label>
                                    {!! Form::password('password', ['id'=>'password','class' => 'form-control','placeholder'=>'Ingrese la contraseña','required'])!!}
                                    @error('password')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="role" class="col-form-label">Rol:</label>
                                    {!! Form::select('role', $roles , null , ['id'=>'role', 'class' => 'form-control form-select','placeholder' => 'Seleccione una Opción','required']) !!}
                                    @error('role')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="estado" class="col-form-label">Estado:</label>
                                    {!! Form::select('estado', Helper::Estado() , null , ['id'=>'estado', 'class' => 'form-control form-select','placeholder' => 'Seleccione una Opción','required']) !!}
                                    @error('estado')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            {!! Form::submit('Crear',['class' => 'mt-5 btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>