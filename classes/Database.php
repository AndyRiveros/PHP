<?php 
/**
 * Database
 * 
 * A connection to the database
 */
class Database
{
    /**
     * Get the database connection
     * 
     * @return PDO object Connection to te database server
     */
    public function getConn()
    {
        $db_host="localost";
        $db_name = "cms";
        $db_user = "cms_www";
        $db_pass = "bsDnwQ_@ZMu]fHx@";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        try { 
            $db = new PDO($dsn, $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        }catch(PDOException $e) {
            echo $e->getMessage();
            exit;
        }    
    }
}