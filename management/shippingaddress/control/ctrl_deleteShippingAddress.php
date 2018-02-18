<?php

    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );
    
    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelShippingAddress.php';
    $model = new modelShippingAddress($con->db);
 
    $id = $_POST["id"];
  
    $statusDelete = $model->deleteShippingAddress($id);

    echo 0;
    
?>