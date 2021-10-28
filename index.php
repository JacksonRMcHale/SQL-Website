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
                // SQL Server Extension Sample Code:
                # $connectionInfo = array("UID" => "jmchale", "pwd" => "3Ju9w43jxmPxjaV", "Database" => "grades", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                # $serverName = "tcp:jmchale-swe4633-sql.database.windows.net,1433";
                # echo "\n1\n";
                # echo sqlsrv_connect($serverName, $connectionInfo);
                function OpenConnection()
                {
                    $serverName = "tcp:jmchale-swe4633-sql.database.windows.net,1433";
                    $connectionOptions = array("Database"=>"grades",
                        "Uid"=>"jmchale", "PWD"=>"3Ju9w43jxmPxjaV");
                    $conn = sqlsrv_connect($serverName, $connectionOptions);
                    if($conn == false)
                        die(FormatErrors(sqlsrv_errors()));
            
                    return $conn;
                }
                OpenConnection();
                echo "2\n";
                sqlsrv_query($conn, "SELECT * FROM grades;");
                echo "3\n";



            ?>
        </p>
    </body>
</html>