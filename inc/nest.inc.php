<?php

    include "../classes/dbc.classes.php";
    include "../classes/nest.classes.php";
    include "../classes/nestget-contr.classes.php";
    $nest = new NestgetContr();

    // Running error handlers and user login
    $nest->returnNest(); 
    http_response_code(200);