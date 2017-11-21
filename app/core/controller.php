<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/



class controller {



	use secure, config, mysql, figframework, php;


    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public function model($model){

        require_once("app/models/".$model.".php");

    }


    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public function plugin($model){

        require_once("app/plugins/".$model.".php");

    }


    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function view($view, $data = [] ){


        if(is_file("app/views/". $view .".php")){require_once("app/views/". $view .".php");}else{$this->location("/".$this->config["errorpage"]);

        }

    }

    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function loader($view, $data = [] ){


        if(is_file("app/views/". $view .".php")){ include("app/views/". $view .".php"); }else{ $this->location("/".$this->config["errorpage"]); }

    }



    /*
    *   @Mixed
    *   @param
    *   Tasarımsal verileri çağırır
    */
    public  function assets($view, $data = [] ){

        return "/app/assets/".@$view;

    }



    /*
    *   @Mixed
    *   @param
    *   Sistem Tema Yollarını klasor yolu olarak İçerir
    */
    public  function assetsurl($par = ""){


        return $this->config["https_url"].$this->config["assets"].$par;


    }


    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function page($view, $data = [] ){

        require_once("app/views/". $view .".php");

    }



    /*
    *   @Mixed
    *   @param
    *   Sistem Tema Yollarını Url ile İçerir
    */
    public  function templateurl($par = ""){


        return $this->config["http_url"].$this->config["assets"].($par !== "" ?  $ext = $par."/" :  $ext = "");


    }



    /*
    *   @Mixed
    *   @param
    *   Sistem Tema Yollarını klasor yolu olarak İçerir
    */
    public  function templatepath($par = ""){


        return $this->config["assets"].($par !== "" ?  $ext = $par."/" :  $ext = "");


    }


	/*
    *   @Mixed
    *   @param
    *   Sistem echo yazdırma
    */
    public  function write($par = ""){
        echo $par;
    }






}
