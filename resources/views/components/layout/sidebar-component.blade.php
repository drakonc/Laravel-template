<!--Sdebar -->
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{url('/')}}" class="lk-admin.home">
                        <i class="metismenu-icon fas fa-tachometer-alt"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="{{url('/dominio')}}">
                        <i class="metismenu-icon fa-laptop fa fa-fw"></i> Usuarios de Dominio
                    </a>
                    <a href="{{url('/dominio')}}">
                        <i class="metismenu-icon fa-user-plus fa fa-fw"></i> Usuarios de VPN
                    </a>
                    <a href="{{url('/dominio')}}">
                        <i class="metismenu-icon fa-server fa fa-fw"></i> Servidores
                    </a>
                    <a href="{{url('/dominio')}}">
                        <i class="metismenu-icon fa-server fa fa-fw"></i> Servicios
                    </a>
                    <a href="{{url('/dominio')}}">
                        <i class="metismenu-icon fa-unlock-alt fa fa-fw"></i> Credenciales
                    </a>
                </li>
                <li class="app-sidebar__heading">Configuración</li>
                <li >
                    <a href="" class="lk-rolesListar lk-roles.index lk-roles.edit lk-roles.create">
                        <i class="metismenu-icon fa-sitemap fa fa-fwr"></i> Roles
                    </a>
                </li>
                <li>
                    <a href="" class="lk-usuariosListar lk-usuariosCrear">
                        <i class="metismenu-icon fa-user-secret fa fa-fw"></i> Usuarios
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--Sdebar End-->
