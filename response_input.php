<?php
// echo "BISA ANJAY";
// echo "<br>";
// echo "modul = ".$_GET['modul']."<br>";
// echo "fitur = ".$_GET['fitur']."<br>";
// echo "request method = ".$_SERVER['REQUEST_METHOD']."<br>";
// print_r($_POST);
// echo "<br>";
// echo "nama role : ".$_POST['nama_peran']."<br>";
// echo "keterangan  role : ".$_POST['role_description']."<br>";
// echo "status role : ".$_POST['role_status']."<br>";


require_once 'domain_object/node_role.php';
$obj_role = [];



$obj_role[] = new Role(
        1, 
        $_POST['nama_peran'], 
        $_POST['desc_peran'], 
        $_POST['status_peran'] 
    
);
// $obj_role[] = new Role(
//     1, 
//     $_POST['role_nama'], 
//     $_POST['role_description'], 
//     $_POST['role_status'] 

// );
    include 'view/role_list.php';
?>