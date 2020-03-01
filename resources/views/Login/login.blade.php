<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body{
        margin:0;
        padding:0;
        font-familY:sams-sefrif;
    }
    .box{
        width:300px;
        padding:40px;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background: #191919;
        text-align:center;
    }
    .box h1{
        color:white;
        text-transform: uppercase;
        font-weight:500;
    }
    .box input[type = "email"], .box input[type = "password"]{
        border:0;
        background:none;
        display:block;
        margin:20px auto;
        text-align:center;
        border:2px solid #3498bd;
        padding:14px 10px;
        width:200px;
        outline:none;
        color:white;
        border-radius:24px;
        transition: 0.25s;
    }
    .box input[type = "email"], .box input[type = "password"]{
        width:280px;
        border-color: #2ecc71;
    }
    .box button{
        border:0;
        background:none;
        display:block;
        margin:20px auto;
        text-align:center;
        border:2px solid #2ecc71;
        padding:14px 40px;
        outline:none;
        color:white;
        border-radius:24px;
        transition: 0.25s;
        cursor:pointer;
    }

    .box button :hover{
        background=#2ecc71;
    }

    </style>
</head>
<body>
    <form  action="Session" method="post" class="box">
        <h1>Login</h1>
        @csrf
        <input id="email" type="email" name="email" placeholder="Correo" class="@error('email', 'login') is-invalid @enderror">
        <input id="password" type="password"name="password" placeholder="Contraseña" class="@error('password', 'login') is-invalid @enderror">
        <button>Accesar</button>
        <button type="button" onclick="Registrar()">Registrarse</button>
    </form>
    @error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('password', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</body>
</html>
<script>
function Registrar() {
    location.href="Registro_usurio";
}
</script>