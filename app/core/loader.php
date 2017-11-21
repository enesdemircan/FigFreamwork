<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/



        /*
        *	@Mixed
        *	@Param
        *	Sistem Ayarları
        **/
        require_once("app/core/config.php");




        /*
        *	@Mixed
        *	@Param
        *	Form Sistemi
        **/
        require_once("app/system/fig.php");


        /*
        *	@Mixed
        *	@Param
        *	Php Sistemi
        **/
        require_once("app/system/php.php");


        /*
        *	@Mixed
        *	@Param
        *	Pdo Mysql Sistemi
        **/
        require_once("app/system/mysql.php");


        /*
        *	@Mixed
        *	@Param
        *	Sistem Güvenlik
        **/
        require_once("app/core/secure.php");



        /*
        *	@Mixed
        *	@Param
        *	Sistem Omurgası
        **/
        require_once("app/core/app.php");


        /*
        *	@Mixed
        *	@Param
        *	Sistem Controlleri
        **/
        require_once("app/core/controller.php");
