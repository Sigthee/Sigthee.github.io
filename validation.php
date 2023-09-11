<?php
require_once("db.php");

//si method "post" rentrer dans le formulaire il faut utiliser "$S_POST"
//sinon si la method "get" est rentrer dans le formulaire il faut utiliser "$_GET"
//la fonction isset sert a regarder si la variable qui lui est donnée est bien définie dans ce cas si elle regarde
//Si la variable "$_POST" est défini

if (isset($_POST) && !empty($_POST)) {  // $_GET
        echo "<pre>"; var_dump($_POST); echo "<pre>";
        echo $_POST['firstname'];
        //"sha1" Hash le mot, c'est a dire qu'il le rend illisible
        //"sha1" "md5"
        echo sha1($_POST["password"]);

        $insert = $bdd->prepare("INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)");
        $insert->execute(array($_POST["firstname"],
        $_POST["lastname"],
        $_POST["email"],
        md5($_POST["password"]),
        $_POST["gender"]
    ));
    header("Location: index.php");

}

?>