<?php

function procesar_password($password)
{
	$error_clave = "";
	if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres<br/>";
   }
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres<br/>";
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula<br/>";
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula<br/>";
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico<br/>";
   }
   if ($error_clave == ""){
   	  return true;
   }
   return $error_clave;
}