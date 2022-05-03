<?php

include("database.php");
$query = "SELECT * FROM task";
$result = mysqli_query($connection,$query);

    if(!$result){
        die('Query Failed') . mysqli_error($connection);
    }

    $json = array();
        while ($row = mysqli_fetch_array($result)){
            $json[]=array(
                'name' => $row['name'],
                'description' => $row['description'],
                'id' => $row['id']
            );
        }
        $json_string = json_encode($json);
        echo $json_string;
?>