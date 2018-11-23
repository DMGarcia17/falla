<?php
$archivo = $_GET['opt'];

function get_extension($str) 
{
        return end(explode(".", $str));
}

switch($archivo){
    case 1:
        if(is_uploaded_file($_FILES['slider']['tmp_name'])){
            if($_FILES['slider']['type'] == 'image/jpeg'){
                $f = getdate();
                $file = implode('-', $f);
                $fn = $file.'.'.get_extension($_FILES['slider']['name']);
                if(move_uploaded_file ( $_FILES['slider']['tmp_name'] , '../assets/img/slider/'.$fn)){
                    header('location: ../home.php?err=0');
                }else{
                    header('location: ../home.php?err=2&path='.$fn);
                }
            }else{
                header('location: ../home.php?err=1');
            }
        }
        break;
}
