<?php

class CRoom {  

    // -------------------------------------------------------------------------------------------
    //
    // Member variables
    //
    // http://php.net/manual/en/language.oop5.constants.php
    //
    protected $iMysqli;
    public $iId;
    public $iTitle;
    public $iDescription;
    public $iGraphics;
    public $iConnections;
    public $iActions;
    

    // -------------------------------------------------------------------------------------------
    //
    // Constructor
    // http://www.php.net/manual/en/language.oop5.decon.php
    //
    function __construct() {
        ;
    }


    // -------------------------------------------------------------------------------------------
    //
    // Destructor
    // http://www.php.net/manual/en/language.oop5.decon.php
    //
    function __destruct() {
        ;
    }


    // -------------------------------------------------------------------------------------------
    //
    // Connect to the database.
    //
    //
    protected function ConnectToDatabase() {

        require_once('sql/connect.php');
        $this->iMysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        !mysqli_connect_error() or die("Connect failed: ".mysqli_connect_error()."<br>");
    }


    // -------------------------------------------------------------------------------------------
    //
    // Read info from database, store in member variables.
    //
    //
    public function ReadFromDatabase($aIdRoom) {

        // Connect
        $this->ConnectToDatabase();

        // Sanitize
        $idRoom = $this->iMysqli->real_escape_string($aIdRoom);

        // Prepare query
        $query = <<<EOD
SELECT * FROM myRum WHERE id = '{$idRoom}';

SELECT * FROM rumkoppling WHERE id_Rum1 = '{$idRoom}';

SELECT id_Rum, namn, event 
FROM Action AS A, RumAction AS RA 
WHERE 
    RA.id_Action = A.id AND
    id_Rum = '{$idRoom}';

EOD;

        // Perform query
        $res = $this->iMysqli->multi_query($query) 
            or die("Could not query database, query =<br/><pre>{$query}</pre><br/>{$this->iMysqli->error}");

        // Store all resultsets and check if database error
        $results = Array();
        $i = 0;
        do {
            $results[$i++] = $this->iMysqli->store_result();
        } while($this->iMysqli->next_result());
        
        // Check if there is a database error
        !$this->iMysqli->errno or die("<p>Query =<br/><pre>{$query}</pre><br/>Error code: {$this->iMysqli->errno} ({$this->iMysqli->error})</p>");
        
        // Use resultset 0
        $row = $results[0]->fetch_object();

        $this->iId                     = $row->id;
        $this->iTitle             = $row->namn;
        $this->iDescription = $row->beskrivning;
        $this->iGraphics         = $row->grafik;

        // Use resultset 1
        $this->iConnections = "";
        while($row = $results[1]->fetch_object()) {    
            $this->iConnections .= "<a href='{$_SERVER['PHP_SELF']}?id={$row->id_Rum2}'>{$row->namn}</a> ";
        }

        // Use resultset 2
        $this->iActions = "";
        while(is_object($results[2]) && $row = $results[2]->fetch_object()) {    
            $this->iActions .= "<a href='{$_SERVER['PHP_SELF']}?id={$row->id_Rum}&amp;event={$row->event}'>{$row->namn}</a> ";
        }

        // Close
        $results[0]->close(); 
        $results[1]->close(); 
        $results[2]->close(); 
        $this->iMysqli->close(); 
    }


} // End of class

?>
