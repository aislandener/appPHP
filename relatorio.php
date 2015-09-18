<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("./relatorios/class/tcpdf/tcpdf.php");
include_once("./relatorios/class/PHPJasperXML.inc.php");
include_once("./relatorios/setting.php");

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("titulo"=>"Relatorios de Carros");
$PHPJasperXML->load_xml_file("./relatorios/phpRelatorio.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>