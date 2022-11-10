<html>

<head>

    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title> Inicial </title>

    <!-- CSS -->
    <link rel="stylesheet" href="./../css/report.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Java Script -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"></script>

</head>

<body>

    <!-- Scroll back -->
<!-- 
<div class="scrollTop">
    <a href="home.php"><i class="back fa-solid fa-triangle-exclamation"></i></a>
</div> -->

<!-- Cabeçalho lateral -->
<header>
        
<!-- Ocupação do icon menu -->
<aside>

    <div class="menu-btn">
        <span><i class="fa-solid fa-bars"></i></span>
    </div>

<!-- icon's laterais -->
<ul class="social">
        <li><i class="supp fa-solid fa-person"></i></li>
        <li><i class="sup fa-solid fa-globe"></i></li>
        <li class="suppp"><button type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i></button></li>
    </ul>
</aside>

<!-- Corpo do site -->
<main>
    <nav>
        <div class="container5">

            <!-- Logo iLume -->
            <div>
                <a href="#" class="iLume"  id="menu-btn">
                    <span style="text-shadow: 5px 5px 30px #F36008; color:#F36008">i</span>Lume
                </a>
            </div>

            <!-- Páginas de seleção -->
            <ul class="vai">
                <li><a href="./../index.php"><i class="fa-solid fa-house"></i><span class="span">-</span>Início</a></li>
                <li><a href="articles.php"><i class="fa-solid fa-newspaper"></i><span class="span">-</span>Artigos</a></li>
                <li><a href="#"><i class="cab fa-solid fa-bullhorn"></i><span class="span">-</span>Denuncie</a></li>
                <li><a href="team.php"><i class="fa-solid fa-people-group"></i><span class="span">-</span>Equipe</a></li>
            </ul>

            <!-- Icon menu -->
            <div class="menu-btn">
                <span><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
    </nav>

<!-- Corpo secundário do site -->
<div class="header-body">
    <div class="container5">

        <!-- Nome do projeto -->
        <div>          
            
                
        
                    <div class="container">
                        <div class="forms">
                            
                
                            <!-- Registration Form -->
                            <div class="form signup">
                                <span class="title">Formulário</span>
                
                                <form action="../methods/denuncia.php">
                                    <div class="input-field">
                                        <input type="text" onkeypress="return ApenasLetras(event,this);" placeholder="Bairro" required maxlength="100"  autofocus name="">
                                        <i class="uil uil-map"></i>
                                        
                                    </div>
                                    <div class="input-field">
                                        <input type="text" onkeypress="return ApenasLetras(event,this);"  placeholder="Endereço"  required maxlength="100" name="">
                                        <i class="uil uil-location-arrow"></i>
                                    </div>
                                    <div class="input-field">
                                        <input type="text"  placeholder="CEP" name="cep" id="cep" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required maxlength="9" name="">
                                        <i class="uil uil-location-pin-alt"></i>
                                        
                                    </div>
                                    <div class="input-field">
                                        <input type="text"  placeholder="Número" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required minLenght="3" maxlength="4" name="">
                                        <i class="uil uil-estate"></i>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" onkeypress="return ApenasLetras(event,this);"  placeholder="Causa do incidente" required minLenght="5" maxlength="26" name="">
                                        <i class="uil uil-exclamation-triangle"></i>
                                    </div>
                
                                    <div class="checkbox-text">
                                        <div class="checkbox-content">
                                            <input type="checkbox" id="termCon">
                                            <label for="termCon" class="text">Aceito todos os termos e condições</label>
                                        </div>
                                    </div>
                
                                    <div class="input-field button">
                                        <input type="submit" value="Denunciar">
                                    </div>
                                </form>
                
                                
                            </div>
                        </div>
                
                
                
                
                
                        
                    </div>


                    <div class="container3">
                        <div class="forms">
                            
                
                            <!-- Registration Form -->
                            <div class="form signup">
                                
                                <span class="title">Lista de incidentes</span>
                                

                                <ul class="ul">
                                    <br>
                                    <li>Vandalismo<span class="span">---------------.-.-</span>Acidente rodoviário</li>
                                    <li>Furto<span class="span">----------------------------</span>Falta de infraestrutura</li>
                                    <li>Evento climático<span class="span">-----------</span>Queda de energia</li>
                                </ul>
                                
                                
                                
                
                                
                            </div>
                        </div>
                
                
                
                
                
                        
                    </div>
                
                
                
                    
                
                       
                    <div class="container2">
                        <div class="forms">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14662.309365716808!2d-51.14808575!3d-23.258462599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1667768545579!5m2!1spt-BR!2sbr" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        
                
                
                        
                
                        
                    </div>
        
        
                <p> Um projeto dedicado a segurança pública em relação a iluminação urbana noturna. Por um mundo mais iluminado! </p> 
                </div>
</div>



</main>

<!-- Segundo corpo do site -->
    <div class="menu">
        <ul>
            <li><i class="uil uil-user"></i><a href="./../pages/account.php">Conta</a></li>
            <li><i class="fa-regular fa-envelope"></i><a href="mailto:ilumetcc@gmail.com">Feedback</a></li>
        </ul>
        
        <ul>
            <li><i class="fa-brands fa-instagram"></i><a href="#">Instagram</a></li>
            <li><i class="fa-brands fa-twitter"></i><a href="#">Twitter</a></li>
            <li><i class="uil uil-facebook-f"></i><a href="#">Facebook</a></li>
            <li><i class="uil uil-facebook-messenger-alt"></i><a href="#">Messenger</a></li>
            <li><i class="fa-brands fa-whatsapp"></i><a href="#">Whatsapp</a></li>
            <li><i class="uil uil-telegram-alt"></i><a href="#">Telegram</a></li>
        </ul>
        <ul>
            <li><i class="uil uil-github-alt"></i><a href="https://github.com/ilume-TCC?tab=repositories">GitHub</a></li>
        </ul>
    
    </div>

</header>
    
</body>
</html>

<!-- JS do team -->
<script type="text/javascript" src="./../js/report.js"></script>