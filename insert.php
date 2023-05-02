<?php
include "cnx.php";

if(isset($_GET["nom"]) && isset($_GET["prénoms"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"]) && isset($_GET["date"]))
{
     $nom= $_GET["nom"];
     $prénoms= $_GET["prénoms"];
     $phone= $_GET["phone"];
     $mail= $_GET["mail"];
     $sexe= $_GET["gender"];
     $date= $_GET["date"];


    $req= mysqli_query($link, "insert into user (nom,prénoms,tel,mail,sexe,date) values ('$nom','$prénoms','$phone','$mail','$gender','$date')");

    if($req)
    {
        echo "insertion effectuée";
    }
     else
     {
        echo "erreur d'insertion";
     }
}













?>