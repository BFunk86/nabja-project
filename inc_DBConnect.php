<?php
    /**
     * The inc_OnlineStoreDBYoung.php is used to establish a connection to the MySQL server
     * in order to get information regarding the websites.
     */
    // Array to hold error messages
    $ErrorMsgs = array();
    $DBConnect = @new mysqli("localhost", "root", "", "online_stores");
    // add error message to error message array if connection to online_Store fails
    if($DBConnect->connect_errno) {
        $ErrorMsgs[] = "The database server is not available. Error code " . $DBConnect->connect_errno . ": " . $DBConnect->connect_error;
    } // end if


?>