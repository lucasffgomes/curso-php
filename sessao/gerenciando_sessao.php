<div class="titulo">Gerenciando Sessão</div>

<?php
    // session_id('oechhgu1v12aq8ob1ba2fe13ub');  // consegue setar um ID para sessão atual.
    session_start();
    echo session_id();  // gera um ID para sessão atual.

    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo '<br>' . $_SESSION['contador'];

    if($_SESSION['contador'] % 5 === 0) {
        session_regenerate_id();  // regenera a sessão com um novo ID.
    }

    if($_SESSION['contador'] >= 15) {
        session_destroy();  // destrói a sessão atual.
    }
    