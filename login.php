<?php
    $user = $_POST["user"];
    $password = $_POST["password"];

    // datos DB
    $userName = "Pepe Loco";
    $passwordUser = "pepe23";

    // validacion:
    if( $user == $userName && $password == $passwordUser ){
        header( "location: http://www.youtube.com/watch?v=Qu1rmezoQZk&list=RDQu1rmezoQZk&start_radio=1");
    } else {
        header( "location: http://www.google.com/error404");
    }

?>