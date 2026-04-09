<?php
include("connexionBDD.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth.css" />
    <title>Document</title>
</head>

<body>
    <section class="signup">
          <div class="left">
            <h1><span>C</span>onnexion</h1>
            <img src="../image/auth.jpeg" alt="">
          </div>
        <div class="right">
            <form action="" method="POST">
                
                <div class="formItem">
                    <label for="nom">Mail</label>
                    <br />
                    <input type="text" placeholder="Mail">
                </div>
                <div class="formItem">
                    <label for="nom">mot de passe</label>
                    <br />
                    <input type="text" placeholder="Mot de passe" name="mdp">
                </div>
                    <input type="submit" class="bouton" value="Se connecter" name="connect">
                    <h5 class="signOrLog">Pas encore de compte? <a href="inscription.php">Inscrivez -vous</a></h5>
                    <?php
                    
                    if(isset($_POST["connect"])){
                       
                        $mail= $_POST["mail"];
                        $mdp= $_POST["mdp"];
                       
                     
                            try{
                                $req= $pdo->prepare("SELECT mail FROM utilisateurs WHERE mail=:mail AND mdp=:mdp");
                                $req->execute(['mail'=>$mail, 'mdp'=>$mdp]);
                                if($req->rowcount()> 0){
                                    echo'<script>window.location.href="index.php"</script>';

                                }
                                
                            }
                            catch(PDOException $e){
                                echo "Erreur" .$e->getMessage();
                                
                        
                            }
                        }
                </div>    
        </div>
            </form>

    </section>
</body>

</html>