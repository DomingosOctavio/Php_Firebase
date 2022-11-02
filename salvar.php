<?php

include 'model_tab_corrente.php';
include 'model_tab_luminosidade.php';
include 'model_tab_tensao.php';

include 'db_connection.php';

$tensao   =      $_GET["tensao"];
$corrente =      $_GET["corrente"];
$luminosidade =  $_GET["luminosidade"];
$data_arduino =  $_GET["data_atual"];
$token =         $_GET["token"];
$varHoraColuna = $_GET["varHoraColuna"];


$valoresCorrente = $database
           ->getReference("TAB_CORRENTE/".$token."/".$data_arduino)
           ->getValue();

if ($valoresCorrente == null)
{
    $Token =              $token;
    $IdDia =              $data_arduino;
    $SeisCorrente =       "0";
    $SeteCorrente =       "0";
    $OitoCorrente =       "0";
    $NoveCorrente =       "0";
    $DezCorrente =        "0";
    $OnzeCorrente =       "0";
    $DozeCorrente =       "0";
    $TrezeCorrente =      "0";
    $CatorzeCorrente =    "0";
    $QuinzeCorrente =     "0";
    $DezeseisCorrente =   "0";
    $DezeseteCorrente =   "0";
    $DezoitoCorrente =    "0";
}
else
{
    $Token =              $valoresCorrente["Token"];
    $IdDia =              $valoresCorrente["Id_dia"];
    $SeisCorrente =       $valoresCorrente["Seis"];
    $SeteCorrente =       $valoresCorrente["Sete"];
    $OitoCorrente =       $valoresCorrente["Oito"];
    $NoveCorrente =       $valoresCorrente["Nove"];
    $DezCorrente =        $valoresCorrente["Dez"];
    $OnzeCorrente =       $valoresCorrente["Onze"];
    $DozeCorrente =       $valoresCorrente["Doze"];
    $TrezeCorrente =      $valoresCorrente["Treze"];
    $CatorzeCorrente =    $valoresCorrente["Catorze"];
    $QuinzeCorrente =     $valoresCorrente["Quinze"];
    $DezeseisCorrente =   $valoresCorrente["Dezeseis"];
    $DezeseteCorrente =   $valoresCorrente["Dezesete"];
    $DezoitoCorrente =    $valoresCorrente["Dezoito"];
}


if (strcmp($varHoraColuna, "6h") == 0) {
    $SeisCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "7h") == 0) {
    $SeteCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "8h") == 0) {
    $OitoCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "9h") == 0) {
    $NoveCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "10h") == 0) {
    $DezCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "11h") == 0) {
    $OnzeCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "12h") == 0) {
    $DozeCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "13h") == 0) {
    $TrezeCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "14h") == 0) {
    $CatorzeCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "15h") == 0) {
    $QuinzeCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "16h") == 0) {
    $DezeseisCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "17h") == 0) {
    $DezeseteCorrente = $corrente;
}
else if (strcmp($varHoraColuna, "18h") == 0) {
    $DezoitoCorrente = $corrente;
}

$dados_corrente = new TabCorrente();

$dados_corrente->Id_dia =   $data_arduino ;
$dados_corrente->Seis =     $SeisCorrente;
$dados_corrente->Sete =     $SeteCorrente;
$dados_corrente->Oito =     $OitoCorrente;
$dados_corrente->Nove =     $NoveCorrente;
$dados_corrente->Dez =      $DezCorrente;
$dados_corrente->Onze =     $OnzeCorrente;
$dados_corrente->Doze =     $DozeCorrente;
$dados_corrente->Treze =    $TrezeCorrente;
$dados_corrente->Catorze =  $CatorzeCorrente;
$dados_corrente->Quinze =   $QuinzeCorrente;
$dados_corrente->Dezeseis = $DezeseisCorrente;
$dados_corrente->Dezesete = $DezeseteCorrente;
$dados_corrente->Dezoito =  $DezoitoCorrente;
$dados_corrente->Token =    $token;


