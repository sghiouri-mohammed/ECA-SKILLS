<?php 
    try 
    {
        $ca=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $ca->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }

?>

<?php 
    try 
    {
        $c=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $sq=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $sq->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>

<?php 
    try 
    {
        $conn=new PDO("mysql:host=localhost;dbname=phpmyadmin",'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $error) 
    {
        echo "connection failed : ".$error->getMessage() ."<br/>";
    }
?>



