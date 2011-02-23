<?php 
/* 
 * Database Singleton - USE this class for all database access
 * 
 *	DB::exec("DELETE FROM Blah");
 *	
 *	foreach( DB::query("SELECT * FROM Blah") as $row){
 *	        print_r($row);
 *	}
 * 	
 * Or...
 *  $db = DB::prepare("SELECT 1 FROM `bookmark` WHERE `userid` = ? AND (`url` = ? OR `name` = ?)");
 *  $db->execute(array($data['userid'], $data['url'], $data['name']));
 *  //if no rows returned, then return false
 *  if(!$db->fetchAll()) {
 *       return false;
 *  }
 *
 * Taken from: http://www.php.net/manual/en/book.pdo.php#93178
 * 
 * @author Nathan Tsoi
 */

class DB
{   
    private static $objInstance;
   
    /*
     * Class Constructor - Create a new database connection if one doesn't exist
     * Set to private so no-one can create a new instance via ' = new DB();'
     */
    private function __construct() {}
   
    /*
     * Like the constructor, we make __clone private so nobody can clone the instance
     */
    private function __clone() {}
   
    /*
     * Returns DB instance or create initial connection
     * @param
     * @return $objInstance;
     */
    public static function getInstance(  ) {
        global $config;   
        if(!self::$objInstance){
            self::$objInstance = new PDO($config['DB-DSN'], $config['DB-USER'], $config['DB-PASS']);
            self::$objInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
       
        return self::$objInstance;
   
    } # end method
   
    /*
     * Passes on any static calls to this class onto the singleton PDO instance
     * @param $chrMethod, $arrArguments
     * @return $mix
     */
    final public static function __callStatic( $chrMethod, $arrArguments ) {
           
        $objInstance = self::getInstance();
       
        return call_user_func_array(array($objInstance, $chrMethod), $arrArguments);
       
    } # end method
}

?>