<?php   
    include ('./database.php');
    try
    {
        $req=$bdd->prepare('INSERT INTO utilisateurs(nom_prenom,email,mdp,ville) VALUES(:nom_prenom,:email,:mdp,:ville)');
    $req->execute(array(
    'nom_prenom'=>$_POST['nomprenom'],
    'email'=>$_POST['email'],
    'mdp'=>$_POST['mdp'],
    'ville'=>$_POST['ville']
    ));
    }
    catch(Exception $e)
    {
        die('Erreur $' . $e->getMessage());
    }   
?>