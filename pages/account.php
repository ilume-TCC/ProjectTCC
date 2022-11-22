<!DOCTYPE html>
   
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- CSS -->
        <link rel="stylesheet" href="./../css/account.css">
            
        <!-- Title -->
        <title>Conta</title>
        <link rel="shortcut icon" href="./../img/title-user.svg"/>

    </head>

<body>
    <main>
        <div class="container">
            <div class="forms">

                <!-- Login form -->
                <div class="form login">
                    <span class="title">Entrar</span>

                    <form action="../methods/login.php" method="post">
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Digite seu email" maxlength="100" required autofocus>
                            <i class="uil uil-envelope icon"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" class="password" placeholder="Digite sua senha" maxlength="20" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Lembre-me</label>
                            </div>
                            
                            <a href="#" class="text">Esqueceu sua senha?</a>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Entrar">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Não é cadastrado?
                            <a href="#" class="text signup-link">Cadastre-se agora.</a>
                        </span>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="form signup">
                    <span class="title">Cadastrar</span>

                    <form action="../methods/cadastro.php" method="post">
                        <div class="input-field">
                            <input type="text" name="nome" placeholder="Crie seu nome de usuário"  maxlength="9" required autofocus>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Digite seu email" maxlength="100" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="senha" class="password" placeholder="Crie sua senha" maxlength="20" required>
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Confirme sua senha"  maxlength="20" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon">
                                <label for="termCon" class="text">Eu aceitei todos os termos e condições</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="cadastrar">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Já é um membro?
                            <a href="#" class="text login-link">Volte e entre</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!-- JS -->
<script type="text/javascript" src="./../js/account.js"></script>

</body>
</html>