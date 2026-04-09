<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="global">
        <div class="btnhorizontal">
            <button class="bouton" id="modifier">Modifier</button>
            <button class="bouton" id="ajouter">Ajouter</button>
            <button class="bouton" id="modifier">Suprimer</button>
        </div>
        <div class="trnsparant">
            <div class="scroller">
                <h1 class="texte">MODIFIER</h1>
                <div id="element1">
                    <h5 class="ajouter">Ajouter un produit</h5>
                    <form action="">
                        <div class="formItem">
                            <label for="id">Id produit</label>
                            <br />
                            <input type="text" placeholder="Id produit">
                        </div>
                        <div class="formItem">
                            <label for="nom">Nom produit</label>
                            <br />
                            <input type="text" placeholder="Nom produit">
                        </div>
                        <div class="formItem">
                            <label for="nom">Description</label>
                            <br />
                            <input type="text" placeholder="Description">
                        </div>
                        <div class="formItem">
                            <label for="nom">Prix</label>
                            <br />
                            <input type="text" placeholder="Prix">
                        </div>
                        <div class="formItem">
                            
                            <input type="submit" class="bouton" value="S'inscrire">
                        </div>
                    </form>

                </div>
                <div id="element2">
                    <form action="">
                        <div class="formItem">
                            <label for="nom">Nom produit</label>
                            <br />
                            <input type="text" placeholder="Nom produit">
                        </div>
                        <div class="formItem">
                            <label for="nom">Description</label>
                            <br />
                            <input type="text" placeholder="Description">
                        </div>
                        <div class="formItem">
                            <label for="nom">prix</label>
                            <br />
                            <input type="text" placeholder="prix">
                        </div>
                        <div class="formItem">
                            <input type="submit" class="bouton" value="S'inscrire">
                        </div>
                    </form>
                
                </div>
                <div id="element3">
                    <h5 class="suprimer">Suprimer un produit</h5>
                    <form action="">
                        <div class="formItem">
                            <label for="nom">Id produit</label>
                            <br />
                            <input type="text" placeholder="Id produit">
                        </div>
                        <div class="formItem">
                            <input type="submit" class="bouton" value="S'inscrire">
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </section>
</body>
</html>