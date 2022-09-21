<?php
class dbHandler
{
    const DSN = "mysql:host=localhost;dbname=verkiezingenprj3";
    const USER = "root";
    const PASSWD = "";
 

    public function selectStandpunt()
    {
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
            $statement = $pdo->prepare("SELECT standpunt_id,standpunt FROM standpunt;");
        
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception){
            var_dump($exception);
        }
    }
    function selectPartijen(){
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT * FROM partij;");

            $statement->execute();

            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
        catch(PDOException $e) {
            return false;
        }
    }
    public function getPartijenMening($standpuntId, $mening){
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
            $statement = $pdo->prepare("SELECT partij_id FROM partij_standpunt WHERE mening = :mening AND standpunt_id = :standpuntId;");
            $statement->bindParam('mening', $mening);
            $statement->bindParam('standpuntId', $standpuntId);

            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);

        }
        catch(PDOException $exception){
            var_dump($exception);
        }

    }

    function selectThema(){
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);

            $statement = $pdo->prepare("SELECT thema.thema, standpunt.standpunt FROM standpunt INNER JOIN thema ON standpunt.thema_id = thema.thema_id");

            $statement->execute();

            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
        catch(PDOException $e) {
            return false;
        }
    }


   
    public function getPartijNaam($partijId){
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
            $statement = $pdo->prepare("SELECT naam FROM partij WHERE partij_id = :partijId;");
            $statement->bindParam('partijId', $partijId);
        

            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);

        }
        catch(PDOException $exception){
            var_dump($exception);
        }  
    }
    public function getAllPartijen(){
        try{
            $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
            $statement = $pdo->prepare("SELECT * FROM partij");
          
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);

        }
        catch(PDOException $exception){
            var_dump($exception);
        }  

    }
}
?>