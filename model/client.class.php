<?php
class Produit {
  public $id;
  public $nom;
  public $prenom;
  public $email;
  public $adresse;
  public $datecreation;
  /*
  ATTENTION: Le mot de passe est un champ critique de la sécurité, pour stocker cette information correctement,
  nous utiliserons une fonction encryptage nommée hash_pbkdf2() (voir documentation),
  et le mot de passe ne devra pas apparaitre en clair dans la base de donnée.
  */
  public $password;

  function __construct(int $id = 0, string $nom = '', string $prenom = '', string $email = '', string $adresse = '', string $datecreation = '', string $password = '') {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->adresse = $adresse;
    $this->datecreation = $datecreation;
    $this->password = $password;
  }
}
?>