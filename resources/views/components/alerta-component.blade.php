@if(Session::has('message'))
    <div class="container-fluid">
        <div class="alert alert-{{ Session::get('typealert') }} alert-dismissible fade show mtop16" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('message') }}
            <script>
                setTimeout(function() {  $('.alert').alert('close') },6000)
            </script>
        </div>
    </div>
@endif
