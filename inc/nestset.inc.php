<?php

if ( isset($_POST["nestParent"]) && isset($_POST['nestTitle']) && isset($_POST['nestDesc']) ) {
    $nestId = "8"; 
    $nestParent = $_POST['nestParent']; 
    $nestTitle = $_POST['nestTitle']; 
    $nestDesc = $_POST['nestDesc'];

    // Instantiate LoginContr class
    include "../classes/dbc.classes.php";
    include "../classes/nest.classes.php";
    include "../classes/nest-contr.classes.php";
    $nest = new NestContr($nestId, $nestParent, $nestTitle, $nestDesc);
    
    // Running error handlers and user login
    $nest->addNest();

    // Going to admin page
    header("location: ../admin.php?error=none");
}