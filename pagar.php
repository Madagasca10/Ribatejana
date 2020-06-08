<?php

    session_start();
    
  
    unset ( $_SESSION['destino'] );
    unset ( $_SESSION['voo'] );
    unset ( $_SESSION['primeiroNome']  );
    unset ( $_SESSION['ultimoNome']  );
    
 
    setcookie(session_name(), '', time()-3000, '/');

    session_destroy();
    
    
    http_response_code(303);
    header( "Location: pesquisa.php" );

?>