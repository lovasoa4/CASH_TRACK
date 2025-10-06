<?php
include_once('../db/ConnectionDB.php');
class Transaction{
    protected int $id;
    protected string $description;
    protected string $type;
    protected string $montant;
    protected string $date_transaction;
    protected int $id_user;

    public function  __construct($id,$description,$type,$montant,$date_transaction,$id_user){
        $this->$id;
        $this->$description;
        $this->$type;
        $this->$montant;
        $this->$date_transaction;
        $this->$id_user;
    }
    public function select_transaction(){
         //creation d'objet connection
        $db = new  ConnexionDB();
        $pdo = $db->getConnection();
    }
    public function create_transaction(){
        //creation d'objet connection
        $db = new  ConnexionDB();
        $pdo = $db->getConnection();
        //requette pour inserer les données de la transaction
        $stmt = $pdo->prepare("INSERT INTO transaction (type,date_transaction,montant,description,id_user ) VALUES (?, ?, ?, ?,?)");
        return $stmt->execute([$this->type,$this->montant, $this->date_transaction, $this->description]);
    }

}
?>