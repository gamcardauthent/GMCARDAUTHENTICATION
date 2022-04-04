<?php

function ajouter($nom, $email, $ticket, $prix, $code, $date)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO formulaire (nom, email, ticket, prix, code, laDate) VALUES ('$nom', '$email', '$ticket', '$prix', '$code', '$date')");
        $req->execute(array($nom, $email, $ticket, $prix, $code, $date));
        $req->closeCursor();

    }
}

function afficher()
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM formulaire ODER BY id DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}

function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("DELETE * FROM formulaire WHERE id=?");
        $req->execute(array($id));
    }
}
?>