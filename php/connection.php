?php 

   define('HOST', '000webhost'); 

   define('DB', 'id19648590_serena'); 

    define('USER', 'id19648590_serena_store'); 

   define("PASS", 'spZxF^%)Rs6kp]rr'); 

  

    try{ 

        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); 

    { $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    } catch (Exception $e){ 

        echo '<h1> Erro ao conectar com o banco !!' . DB.'</h1>'; 

    } 

     

?>  
