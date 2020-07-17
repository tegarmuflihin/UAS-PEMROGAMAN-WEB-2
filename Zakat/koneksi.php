<?php 
    $koneksi = mysqli_connect("localhost","id14350182_zakat_db","ayityi75","id14350182_zakat");
    
    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
 
?>