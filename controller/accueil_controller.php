<?php
require_once("conf/conf.inc.php");
require_once("model/accueil_model.php");

function index(){

$parties = getTroisParties();
  
$titre="Nos scénarios les plus récents :";

require('view/autres_pages/header.php');
require('view/autres_pages/menu.php');
require('view/accueil_view.php');
require('view/autres_pages/footer.php');
}