$ref = 'TAB_CORRENTE/' .$token."/".$data_arduino;

$postdata = $database->getReference($ref)->set($dados_corrente);

echo $postdata;
//--------------------------------------------Tensão_________________

$valoresTensao = $database
           ->getReference("TAB_TENSAO/".$token."/".$data_arduino)
           ->getValue();

if ($valoresTensao == null)
{
    $Token =              $token;
    $IdDia =              $data_arduino;
    $SeisTensao =       "0";
    $SeteTensao =       "0";
    $OitoTensao =       "0";
    $NoveTensao =       "0";
    $DezTensao =        "0";
    $OnzeTensao =       "0";
    $DozeTensao =       "0";
    $TrezeTensao =      "0";
    $CatorzeTensao =    "0";
    $QuinzeTensao =     "0";
    $DezeseisTensao =   "0";
    $DezeseteTensao =   "0";
    $DezoitoTensao =    "0";
}
else
{
    $Token =            $valoresTensao["Token"];
    $IdDia =            $valoresTensao["Id_dia"];
    $SeisTensao =       $valoresTensao["Seis"];
    $SeteTensao =       $valoresTensao["Sete"];
    $OitoTensao =       $valoresTensao["Oito"];
    $NoveTensao =       $valoresTensao["Nove"];
    $DezTensao =        $valoresTensao["Dez"];
    $OnzeTensao =       $valoresTensao["Onze"];
    $DozeTensao =       $valoresTensao["Doze"];
    $TrezeTensao =      $valoresTensao["Treze"];
    $CatorzeTensao =    $valoresTensao["Catorze"];
    $QuinzeTensao =     $valoresTensao["Quinze"];
    $DezeseisTensao =   $valoresTensao["Dezeseis"];
    $DezeseteTensao =   $valoresTensao["Dezesete"];
    $DezoitoTensao =    $valoresTensao["Dezoito"];
}


if (strcmp($varHoraColuna, "6h") == 0) {
    $SeisTensao = $tensao;
}
else if (strcmp($varHoraColuna, "7h") == 0) {
    $SeteTensao = $tensao;
}
else if (strcmp($varHoraColuna, "8h") == 0) {
    $OitoTensao = $tensao;
}
else if (strcmp($varHoraColuna, "9h") == 0) {
    $NoveTensao = $tensao;
}
else if (strcmp($varHoraColuna, "10h") == 0) {
    $DezTensao = $tensao;
}
else if (strcmp($varHoraColuna, "11h") == 0) {
    $OnzeTensao = $tensao;
}
else if (strcmp($varHoraColuna, "12h") == 0) {
    $DozeTensao = $tensao;
}
else if (strcmp($varHoraColuna, "13h") == 0) {
    $TrezeTensao = $tensao;
}
else if (strcmp($varHoraColuna, "14h") == 0) {
    $CatorzeTensao = $tensao;
}
else if (strcmp($varHoraColuna, "15h") == 0) {
    $QuinzeTensao = $tensao;
}
else if (strcmp($varHoraColuna, "16h") == 0) {
    $DezeseisTensao = $tensao;
}
else if (strcmp($varHoraColuna, "17h") == 0) {
    $DezeseteTensao = $tensao;
}
else if (strcmp($varHoraColuna, "18h") == 0) {
    $DezoitoTensao = $tensao;
}

$dados_tensao = new TabTensao();

$dados_tensao->Id_dia =   $data_arduino ;
$dados_tensao->Seis =     $SeisTensao;
$dados_tensao->Sete =     $SeteTensao;
$dados_tensao->Oito =     $OitoTensao;
$dados_tensao->Nove =     $NoveTensao;
$dados_tensao->Dez =      $DezTensao;
$dados_tensao->Onze =     $OnzeTensao;
$dados_tensao->Doze =     $DozeTensao;
$dados_tensao->Treze =    $TrezeTensao;
$dados_tensao->Catorze =  $CatorzeTensao;
$dados_tensao->Quinze =   $QuinzeTensao;
$dados_tensao->Dezeseis = $DezeseisTensao;
$dados_tensao->Dezesete = $DezeseteTensao;
$dados_tensao->Dezoito =  $DezoitoTensao;
$dados_tensao->Token =    $token;


