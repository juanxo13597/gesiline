<?php
function navegacion($get){
    if(is_null($get)){
        return "controllers/inicioController.php";
    }else{
        if(file_exists("controllers/".$get."Controller.php")){
            return "controllers/".$get."Controller.php";
        }else{
            return "controllers/404Controller.php";
        }
        
    }

}

?>