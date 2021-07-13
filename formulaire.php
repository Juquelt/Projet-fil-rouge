<?php   
    include ('./database.php');
    try
    {
    var_dump($_POST);
    $req=$bdd->prepare('INSERT INTO ecole(nom) VALUES(:nom)');
        $req->execute(array(
            'nom'=>$_POST['ecole'],
        ));
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