$ref = 'TAB_TENSAO/' .$token."/".$data_arduino;

$postdata = $database->getReference($ref)->set($dados_tensao);

echo $postdata;

//--------------------------------------------Corrente_________________

$valoresLuz = $database
           ->getReference("TAB_LUMINOSIDADE/".$token."/".$data_arduino)
           ->getValue();

if ($valoresLuz == null)
{
    $Token =              $token;
    $IdDia =              $data_arduino;
    $SeisLuz =       "0";
    $SeteLuz  =       "0";
    $OitoLuz  =       "0";
    $NoveLuz  =       "0";
    $DezLuz  =        "0";
    $OnzeLuz  =       "0";
    $DozeLuz  =       "0";
    $TrezeLuz  =      "0";
    $CatorzeLuz  =    "0";
    $QuinzeLuz  =     "0";
    $DezeseisLuz  =   "0";
    $DezeseteLuz  =   "0";
    $DezoitoLuz  =    "0";
}
else
{
    $Token =          $valoresLuz ["Token"];
    $IdDia =          $valoresLuz ["Id_dia"];
    $SeisLuz  =       $valoresLuz ["Seis"];
    $SeteLuz  =       $valoresLuz ["Sete"];
    $OitoLuz  =       $valoresLuz ["Oito"];
    $NoveLuz  =       $valoresLuz ["Nove"];
    $DezLuz  =        $valoresLuz ["Dez"];
    $OnzeLuz  =       $valoresLuz ["Onze"];
    $DozeLuz  =       $valoresLuz ["Doze"];
    $TrezeLuz  =      $valoresLuz ["Treze"];
    $CatorzeLuz  =    $valoresLuz ["Catorze"];
    $QuinzeLuz  =     $valoresLuz ["Quinze"];
    $DezeseisLuz  =   $valoresLuz ["Dezeseis"];
    $DezeseteLuz  =   $valoresLuz ["Dezesete"];
    $DezoitoLuz  =    $valoresLuz ["Dezoito"];
}


if (strcmp($varHoraColuna, "6h") == 0) {
    $SeisLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "7h") == 0) {
    $SeteLuz = $luminosidade;
}
else if (strcmp($varHoraColuna, "8h") == 0) {
    $OitoLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "9h") == 0) {
    $NoveLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "10h") == 0) {
    $DezLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "11h") == 0) {
    $OnzeLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "12h") == 0) {
    $DozeLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "13h") == 0) {
    $TrezeLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "14h") == 0) {
    $CatorzeLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "15h") == 0) {
    $QuinzeLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "16h") == 0) {
    $DezeseisLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "17h") == 0) {
    $DezeseteLuz  = $luminosidade;
}
else if (strcmp($varHoraColuna, "18h") == 0) {
    $DezoitoLuz  = $luminosidade;
}

$dados_luz = new TabLuminosidade();

$dados_luz->Id_dia =   $data_arduino ;
$dados_luz->Seis =     $SeisLuz;
$dados_luz->Sete =     $SeteLuz;
$dados_luz->Oito =     $OitoLuz;
$dados_luz->Nove =     $NoveLuz;
$dados_luz->Dez =      $DezLuz;
$dados_luz->Onze =     $OnzeLuz;
$dados_luz->Doze =     $DozeLuz;
$dados_luz->Treze =    $TrezeLuz;
$dados_luz->Catorze =  $CatorzeLuz;
$dados_luz->Quinze =   $QuinzeLuz;
$dados_luz->Dezeseis = $DezeseisLuz;
$dados_luz->Dezesete = $DezeseteLuz;
$dados_luz->Dezoito =  $DezoitoLuz;
$dados_luz->Token =    $token;


$ref = 'TAB_LUMINOSIDADE/' .$token."/".$data_arduino;

$postdata = $database->getReference($ref)->set($dados_luz);

echo $postdata;