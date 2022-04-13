<?php

if ( isset($_POST["nestId"]) ) {
    $nestId = $_POST["nestId"]; 

    // Instantiate LoginContr class
    include "../classes/dbc.classes.php";
    include "../classes/nest.classes.php";
    include "../classes/nest-contr.classes.php";
    $nest = new NestContr($nestId, 0, "none", "none");
    function dd()
    {
        array_map(function($x) { var_dump($x); }, func_get_args()); die;
    }
    // Running error handlers and user login
    $idArr = $nest->deleteNest();
    
    function delNestsRecursive($nests) {
      if(is_array($nests)) {
        foreach ($nests as $nest) {
          $newnest = new NestContr($nest['nest_id'], 0, "none", "none");
          $locArr = $newnest->deleteNest();
          if (is_array($locArr)) {
            delNestsRecursive($locArr);
          } else {
            echo $nest."<br>";
          }
        }
      }
    }

    delNestsRecursive($idArr);
    // Going to admin page
    header("location: ../admin.php?error=none");
}