<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
*   Github Tarihi: 21.11.2017 - edit
**/


trait config  {


    public  $config = array
            (


                /*
                 *
                 * APP GENEL AYARLARI
                 * @Mixed
                 *
                 * Bu alanda size Özel Ayarlar Yapılacaktır.
                 *
                 */
                "http"     			                =>   true,
                "https"     		                =>   false,
                "http_url"                      =>  "http://localhost:90/",
                "https_url"                     =>  "http://localhost:90/",
                "assets"    		                =>  "app/assets/",
                "view"    		                  =>  "app/view/",
                "ip"       	 		                =>  "127.0.0.1",
                "email"     		                =>  "",



                /*
                 * PHP MAİL CLASS AYAR
                 *
                 *  Sistem phpmailer ile birlikte çalışmaktadır.
                 *
                 * */

                "mailserver"    =>  array(

                    "server"            =>  "smtp.yandex.com",
                    "port"              =>  "465",
                    "aut"               =>  true,
                    "secure"            =>  "ssl",
                    "username"          =>  "info@enesdemircan.net",
                    "password"          =>  "enes1",
                    "charset"           =>  "UTF-8",
                    "title"             =>  "",
                    "subject"           =>  array(
                                                        "Şifre Sıfırlama Sistemi",
                                                        "Uzman Kayıt İşlemi"
                                                  )

                ),


                /*
                 *   SİSTEM BAKIM MODU VE SİSTEM HATA AYIKLAMA MODU AÇMA / KAPATMA
                 *   @Mixed
                 *
                 *   Güvenlikli Yada Güvenlik Önlemi için kullanacagınız projeye göre http yada https ayarlarını yapınız
                 *   Bakım modu Aktif İken webstatus modu pasif olmalıdır
                 *   Kullanacağınız Projeye Göre ip işlemlerinizi yapabilirsiniz.
                 *
                 *   Developer Tüm Hatalar Görmek İçin status 6 İd Numarası Giriniz
                 *   Developer Tüm Hatalar Gizlemek İçin status 1 İd Numarası Giriniz
                 */
                    "status"    		            =>  "1",
                    "work"     		 	            =>  false,
                    "webstatus" 		            =>  true,


                /*
                 *
                 * SİSTEM HATA YÖNLENDİRME
                 * @Mixed
                 *
                 * errorpage ile bulunamayan sayfalarını hata sayfasına yönlendirme işlemini yapıyoruz
                 *
                 */
                "errorpage" 		                =>  "errorpage",


                /*
                 *   DEVELOPER MODU AYARI
                 *   @Params Mixed
                 *
                 *   Developer Array Yapısının içerisine sistem bakım durumundayken sistemdeki çalışmaların görmesi gereken yazılımcıya
                 *   yada kişilerin ip numarası ve isimleri girlmesi zorunludur.
                 *
                 */
                "developer" =>  array(

                        "Developer1"                =>   "::1"

                ),


                /*
                 *
                 *   APP ANA GÖVDE AYARLARI
                 *   @Param Mixed
                 *   Controller Yapısal Ayar
                 *
                 */
                "app"       =>  array(


                        /*
                        *   Çalışan Controller
                        *   @Param Mixed
                        */
                        "controller"                =>   "site",


                        /*
                        *   Açılış Function'u
                        *   Kullanılan Method
                        */
                        "method"                    =>   "index",


                        /*
                        *   Ana Gövde
                        *   Controller Yapısı
                        */
                        "params"                    =>   []


                    ),


                /*
                 *
                 * SİSTEM KAPATILMIŞ ALANLAR
                 * @Mixed
                 * Backlist Array Yapısının içerisindeki kullanıcıların erişmesinin yasak olacagı function isimleri belirtilmelidir.
                 *
                 */
                "backlist" =>  array(

                        "param"        =>   "param",

                    ),


                /*
                 *
                 * SİSTEM Url proefix Alanı
                 * @Mixed
                 * Sistemde Yörüngeleme sistemidir  test.com/controller/param to test.com/param
                 *
                 */
                "prefix_url" =>  array(
                ),


                /*
                 *   VERİTABANI YETKİ BİLGİLERİ ALANI
                 *   @Mixed
                 *
                 *   Host            = Veritabanınızın ip yada varsayılan local olmasıdır. Genellikle localhost 'tur
                 *   User, Password  = Veritabanınızın Kullanıcı Adı Ve Şifresidir.
                 *   Data            = Veritabanınızın  Adıdır.
                 *   Prefix          = Kulanılan Prefix Varsayılan db Ön Adıdır.
                 *   Charset         = Veritabanında Hangi Dil Ailesini Kullanıyorsanız. Varsayılan utf-8 dir.
                 *
                 * */
                "mysql"     =>  array(
                    "host"                          =>  "localhost",
                    "user"                          =>  "root",
                    "password"                      =>  "root",
                    "data"                          =>  "taraftar",
                    "charset"                       =>  "utf-8",
                    "prefix"                        =>  ""
                )

            );



}
