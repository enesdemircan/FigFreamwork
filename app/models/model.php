<?php
/*
*   Proje Adı : Fig Framework
*   Geliştirici  : Muhammet Enes Demircan
*   Geliştirici Sitesi  : www.enesdemircan.com
*   Proje Başlangıcı  : 22.12.2016 08:00:00
**/
class model extends controller
{
function testmodel($data){
  $query = $this->PDO()->prepare('SQL SENTENCE');
  $query->execute(array('BLA' => $data['BLA']));
  return $query->fetch();
}
}
