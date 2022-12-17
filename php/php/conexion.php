<?php
    function conexion(){
    return mysqli_connect(
        'localhost',
        'root',
        '',
        'arduinodb'
    );
    }

    if(conexion()){
        echo "verdad";
    }
?>