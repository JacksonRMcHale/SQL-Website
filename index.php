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
                echo sqlsrv_query($conn, "SELECT * FROM grades;");
            ?>
        </p>
    </body>
</html>