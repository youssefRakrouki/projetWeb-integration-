<?PHP
include"../config.php";
include "../entities/Vol.php";
//include_once "../entities/vol.php"
class VolC {
    protected $db;

    function affichervol ($vol){

        echo "airline: ".$vol->getairline()."<br>";
        echo "lieu_a: ".$vol->getlieu_a()."<br>";
        echo "lieu_d: ".$vol->getlieu_d()."<br>";
        echo "date_d: ".$vol->getdate_d()."<br>";
        echo "date_r: ".$vol->getdate_r()."<br>";
        echo "heure_d: ".$vol->getheure_d()."<br>";
        echo "heure_r: ".$vol->getheure_r()."<br>";
    }
    public function recupererVol($idVol){

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $sql="SELECT * from vol where idVol=$idVol";
        $this->db = $conn;
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajoutervols ($vol){



        $sql="insert into vol (idVol,airline,lieu_a,lieu_d,date_d,date_r,heure_d,heure_r,prixVol,nbPlace) values 
(:idVol, :airline, :lieu_a, :lieu_d, :date_d, :date_r, :heure_d, :heure_r, :prixVol, :nbPlace)";
        $conn = NULL;
        try{
            echo"1111";
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        try{

            $req=$this->db->prepare($sql);
            $idVol=$vol->getidVol();
            $airline=$vol->getairline();
            $lieu_a=$vol->getlieu_a();
            $lieu_d=$vol->getlieu_d();
            $date_d=$vol->getdate_d();
            $date_r=$vol->getdate_r();
            $heure_d=$vol->getheure_d();
            $heure_r=$vol->getheure_r();
            $prixVol=$vol->getPrixVol();
            $nbPlace=$vol->getNbPlace();
            //lier variable => paramètre
            $req->bindValue(':idVol',$idVol);
            $req->bindValue(':airline',$airline);
            $req->bindValue(':lieu_a',$lieu_a);
            $req->bindValue(':lieu_d',$lieu_d);
            $req->bindValue(':date_d',$date_d);
            $req->bindValue(':date_r',$date_r);
            $req->bindValue(':heure_d',$heure_d);
            $req->bindValue(':heure_r',$heure_r);
            $req->bindValue(':prixVol',$prixVol);
            $req->bindValue(':nbPlace',$nbPlace);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function modifierVol($e,$idVol){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }

        $this->db = $conn;



        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{



            $airline=$e->getAirline();
            $lieu_a=$e->getLieu_a();
            $lieu_d=$e->getLieu_d();
            $date_d=$e->getDate_d();
            $date_r=$e->getDate_r();
            $heure_d=$e->getHeure_d();
            $heure_r=$e->getHeure_r();
            $prixVol=$e->getPrixVol();
            $nbPlace=$e->getNbPlace();


            $sql="UPDATE vols SET airline='$airline', lieu_a='$lieu_a', lieu_d='$lieu_d', date_d='$date_d', date_r='$date_r', heure_d='$heure_d', heure_r='$heure_r', prixVol='$prixVol', nbPlace='$nbPlace' WHERE idVol='$idVol'";
            $req = $this->db->prepare($sql);
            $datas =array(':airline'=>$airline, ':lieu_a'=>$lieu_a,':lieu_d'=>$lieu_d,'date_d'=>$date_d,':date_r'=>$date_r, ':heure_d'=>$heure_d, ':heure_r'=>$heure_r, ':prixVol'=>$prixVol, 'nbPlace'=>$nbPlace);

            $req->bindValue(':airline',$airline);
            $req->bindValue(':lieu_a',$lieu_a);
            $req->bindValue(':lieu_d',$lieu_d);
            $req->bindValue(':date_d',$date_d);
            $req->bindValue(':date_r',$date_r);
            $req->bindValue(':heure_d',$heure_d);
            $req->bindValue(':heure_r',$heure_r);
            $req->bindValue(':prixVol',$prixVol);
            $req->bindValue(':nbPlace',$nbPlace);


            $req->execute();


        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }

    }

    function affichVol(){
        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=agence_de_voyage",
                "root", "root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql="SElECT * From vol";
        try{
            $liste=$this->db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    public function supprimerVol($idVol)
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
        $sql = "DELETE  FROM `vol` WHERE `idVol`=:idVol";
        $req= $this->db->prepare($sql);
        $req->bindValue(':idVol',$idVol);
        $req->execute();

    }
}
?>