<?php
	echo "<h1>Hello</h1>
	<p>Bienvenue sur ce premier essai</p>
	<p>Ligne 1</p>
	<p>Ligne 2</p>
	<p>MaJ local vers Azure</p>"; 


    echo $serverName = "idlsqlsrv.database.windows.net"; // update me
  $connectionOptions = array(
        "Database" => "idlsqlbdd000", // update me
        "Uid" => "dbarret", // update me
        "PWD" => "mxdudKg17;" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * from Ref_Client ";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
	
	
?>