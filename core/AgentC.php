<?php


class AgentC
{
    protected $db;
    function __construct() {
        echo"verifier les champs1";
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
    }

    function ajouterAgent($utilisateur){
        $sql="insert into agent (cin,nom,prenom,email,numTel,userName,mdp,role,salaire) values 
     (:cin, :nom, :prenom, :email, :numTel, :userName, :mdp)";

        try{
            $req=$this->db->prepare($sql);
            $cin=$utilisateur->getCin();
            $nom=$utilisateur->getNom();
            $prenom=$utilisateur->getPrenom();
            $email=$utilisateur->getEmail();
            $numTel=$utilisateur->getNumTel();
            $userName=$utilisateur->getUserName();
            $mdp=$utilisateur->getMdp();
            $role=$utilisateur->getRole();
            $salaire=$utilisateur->getSalaire();

            $req->bindValue(':cin',$cin);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':email',$email);
            $req->bindValue(':numTel',$numTel);
            $req->bindValue(':userName',$userName);
            $req->bindValue(':mdp',$mdp);
            $req->bindValue(':role',$role);
            $req->bindValue(':salaire',$salaire);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherAgent(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="SElECT * From agent";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function RecupererAgent($cin){


        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;

        $sql="SELECT * from agent where (cin=$cin)";

        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierAgent($e){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"222";
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="UPDATE agent SET cin=:cin, nom=:nom, prenom=:prenom, email=:email, numTel=:numTel, userName=:userName, mdp=:mdp, role=:role, salaire=:salaire WHERE cin=:cin";


        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $req = $this->db->prepare($sql);
            $cin=$e->getCin();
            $nom=$e->getNom();
            $prenom=$e->getPrenom();
            $email=$e->getEmail();
            $numTel=$e->getNumTel();
            $userName=$e->getUserName();
            $role=$e->getRole();
            $salaire=$e->getSalaire();

            $datas = array(':cin'=>$cin, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':numTel'=>$numTel,':userName'=>$userName,':mdp'=>$mdp);
            $req->bindValue(':cin',$cin);
            $req->bindValue(':cin',$cin);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':email',$email);
            $req->bindValue(':userName',$userName);
            $req->bindValue(':mdp',$mdp);
            $req->bindValue(':role',$role);
            $req->bindValue(':salaire',$salaire);

            $s=$req->execute();


        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }
    public function supprimerUser($cin)
    {
        echo"2222";
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"33333";
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `utilisateur` WHERE `cin`=:cin";
        $req= $this->db->prepare($sql);
        $req->bindValue(':cin',$cin);
        $req->execute();

    }



}