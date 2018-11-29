<?php
require_once('../../core/proc.php');
$db = new procedimientos();
$archivo = $_GET['opt'];
function get_extension($str) 
{
        return end(explode(".", $str));
}

switch($archivo){
    case 1:
         if(is_uploaded_file($_FILES['coverp']['tmp_name'])){
            if($_FILES['coverp']['type'] == 'image/jpeg'){
                $res = $db->query("select img_proy from proyectos where id_proyecto={$_POST['id_proy']}");
                if(move_uploaded_file ( $_FILES['coverp']['tmp_name'], '../../'.$res[0]['img_proy'])){
                    header('location: ../home.php?err=0&p=Z2FsZXJpYS5waHA=');
                }else{
                    header('location: ../home.php?err=2&p=Z2FsZXJpYS5waHA=');
                }
            }else{
                header('location: ../home.php?err=1&p=Z2FsZXJpYS5waHA=');
            }
        }
        var_dump($res);
        break;
    case 2:
        if()
        break;
}
