<?php
require_once('../../core/proc.php');
$db = new procedimientos();
$archivo = $_GET['opt'];
function get_extension($str) 
{
        return end(explode(".", $str));
}
ini_set('post_max_size','1000M');
ini_set('upload_max_filesize','1000M');
function rmdir_recursive($dir) {
    $files = scandir($dir);
    array_shift($files);    // remove '.' from array
    array_shift($files);    // remove '..' from array
    foreach ($files as $file) {
        $file = $dir . '/' . $file;
        if (is_dir($file)) {
            rmdir_recursive($file);
            rmdir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dir);
}
function genf(){
    $num = rand(100000000, 999999999);
    if (file_exists('../../assets/img/'.$num)){
        genf();
    }else{
        return $num;
    }
}
switch($archivo){
    case 0:
        $folder = 'assets/img/'.genf().'/';
        if(mkdir('../../'.$folder)){
            if(mkdir('../../'.$folder.'img')){
                if($_FILES['port']['type'] == 'image/jpeg'){
                    if(move_uploaded_file($_FILES['port']['tmp_name'], '../../'.$folder.'portada.jpg')){
                        if($db->insert('insert into proyectos values (null, \''.$_POST['nproy'].'\', \''.$folder.'portada.jpg\', \''.$_POST['cate'].'\', \''.$folder.'\')')){
                            $cont = 0;
                            $id = $db->query("select id_proyecto from proyectos where n_proy='{$_POST['nproy']}'");
                            foreach($_FILES["rangen"]['tmp_name'] as $key => $tmp_name){
                                if($_FILES["rangen"]["name"][$key]) {
                                    $filename = "image$cont.".get_extension($_FILES["rangen"]["name"][$key]);
                                    $source = $_FILES["rangen"]["tmp_name"][$key];
                                    $directorio = $folder.'img';
                                    $dir=opendir('../../'.$directorio); 
                                    $target_path = $directorio.'/'.$filename; 
                                    if(move_uploaded_file($source, '../../'.$target_path)) {	
                                        $db->insert('insert into img_proy values (null, \''.$target_path.'\', '.$id[0]['id_proyecto'].')');
                                        } else {
                                        echo "Ha ocurrido un error, por favor int&eacute;ntelo de nuevo.<br>";
                                    }
                                    closedir($dir);
                                }
                                $cont++;
                            }
                            header('location: ../home.php?err=0&p=Z2FsZXJpYS5waHA=');
                        }
                    }
                }
            }
        }
        break;
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
        if($db->delete('img_proy', 'proyectos='.$_POST['id_proyG'])){
            $folder = $db->query('select folder from proyectos where id_proyecto='.$_POST['id_proyG']);
            rmdir_recursive('../../'.$folder[0]['folder'].'img/');
             $cont = 0;
            foreach($_FILES["range"]['tmp_name'] as $key => $tmp_name){
                if($_FILES["range"]["name"][$key]) {
                    $filename = "image$cont.".get_extension($_FILES["range"]["name"][$key]);
                    $source = $_FILES["range"]["tmp_name"][$key];
                    $directorio = $folder[0]['folder'].'img/';
                    if(!file_exists('../../'.$directorio)){
                        echo mkdir('../../'.$directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
                    }
                    $target_path = $directorio.'/'.$filename; 
                    if(move_uploaded_file($source, '../../'.$target_path)) {	
                        $db->insert('insert into img_proy values (null, \''.$target_path.'\', '.$_POST['id_proyG'].')');
                        } else {
                        echo "Ha ocurrido un error, por favor int&eacute;ntelo de nuevo.<br>";
                    }
                    closedir($dir);
                }
                $cont++;
            }
            header('location: ../home.php?err=0&p=Z2FsZXJpYS5waHA=');
        }else{ header('location: ../home.php?err=1&p=Z2FsZXJpYS5waHA='); }
        break;
    case 4:
        if(isset($_POST['id_title'])){
            if($db->insert("update proyectos set n_proy='{$_POST['nproy']}' where id_proyecto={$_POST['id_title']}")){
                header('location: ../home.php?err=0&p=Z2FsZXJpYS5waHA=');
            }else{
                header('location: ../home.php?err=1&p=Z2FsZXJpYS5waHA='); 
            }
        }
        break;
    case 5:
         if(isset($_POST['id_del']) || $_POST['id_del'] != ''){
             rmdir_recursive('../../'.$_POST['folder']);
             if($db->delete('proyectos', 'id_proyecto='.$_POST['id_del'])){
                  header('location: ../home.php?err=0&p=Z2FsZXJpYS5waHA=');
             }else{
                  header('location: ../home.php?err=1&p=Z2FsZXJpYS5waHA=');
             }
         }
        break;
}
