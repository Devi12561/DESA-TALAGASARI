<?php
    
    $data = mysqli_connect("localhost","root","","desa talagasari");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>