<?php
    //Con _FILES podemos ver la informacion de los archivos que subimos
    // var_dump($_FILES);

    $nombre = date('d_m_y');
    // var_dump($nombre); 
    $extension = explode(".",$_FILES["archivo"]["name"])[1];

    if(!file_exists("uploads/")){
        mkdir("uploads/",0777,true);
    }
    $destino = "uploads/".$nombre.".".$extension;

    //Mover el archivo temporal al servidor
    if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)){
        echo "Archivo movido con exito";
    }else{
        echo "Ha ocurrido un error";
    }
?>