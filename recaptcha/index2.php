<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_cdn/css/reset.css">
    <title>Google reCaptcha</title>
</head>
<body>

<div class="container">
    <div class="content radius">

        <p class='error'>É preciso validar o captcha :)</p>

        <form action="" method="post" id="formValidate">
            <input type="text" name="user_name" placeholder="Nome do Usuário">
            <input type="email" name="user_email" placeholder="E-mail do Usuário">

            <div class="g-recaptcha_align"></div>

            <button class="btn radius">Enviar dados</button>
        </form>

    </div>
</div>

</body>
</html>