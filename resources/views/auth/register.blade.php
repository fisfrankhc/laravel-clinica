<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/assets/login.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="overlay">

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="con">
                <header class="head-form">
                    <h2>CREAR CUENTA</h2>
                    <p>Ingrese sus datos para poder registrarse</p>
                    <br>
                    <div class="field-set">
                        <span class="input-item"><i class="fa fa-user-circle"></i></span>
                        <input class="form-input" name="name" id="txt-input" type="text"
                            placeholder="Ingresar nombre" style="text-transform: uppercase" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <span class="input-item"><i class="fa-solid fa-envelope"></i></span>
                        <input class="form-input" name="email" id="txt-input" type="text"
                            placeholder="prueba@gmail.com" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <span class="input-item"><i class="fa fa-key"></i></span>
                        <input class="form-input" name="password" type="password" placeholder="constraseña"
                            id="password" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <span class="input-item"><i class="fa fa-key"></i></span>
                        <input class="form-input" name="password_confirmation" type="password"
                            placeholder="confirmar contraseña" id="password_confirmation" name="password" required>
                        <span><i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i></span>
                        <br>
                        <button class="log-in" type="submit">REGISTRARME</button>
                    </div>
                    <div class="other">
                        <a href="{{ route('login') }}" class="btn submits frgt-pass"
                            style="margin: 0; display: contents;">Ir al LOGIN</a>
                    </div>
            </div>
        </form>

    </div>
    <script src="{{ asset('/assets/login.js') }}"></script>
</body>

</html>
