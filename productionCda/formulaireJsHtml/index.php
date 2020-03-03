<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Evalutation HTML </title>
        <meta charset="UTF-8" />        
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-8nq3OiMMgrVFAHyRMMO+DTfMEciSY+c3Awhj/5ljQ1xck1Uv2BUtMjsjLD8GT5Er" crossorigin="anonymous"/>
        <link href="asset/CSS/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="asset/JS/script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-3 col-sm-4"></div>
                <div class="text-center col-lg-6 col-md-12 col-sm-4">
                    <h1 class="text-success">Formulaire Html vérification JavaScript</h1>
                    <h2 class="ennonce text-primary">L'évaluation consiste à réaliser un formulaire en HTML dont la saisie est contrôlé en Javascript.<br>
                        Pour chaque champ, un contrôle de saisie doit être mis en place. Des messages à destination de l'utilisateur final doivent clairement indiquer les erreurs de saisie.<br>
                        La page doit être réalisé avec un framework CSS.</h2>
                    <p class="titleEval" >Formulaire Réalisé pour l'évaluation :</p>
                    <h3>Vos coordonnées</h3>
                    <span class="text-primary" id="succesForm">Votre formulaire a été envoyer avec succées!!!!!!</span>
                    <form method="post" name="contactCompany" onsubmit="return test()">
                        <p class="text-warning">* Ces zones sont obligatoires pour envoyer le formulaire  </p>
                        <div class="form-group">
                            <label for="society">Sociéter</label>
                            <p class="text-warning">*</p>
                            <input type="text" class="form-control text-center"  id="society"  placeholder="Sociéter">
                            <span class="text-warning" id="society1">Veuillez remplir le noms de la sosiéter</span>                            
                            <span class="text-warning" id="society2">Veuillez remplir le noms de la sosiéter avec des caracteres alphabétique !!!</span>
                        </div>
                        <div class="form-group">
                            <label for="contactPerson">Personne à contacter</label>
                            <input type="text" class="form-control text-center" id="contactPerson"  placeholder="Personne à contacter">
                            <spam class="text-warning">*</spam>
                            <span class=" text-warning" id="contactPerson1">veuillez renplir le noms de la personne à contacter</span>
                            <span class=" text-warning" id="contactPerson2">correctement le nom de la personnes </span>
                        </div>
                        <div class="form-group">
                            <label for="businessAdress">Adresse de l'entreprise</label>
                            <p class="text-warning">*</p>    
                            <textarea class="form-control" id="businessAdress"  rows="3"></textarea>
                            <span id="businessAdress1" class="text-warning" >Veuillez remplir le champs adresse!</span>
                        </div>
                        <div class="form-group">
                            <label for="zipCode">code postal </label>
                            <input type="text" class="form-control text-center" id="zipCode"  placeholder="code postal">
                            <p class="text-warning">*</p>
                            <span id="zipCode1" class="text-warning">Veuillez remplir le champs code postal</span>
                            <span id="zipCode2" class="text-warning">Mettez juste 5 chiffre dans le champs code postal!</span>
                        </div>
                        <div class="form-group">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control text-center" id="city"   placeholder="ville de la soiciéter">
                            <p class="text-warning">*</p>
                            <span id="city1" class="text-warning">Veuillez remplir le champs Ville</span>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email</label>
                            <input type="text" class="form-control text-center" id="email"   placeholder="Email ">
                            <p class="text-warning">*</p>
                            <span id="email1" class="text-warning">Veuillez remplir le champs Email</span>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Téléphone</label>
                            <input type="tel" class="form-control text-center" id="phoneNumber"  placeholder="Téléphone">
                            <p class="text-warning">*</p>
                            <span id="phoneNumber1" class="text-warning">Veuillez remplir le numéro de téléphone</span>
                            <span id="phoneNumber2" class="text-warning">Veuillez remplir le numéro de téléphone uniquement avec des chffres!</span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="technicalEnvironment">Sélectionnez l'environement technique du projet:  </label>
                                <select class="form-control" id="exampleSelect1">
                                    <option value="" selected hidden disabled  >choisissez</option>
                                    <option value="Access">Access</option>
                                    <option value="Java">Java</option>
                                    <option value="delphi">Delphi</option>     
                                    <option value="windex">Windev</option>     
                                    <option value="Visual">Visual Basic</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-9">
                                <textarea class="form-control text-center" id="technicalEnvironment" rows="6"></textarea>
                                <p class="text-warning">*</p>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enregistrer" id="save" />
                        <input type="reset" class="btn btn-primary" value="Effacer" id="erase" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
