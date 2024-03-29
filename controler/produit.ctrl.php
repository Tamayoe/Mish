<?php
$config = parse_ini_file('../config/config.ini');

require_once('../framework/view.class.php');
require_once('../model/produitDAO.class.php');

$DAO = new ProduitDAO($config['database_path']);
if(isset($_GET['id'])) {
  $produit = $DAO->get($_GET['id']);
}

$image = $produit->image;
$image = $config['produit_image_path'].$image;
$produit->image = $image;

$view = new View('produit.view.php');
$view->produit = $produit;
$view->show();
?>
