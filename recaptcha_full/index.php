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

        <?php
        $recaptchaValidate = filter_input(INPUT_GET, 'recaptcha', FILTER_VALIDATE_BOOLEAN);

        if($recaptchaValidate === false){
            echo "<p class='error'>É preciso validar o captcha :(</p>";
        }
        ?>

        <form action="controller.php" method="post" id="formValidate">
            <input type="text" name="user_name" placeholder="Nome do Usuário">
            <input type="email" name="user_email" placeholder="E-mail do Usuário">
            <button class="btn radius g-recaptcha"
                    data-sitekey="6Lc402sUAAAAANXBNlI6jSxjOvQz6_exyZDwEvaI"
                    data-callback="submitFormValidate">Enviar dados
            </button>
        </form>

    </div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function submitFormValidate() {
        document.getElementById('formValidate').submit();
    }
</script>
</body>
</html>