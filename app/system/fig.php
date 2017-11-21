<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/


trait figframework  {



    /*
    *   @Mixed
    *   @param
    *   Sistem Marka
    */
    public static function fig(){

        return "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Fig Freamwork</title></head><link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet'><body style='background-color:#e74c3c;font-family: 'Bad Script', cursive;'><h1 style='font-size:45px; text-align:center; color:white; font-weight:100; padding-top:16%; '>Fig and Fix Freamwork <br> Demo Project <br>Enes Demircan & Cengiz Akcan</h1></body></html>";
    }



    /*
*   @Mixed
*   @param
*   Sistem Marka
*/
    public static function errorpage(){

        echo "<center style='margin-top: 12%;' ><span style='padding: 50px; font-size:100px;color: #498E9E;text-shadow:0 1px 0 #ccc ,0 2px 0 #c9c9c9 ,0 3px 0 #bbb ,0 4px 0 #b9b9b9 ,0 5px 0 #aaa ,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);'>FİG FRAMEWORK</span><br><span>Muhammet Enes Demircan | Fig Framework &copy; 2015</span></center>";

    }


}
