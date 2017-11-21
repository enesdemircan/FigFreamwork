<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/

trait mysql  {

	/*
    *   @Mixed
    *   @Param
    *   @ Pdo Veritabanı
    **/
    public  function PDO(){

		try{ $DB = new PDO("mysql:host=".$this->config["mysql"]["host"].";dbname=".$this->config["mysql"]["data"].";charset=utf8",$this->config["mysql"]["user"],$this->config["mysql"]["password"]); }
        catch(PDOException $Error ){ $DB = $Error->getMessage(); }
		return $DB;

    }


}
