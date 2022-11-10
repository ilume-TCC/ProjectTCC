<?php

    session_start();

    echo "bem-vindo, administrador!" . $_SESSION['id_usuario'];

?>

        <a href="../methods/logout.php">
            <button class="logout">Sair</button>
        </a>
