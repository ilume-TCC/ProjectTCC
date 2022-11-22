
<!DOCTYPE html>
   
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="./../css/report.css">
        <link rel="stylesheet" href="./../css/index.css">

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
        <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"></script>

        <!-- Title -->
        <title> Denuncie </title>
        <link rel="shortcut icon" href="./../img/title-bullhorn.svg"/>

    </head>

<body>

<!-- Side Header -->
<header>
    <aside>
        <div class="side-header">
            <span><i class="fa-solid fa-bars"></i></span>
        </div>
        <i class="user fa-solid fa-user"></i>
            <ul class="support">
                <li><i class="plus fa-solid fa-person"></i></li>
                <li><i class="plus fa-solid fa-language"></i></li>
                <li><i class="plus fa-solid fa-book"></i></li>
                <li><i class="plus fa-solid fa-door-open"></i></li>
            </ul>
    </aside>

<main>

    <!-- Top Header -->
    <nav>
        <div class="container">
            <div>
                <a class="i" id="Lume">
                    <span style="text-shadow: 0px 0px 10px #FFF; color:#FFF">i</span>Lume
                </a>
            </div>

            <ul>
                <li><a href="home-user.php"><i class="fa-solid fa-house"></i><span class="ocult-line">-</span> Início </a></li>
                <li><a href="articles-user.php"><i class="fa-solid fa-newspaper"></i><span class="ocult-line">-</span> Artigos </a></li>
                <li><a href="#"><i class="cab fa-solid fa-bullhorn"></i><span class="ocult-line">-</span> Denuncie </a></li>
                <li><a href="team-user.php"><i class="fa-solid fa-people-group"></i><span class="ocult-line">-</span> Equipe </a></li>
            </ul>
        </div>
    </nav>

    <!-- Website Body -->
    <div class="header-body">
        <div class="container">
            <div>          
                <div class="container-report">
                    <div class="forms">
                        
                        <!-- Report Form -->
                        <div class="form">
                            <span class="title"> Denunciar </span>
            
                            <form action="../methods/denuncia.php">
                                <div class="input-field">
                                <input type="text" name="email" placeholder="Digite seu email" maxlength="100" required autofocus>
                                <i class="uil uil-envelope icon"></i>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="" id="cep" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="CEP" maxlength="9" required>
                                    <i class="uil uil-location-pin-alt"></i>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="" onkeypress="return letters(event,this);" placeholder="Bairro" maxlength="100" required>
                                    <i class="uil uil-map"></i>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="" onkeypress="return letters(event,this);" placeholder="Endereço do local" maxlength="100" required>
                                    <i class="uil uil-location-arrow"></i>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="" onkeypress="return letters(event,this);"  placeholder="Causa do incidente" minLenght="5" maxlength="26" required>
                                    <i class="uil uil-exclamation-triangle"></i>
                                </div>

                                <div class="input-field" id="input-file">
                                    <a href="mailto:ilumetcc@gmail.com"><input type="text" name="" onkeypress="return letters(event,this);"  placeholder="Envie um arquivo" required></a>
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
            
                                <div class="checkbox-text">
                                    <div class="checkbox-content">
                                        <input type="checkbox" id="termCon">
                                        <label for="termCon" class="text"> Aceito todos os termos e condições </label>
                                    </div>
                                </div>
            
                                <div class="input-field button">
                                    <input type="submit" value="Denunciar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="container-map">

                    <!-- Map -->
                    <div class="forms">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14662.309365716808!2d-51.14808575!3d-23.258462599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1667768545579!5m2!1spt-BR!2sbr" width="450" height="245" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="container-incident">
                    <div class="forms">

                        <!-- Incident Table -->
                        <div class="form">
                            <h3 class="h3"> Incidentes válidos </h3>
                            <br>
                            <ul class="ul">
                                <li><small> Vandalismo <span class="ocult-line">---------------.-.-</span> Acidente rodoviário </small></li>
                                <li><small> Furto <span class="ocult-line">----------------------------</span> Falta de infraestrutura </small></li>
                                <li><small> Evento climático <span class="ocult-line">-----------</span> Queda de energia </small></li>
                                <li><small> Incêndio <span class="ocult-line">-----------------------</span> Outro </small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Inner Side Header -->
    <div class="side-header-inner">
        <ul>
            <li><i class="uil uil-user"><form method="post" action="../methods/logout.php"><button>deslogar</button></form></i></li>
            <li><i class="uil uil-megaphone"></i><a href="./../pages/user.php"> Denúncias </a></li>
            <li><i class="fa-regular fa-envelope"></i><a href="mailto:ilumetcc@gmail.com"> Suporte </a></li>
        </ul>
        
        <ul>
            <li><i class="fa-brands fa-instagram"></i><a href="#"> Instagram </a></li>
            <li><i class="fa-brands fa-twitter"></i><a href="#"> Twitter </a></li>
            <li><i class="uil uil-facebook-f"></i><a href="#"> Facebook </a></li>
            <li><i class="uil uil-facebook-messenger-alt"></i><a href="#"> Messenger </a></li>
            <li><i class="fa-brands fa-whatsapp"></i><a href="#"> Whatsapp </a></li>
            <li><i class="uil uil-telegram-alt"></i><a href="#"> Telegram </a></li>
        </ul>

        <ul>
            <li><i class="uil uil-github-alt"></i><a href="https://github.com/ilume-TCC/ProjectTCC"> GitHub </a></li>
        </ul>
    </div>
</header>

<!-- JS -->
<script type="text/javascript" src="./../js/report.js"></script>
    
</body>
</html>