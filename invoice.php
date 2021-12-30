<?php
include 'helpers.php';
$data=[];
$data['name']='hani';
$data['vat_number']='123456';
$data['date']=date("Y-m-d H:i:s");
$data['total']='100';
$data['vat']='15';
prepareInvoiceQRCode($data);
?>