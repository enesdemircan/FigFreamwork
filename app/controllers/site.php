<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/

class site extends controller

{

    /* Controller İlk Açılışında Çalıştırılacak İşlemler İçin Kullanılır
    *  $this->obstart(); -> Çıktı tamponlamasını başlatır
    *  $this->sessionstart(); -> Session'u Başlatır
    *  $this->timezone(); -> Saat Ve Zaman Ayarını Yapar (TÜRKİYE)
    *  Bu Örneklerin Haricinde Fonksiyon Çağırabilirsiniz
    */
    public function __construct(){
        $this->obstart();
        $this->sessionstart();
        $this->timezone();
    }

    /* Controller'dan Wiev Katmanına Gönderilecek Ayarlarının Yapıldığı Alan
    *  $this->plugin('upload'); -> Plugin Klasöründen Plugin Çağırabilirsiniz
    *  $this->model('admin') -> Model Klasöründen Model Çağırabilirsiniz
    *  $this->timezone() -> Saat Ve Zaman Ayarını Yapar (TÜRKİYE)
    *  Bu Örneklerin Haricinde Fonksiyon Çağırabilirsiniz
    */
    public function tools(){
        $this->model('model'); /* Model İçeriğimizi Çağırıyoruz */
        //$this->plugin('code/upload'); 
        $Model  =   array
    (
        'asset_url'     =>  $this->assetsurl('site/assets/'),
        'domain'        =>  $this->config['http_url'],
        'model'         =>  new model
        //'Upload'        =>  new Upload

    );
        return $Model;
    }


    public function index(){
        $this->view('index',$this->tools());
    }


}
