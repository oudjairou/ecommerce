<?php
include("connexionBDD.php");

?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth.css"/>
    <title>Document</title>
</head>
<body>
    <section class="signup">
        <div class="left">
            <h1><span>I</span>nscription</h1>
            <img src="../image/auth.jpeg" alt="">
        </div>
        <div class="right">
            <form action="" method="POST">
                <div class="formItem">
                    <label for="nom">Nom</label>
                    <br/>
                    <input type="text" placeholder="Nom" name="nom">
                </div>
                <div class="formItem">
                    <label for="nom">Prenom</label>
                    <br />
                    <input type="text" placeholder="Prenom" name="prenom">
                </div>
                <div class="formItem">
                    <label for="nom">Mail</label>
                    <br />
                    <input type="text" placeholder="Mail" name="mail">
                </div>
                <div class="formItem">
                    <label for="nom">mot de passe</label>
                    <br />  
                    <input type="text" placeholder="Mot de passe" name="mdp">
                </div>
                <div class="formItem">
                    <label for="nom">Confirmez vos mot de passe</label>
                    <br />
                    <input type="text" placeholder="Confirmez vos mot de passe" name="cmdp">
                    <input type="submit" class="bouton" value="S'inscrire" name="inscrire">
                    <h5 class="signOrLog" >Deja un compte ? <a href="html/connexion.php">Connectez-vous</a></h5>

                
                    <?php
                    
                    if(isset($_POST["inscrire"])){
                        $nom= $_POST["nom"];
                        $prenom= $_POST["prenom"];
                        $mail= $_POST["mail"];
                        $mdp= $_POST["mdp"];
                        $cmdp= $_POST["cmdp"];
                        if($mdp==$cmdp){
                            try{
                                $req= $pdo->prepare("INSERT INTO utilisateurs(nom, prenom, mail, mdp) VALUES(?,?,?,?)");
                                $req->execute(array($nom, $prenom, $mail, $mdp));
                                echo'<script>window.location.href="products.php"</script>';
                            }catch(PDOException $e){
                                echo "Erreur" .$e->getMessage();
                                
                        
                            }
                        }
                    }
                    
                    ?>
                </div>
            </form>
            
        </div>

    </section>
</body>
</html>
