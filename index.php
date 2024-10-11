<?php
require_once  'domain_object/node_role.php';

$obj_role = [];

// $obj_role[]=new Role(1,"Office Boy","Cleaning team","Active");
// $obj_role[]=new Role(2,"Key Guard","Guard team","Active");
// $obj_role[]=new Role(4,"Administrator","Admin team","Inactive");
// $obj_role[]=new Role(7,"Student","student organitation","Active");

// foreach ($obj_role as $role){
//     echo "ID :". $role->role_id."<br>";
//     echo "Nama :". $role->role_name."<br>";
//     echo "Deskripsi Tugas". $role->role_description."<br>";
//     echo "Status :". $role->role_status."<br>";
//     echo "br";
    
// };

include 'view/role_list.php';



    


?>



