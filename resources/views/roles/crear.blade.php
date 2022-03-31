<x-app-layout>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa-sitemap fa fa-fwr"></i>
                </div>
                <div>Roles </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('roles.index')}}" type="button"  aria-haspopup="true" aria-expanded="false" class="btn btn-primary">
                        <i class="fa fa-list-ol fa-w-20"></i> Listado de Roles
                    </a>
                </div>
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Editar Role</div>
                <div class="card-body">
                    <x-alerta-component />
                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                        <div class="col-12 mb-4">
                            <div class="form-group row">
                                <label for="name" class="col-form-label">Nombre:</label>
                                <div class="col-12">
                                    {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','placeholder'=>'Ingrese el nombre del rol'])!!}
                                    @error('name')<x-validate-error :message="$message"/>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Permisos para este Rol:</label>
                            <div class="form-group">
                                <div class="row">
                                    @foreach($permission as $value)
                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <div class="form-check form-check-inline form-switch">
                                                        {{ Form::checkbox('permission[]', $value->id, false, ['class' => 'form-check-input',"role"=>"switch"]) }}
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">{{ $value->name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            {!! Form::submit('Guardar',['class' => 'mt-5 btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>    
</x-app-layout>