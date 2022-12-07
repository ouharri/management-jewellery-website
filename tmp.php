<?php
class DAO
{
    function getPDO()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mabase", "root", "");
        return $pdo;
    }
    function authentification($l, $p)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM administrateurs WHERE login=? AND password=? ;");
        $stmt->execute(array($l, $p));
        if ($stmt->fetch()) {
            return true;
            return false;
            header("Location:ajout.php");
        }
    }
    function ajouterClient($n, $a, $t, $e)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO client (nom,adresse,tele,email) VALUES (?,?,?,?)");
        $stmt->execute(array($n, $a, $t, $e));
    }

    function listeClients()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM client;");
        $listecl = [];
        while ($row = $stmt->fetch()) {
            $listecl[] = new client($row['id'], $row['nom'], $row['tele'], $row['adresse'], $row['email']);
        }
        return $listecl;
    }

    /* function ajouterProduit($r,$l,$p,$q){
      $pdo=$this->getPDO();
      $stmt=$pdo->prepare("INSERT INTO produit (reference,libelle,prixUnitaire,quantiteStock) VALUES (?,?,?,?)");
      $stmt->execute(array($r,$l,$p,$q));
    }
    function listeProduits(){
      $pdo=$this->getPDO();
      $stmt=$pdo->prepare("SELECT * FROM produit;");
      $listP=[];
       while($row=$stmt->fetch()){
          $listeP[]=new produit($row['ref'],$row['lib'],$row['prixUn'],$row['quantiteSt']);
       }
       return $listP;
    }
   
*/
}





?>

<?php
extract($_POST);
include_once("DAO.php");

class client
{
    //var $id;
    var $nom;
    var $adresse;
    var $tele;
    var $email;
    function __construct($n, $a, $t, $e)
    {
        //$this->id=$i;
        $this->nom = $n;
        $this->adresse = $a;
        $this->tele = $t;
        $this->email = $e;
    }

    public static function listeclients()
    {
        $dao = new DAO();
        return listeclients();
    }
    function __getClient($pr)
    {
        switch ($pr) {
            case 'nom';
                return $this->nom;
                break;
            case 'adresse';
                return $this->adresse;
                break;
            case 'telephone';
                return $this->tele;
                break;
            case 'email';
                return $this->email;
                break;
        }
    }
    function Enregistrer()
    {
        $dao = new DAO();
        $dao->ajouterClient($this->nom, $this->adresse, $this->tele, $this->email);
    }
}
?>

<?php
extract($_POST);
include_once("DAO.php");

class client
{
    //var $id;
    var $nom;
    var $adresse;
    var $tele;
    var $email;
    function __construct($n, $a, $t, $e)
    {
        //$this->id=$i;
        $this->nom = $n;
        $this->adresse = $a;
        $this->tele = $t;
        $this->email = $e;
    }

    public static function listeclients()
    {
        $dao = new DAO();
        return listeclients();
    }
    function __getClient($pr)
    {
        switch ($pr) {
            case 'nom';
                return $this->nom;
                break;
            case 'adresse';
                return $this->adresse;
                break;
            case 'telephone';
                return $this->tele;
                break;
            case 'email';
                return $this->email;
                break;
        }
    }
    function Enregistrer()
    {
        $dao = new DAO();
        $dao->ajouterClient($this->nom, $this->adresse, $this->tele, $this->email);
    }
}
?>