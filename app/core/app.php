<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/


class fig  {

    use config;

    /*
    *   Ana Gövde
    *   Controller Yapısı
    */
    public function __construct(){


        $url = $this->parseUrl();



        if(file_exists("app/controllers/". $url[0]. ".php")){


            $this->config["app"]["controller"] = $url[0];
            unset($url[0]);
        }


        /*
        *   Eğer Değer Dogru İse Dahil Edelim.
        **/
        if(file_exists("app/controllers/". $this->config["app"]["controller"] . ".php")){

            /*
            *	Eğer Controller Var İse Dahil edelim
            **/
            require_once("app/controllers/". $this->config["app"]["controller"] . ".php");

            $this->config["app"]["controller"] = new $this->config["app"]["controller"];

            if(isset($url[1])){

                if(method_exists($this->config["app"]["controller"], $url[1])){

                    $this->config["app"]["method"] = $url[1];
                    unset($url[1]);

                }else{

                    /*
                    *	@Mixed
                    *	@Param Eğer Kullanıcı Yanlış Url girmiş İse Bu Alanda Ayarlanacak
                    */

                    // header("location: /".$this->config["errorpage"]);

                }

            }

                $this->config["app"]["params"] = $url ? array_values($url) : [];


            /*
            *   @Mixed
            *   Function filitreleme
            */

                    if(!array_search($this->parseUrl()[0],$this->config["backlist"])){


                        /*
                        *   @Mixed
                        *   Gelen İlk Parametreyi Function olarak Çalıştırır
                        */

                        if(method_exists($this->config["app"]["controller"], $this->config["app"]["method"])){

                            call_user_func_array([$this->config["app"]["controller"], $this->config["app"]["method"]], $this->config["app"]["params"]);

                        }else{ call_user_func_array([$this->config["app"]["controller"], $this->config["errorpage"]], $this->config["app"]["params"]);  }

                    }else{

                        /*
                        *   @Mixed
                        *   Gelen İlk Parametre Yasaklı ise errorpage Çagıralım
                        */
                        call_user_func_array([$this->config["app"]["controller"], $this->config["errorpage"]], $this->config["app"]["params"]);

                    }




			}else{


            /*
            *	Eğer Controller Var İse Dahil edelim
            **/

            echo "( ".$this->config["app"]["controller"]. " ) Adında Controller Bulunamadı.";


        }

    }


    /*
    *   @Mixed
    *   @params Url Kontrol Ve Parçalama İşlemleri
    **/
    public function parseUrl(){



               if($_GET){

                   $Kontrol =  explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));

                   if(array_key_exists(current($Kontrol),$this->config["prefix_url"])){

                       $url =  explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));
                       unset($url[0]);

                       return array_merge($this->config["prefix_url"][current($Kontrol)],$url);

                   }else{

                       return $url = explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));

                   }
               }

    }

}
