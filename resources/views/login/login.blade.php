<x-login-layout>
    <img class="wave" src="{{url('assets/images/wave.png')}}">
    <div class="micontainer">
        <div class="img">
            <img src="{{url('assets/images/img.svg')}}">
        </div>
        <div class="login-container">
            {!! Form::open(['url' => '/login']) !!}
                <img class="avatar" src="{{url('assets/images/avatars/avatar.svg')}}">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Usuario</h5>
                        {!! Form::text('usuario', null, ['id'=>'usuario','class' => 'input'])!!}
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                   </div>
                    <div>
                        <h5>Contraseña</h5>
                        {!! Form::password('password', ['id'=>'password','class' => 'input'])!!}
                    </div>
                </div>
                <a href="#">Recuperar Contraseña</a>
                <input type="submit" class="btn" value="Login">
                <x-alerta-component />
            {!! Form::close() !!}
        </div>
    </div>
</x-login-layout>