<div class="container mt-5">
    <div class="alert alert-success">
        <h1>¡Hola {{ $nombre }}!</h1> 
        <p>Recibimos tu mensaje. Un asesor te contactará al correo: <b>{{ $email }}</b></p>
    </div>
    <a href="{{ url('/sobre-mi') }}" class="btn btn-primary">Volver al inicio</a>
</div>