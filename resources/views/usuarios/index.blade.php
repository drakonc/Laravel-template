<x-app-layout>
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
    @endpush
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa-user-secret fa fa-fwr"></i>
                </div>
                <div>Usuarios </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('usuarios.create')}}" type="button"  aria-haspopup="true" aria-expanded="false" class="btn btn-primary">
                        <i class="fa fa-plus fa-w-20"></i> Nuevo Usuario
                    </a>
                </div>
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Listado de Usuarios</div>
                <div class="card-body">
                    <x-alerta-component />
                    <table id="tb-rols" class="table table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Role</th>
                                <th>Estado</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario) 
                            <tr>
                                <td>{{$usuario->nombre_completo}}</td>
                                <td>{{$usuario->usuario}}</td>
                                <td>{{$usuario->email}}</td>
                                @if(!empty($usuario->getRoleNames()))
                                    @foreach ($usuario->getRoleNames() as $rolNombre)
                                        <td>{{$rolNombre}}</td>
                                    @endforeach
                                @endif
                                <td><span @if($usuario->estado)class="badge rounded-pill bg-success"@else class="badge rounded-pill bg-secondary" @endif>{{$usuario->estatus}}</span></td>
                                <td width="10%">
                                    <a href="" class="btn btn-primary btn-circle"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-circle btn-confirm" data-object="roles/{{ $usuario->id}}" data-path="GetEliminarRole">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    @push('script')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.js"></script>
        <script src="{{ asset('/js/usuario.js?v='.time()) }}" defer></script>
    @endpush    
</x-app-layout>