<!DOCTYPE html>
<html>
    <body>
        <?php echo "Hello World!"; ?>
        <p>
            I am Jackson McHale. 
            I am a senior in software engineering and this website was 
            <b>Created for my SWE 4633 class.</b> 
        </p>
        <a href="page2.php">Page 2</a>
        <p> 
            Here's some data from the sql database:
            <?php
            /*
                // SQL Server Extension Sample Code:
                $connectionInfo = array("UID" => "jmchale", "pwd" => "3Ju9w43jxmPxjaV", "Database" => "grades", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                $serverName = "tcp:jmchale-swe4633-sql.database.windows.net,1433";
                $conn = sqlsrv_connect($serverName, $connectionInfo);

                echo sqlsrv_query($conn, "SELECT * FROM grades;");
            */
    
            $serverName = "tcp:jmchale-swe4633-sql.database.windows.net,1433";
            $userName = 'jmchale@jmchale-swe4633-sql';
            $userPassword = '3Ju9w43jxmPxjaV';
            $dbName = "grades";
         
            $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);
         
            sqlsrv_configure('WarningsReturnAsErrors', 0);
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
            if($conn === false)
            {
              FatalError("Failed to connect...");
            }



            ?>
        </p>
    </body>
</html>