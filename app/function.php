
<?php

include_once "./config.php";

function validate($msg ,$type ='danger'){
 return "<div class=\"alert alert-{$type} alert-dismissible fade show\" role=\"alert\">
 <strong>{$msg}</strong>
 <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>";
}



function connect(){
   return new mysqli(HOST,USER,PASS,DB);
}


function old($key){

  return $_POST[$key] ?? '';

}
function clear(){
  echo $_POST='';
}

function emailchk($email){

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
return true;
}else{
  false;
}




}
function photoupload($file_data , $path ='/'){

  $file_name = $file_data['name'];
  $file_tmp_name = $file_data['tmp_name'];
  move_uploaded_file ($file_tmp_name , $path . $file_name);
  return $file_name;

}
