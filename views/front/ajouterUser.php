

<?PHP

include "../../entities/Utilisateur.php";
include "../../core/UtilisateurC.php";

if (isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['numTel']) && isset($_POST['userName']) && isset($_POST['mdp'])){
    
    $user1=new utilisateur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numTel'],$_POST['userName'],$_POST['mdp']);

    $user1C=new UtilisateurC();

    $user1C->ajouterUser($user1);

    header('Location: coming-soon.html');
    
}else{
    echo"verifier les champs";
}
//*/

?>