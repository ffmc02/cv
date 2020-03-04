<?php
include_once '../config.php';
include_once '../controleur/indexCtrl.php';
/* en tete */
include ("../include/head.php");
//include ("../include/navbar.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center border">
            <h1>CV INTERACTIF GAËTAN JONARD</h1>
        </div>
        <div class="col-lg-4 border center-content" id="leftColum">
            <div class="sticky-top">
                <div id="slateBare" >

                    <h1 id="titleInfo">Information Utiles</h1>
                    <div class="row">
                        <div class="col-lg-6"> 
                            <p class="infoUtile">Gaëtan Jonard <br>
                                app 8 batiment des Accacias <br> 
                                8 rue E Potelet <br>
                                02320 Prémontré <br>
                                TEL: 06/14/59/37/45 <br>
                                Mail: gaetan.jonard@outlook.fr</p>
                        </div>
                        <div class="col-lg-6">
                            <a href="#Goals">Hauts de Pages</a><br>
                            <a href="#skills">compétence proféssionel</a><br>
                            <a href="#training">Mes compétences proféssionnel</a><br>
                            <a href="#professionalexperiences">Experiences professionnel</a><br>
                            <a href="#productionD2wm">Mes réalisation  pendant le D2WM </a><br>
                            <a href="#productionCda">Mes réalisation  pendant le CDA </a><br>
                            <a href="#hobbies">Mes loisirs</a><br>
                            <a href="#contact">Me contacter</a>
                        </div>
                    </div>
                </div>
                <div id="">
                    <div class="row">
                        <div class="titleSkillis col-sm-12 col-md-12 col-lg-12 border border-white text-center">
                            <h2 class="titrecompetance">Mes compétences professionnelles</h2>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="skillsBright col-sm-12 col-md-12 col-lg-12 border border-white px-0">
                            <h3> Web Développement</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Langages </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($language as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?= $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div>
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Frameworks </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($frameworks as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?= $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div> 
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Outils </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($outils as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?= $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div>
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Gestion Base de Donnée </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($databaseManagement as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?= $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div> 
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Extension </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($outils as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?php echo $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div>
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">CMS </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($CMS as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?php echo $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div>
                    <div class="row">
                        <div class="skillsDark col-sm-12 col-md-12 col-lg-12 border border-white">
                            <h5 class="h3skills">Autres Compétences </h5>
                        </div>
                    </div>
                    <div class="row justify-content-start" style="text-align: left;color:#000;">
                        <?php
                        $i = 0;
                        foreach ($othrerAbilities as $key => $val) {
                            $soffset = "offset-1";
                            if ($i % 2 != 0) {
                                $soffset = "";
                            }
                            ?>
                            <div class="col-lg-5 <?= $soffset; ?>">
                                <span><?php echo $val['titre']; ?></span>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $val['valeur']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $val['valeur']; ?>%"></div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>               
                    </div>
                </div>
            </div>  
        </div>
        <div class="col-lg-8 center border">
            <!--colonne central-->
            <div class="row" id="Goals">
                <div class="col-sm-12 col-md-12 col-lg-12 border border-white text-center">
                    <h1>Mon objectif :</h1>
                    <p>-Trouver une entreprise a fin d'effectuer mon stage du 22 Juin au 18 septembre 2020 <br>
                        -Avoir mon titre professionnel de Concepteur developpeur d'application <br>(niveau bac +3/4) </p>
                </div>
            </div>

            <div class="espace">
                <!--espace entre les différentes catégorie-->
                <img id="imgProductionD2wm"src="asset/img/imagePresentation/realisation-application-web_330x330-crop=1.jpg" alt=""/>
            </div>
            <div id="productionD2wm"> 
                <div class=" row">
                    <div class="titleRealisationDwm col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h1>Mes projets réalisés pendant ma formation Web Développeur à la MANU Soissons (02)<br>
                            du 18 mars au 13 septembre 2019</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="realisationDarcks col-sm-12 col-md-4 col-lg-4  border border-white">

                        <h2>Mon premier projet de groupe</h2>  <br>
                        <p>Reproduire la page d'accueil du site SFR <br>
                            Pour le voir cliquez <a href="productionManu/Repro_SFR/index.html" class="icirealistation" target="_blank">ICI</a></p>
                    </div>

                    <div class="RealisationBright col-sm-12 col-md-4 col-lg-4 border border-white">
                        <h2>Second projet</h2>
                        <p>Réaliser un site de E commerce <br>
                            Pour le visiter c'est par <a href="productionManu/wonderBox/index.html" class="icirealistation" target="_blank">ICI</a></p>
                    </div>
                    <div class="realisationDarcks col-sm-12 col-md-4 col-lg-4 border border-white">
                        <h2> 3ème projet</h2>
                        <p> Réaliser un site à partir d'un fichier XML sans toucher à la structure <br> 
                            Retrouvez le resultat en cliquant <a href="productionManu/ocordo/index.php" class="icirealistation" target="_blank"> ICI</a></p>
                    </div>
                    <div class="realisationDarcks col-sm-12 col-md-6 col-lg-6  border border-white">             
                        <h2><span>E</span><span>x</span><span>e</span><span>r</span><span>c</span><span>i</span><span>c</span><span>e</span><span> </span> <span>P</span><span>D</span><span>O</span></h2>
                        <p> Nous avons travaillé également sur le Mysql et la gestion des requêtes.<br>
                            Retrouvez toute mon application sur une salle de spectacle <a href="productionManu/PDO/view/index.php" class="icirealistation" target="_blank"> ICI</a></p>
                    </div>
                    <div class="RealisationBrightRigt col-sm-12 col-md-6 col-lg-6 border border-white " >
                        <h2>Projet professionel réaliser pour le titre de développeur web et web mobile </h2>
                        <p>Utilisation de tout les langages vue pendant la formation <a href="http://ffmc02.fr/index" class="icirealistation" target="_blank">ici</a></p>
                    </div>
                </div>
            </div>
            <div class="espace">
                <!--espace entre les différentes catégorie-->
                <img  id="imgProductionCda" src="asset/img/imagePresentation/REALISATION-BRAS-1810-2016-ok.png" alt=""/>
            </div>
            <div id="productionCda">
                <div class=" row">
                    <div class="titleRealisationCda col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h1>Mes projets réalisés pendant ma formation de Concepteur développeur d'application AFPA Amiens (80)<br>
                            du 20 janvier au 25 septembre 2020</h1>
                    </div>
                </div>
                <div class=" row">
                    <div class="RealisationBrightRigt col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h2>Formulaire en HTML</h2> 
                        <p>   Vérification éffectuer en JavaScript. <br> 
                            <a href="productionCda/formulaireJsHtml/index.php" target="_blank">ICI</a></p>
                    </div>
                </div>
            </div>
            <div class="espace">
                <!--espace entre les différentes catégorie-->
                <img id="imgProfessionalExperiences"src="asset/img/imagePresentation/ob_707a2e_400-f-68091104-r9ugmv7kzh9jkvp66yn5vdd.jpg" alt=""/>
            </div>
            <div id="professionalexperiences">   
                <div class="row">
                    <div class="titleProfessional col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h2 class="h1ptofessional">
                            Mes expériences professionnelles
                        </h2>
                    </div>
                    <div class="professionalBright col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h3 class="h2Prof">Aout 2017  => janvier 2018</h3>
                        <p class="pProf">Controleur d'échaffaudage et diagnostiqueur Amiante <br>
                            Total Flandres a Mardick <br>
                            (59)(Société PBDIAG)</p>
                    </div>
                    <div class="professionalDark col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h3 class="h2Prof">février 2016 => avril 2017 </h3>
                        <p class="pProf"> Préventeur, équipier de premieres et seconde intervention sur les sites de Total Normandie<br>
                            (le Havre)(76) Total Belgique (Féluis en Belgique)<br>
                            entreprise Sécurilog </p>
                    </div>
                    <div class="professionalBright col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h3 class="h2Prof"> avril 2015 => février 2016</h3>
                        <p class="pProf"> agent de prévention et de sécurité/ agents du service de sécurité incendie et assistance au personnes<br>
                            Chantier naval de Saint Nazaire (44) (agent de sécurité inccendi de bord entreprise ISP)<br>
                            tribunal d'instance, de grande instance et familliales d'amiens (80)(agent de sécurité incendie entreprise prosegure)<br>
                            centre comercial Glysi (80)(  agent de prévention et de sécurité entreprise Proségart)
                        </p>
                    </div>  
                    <div class="professionalDark col-sm-12 col-md-6 col-lg-6 border border-white">
                        <h3 class="h2Prof">septembre 2013 => aout 2014</h3>
                        <p class="pProf">Eléve Aide Médico-Psycologique<br>
                            Maison Des Ainée Acheux en Aminois (80)
                        </p>
                    </div>
                    <div class="professionalDark col-sm-12 col-md-6 col-lg-6 border border-white">
                        <h3 class="h2Prof">juin 2013 => septembre 2013</h3>
                        <p class="pProf">Aide à domicile <br>
                            Maison Des Ainée Acheux en Aminois (80)
                        </p>
                    </div>
                    <div class="professionalBrightButton col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h3 class="h2Prof">janvier 2007 => avril 2013</h3>
                        <p class="pProf"> Brancardier de nuit<br>
                            Bloc des Urgence<br> 
                            Centre Hospitalier Univertitaitre Hopital Nord
                            <br>Amiens (80)
                        </p>
                    </div>
                    <div class="professionalDark col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h3 class="h2Prof">Aout 2005 =>Janvier 2015</h3>
                        <p class="pProf text-center">Sapeur pompier volontaire<br>
                            SDIS(80)<br>
                            (arret du a un accident de travail hors service commandé)
                        </p>
                    </div>
                </div>
            </div>
            <div class="espace">
                <img  id="imgTraining"src="asset/img/imagePresentation/10390091.jpg" alt=""/>
                <!--espace entre les différentes catégorie-->
            </div>
            <div id="training">
                <div class="titleTraining col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h2 class="h1training">Mes formations professionnelles</h2>
                </div>
                <div class="trainingDark col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>Janvier-septembre 2020</h3>
                    <p>formation de Concepteur développeur d'Application <br>
                        Titre Professionnel Niveau bac +3/4 <br>
                        AFPA Amiens </p>
                </div>
                <div class="trainingBright col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>Mars-septembre2019 TITRE OBTENUE</h3>
                    <p>titre profestionnel de devellopeur web web mobile <br> la Manu niveau bac+2</p>
                </div>
                <div class="trainingDark col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>2018</h3>
                    <p>formation de sauveteur secouriste du travail</p>
                </div>
                <div class="trainingBright col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>avril-juillet 2017</h3>
                    <p>titre profestionnel de conducteur de voyageur inter hurbain niveau cap <br> titre obtenue</p>
                </div>
                <div class="row">
                    <div class="trainingDark col-sm-12 col-md-6 col-lg-6 border border-white">
                        <h3>2015</h3>
                        <p>certificat de qualification profestionnel<br> 
                            d'agent de prévention et de sécurité.<br>
                            Certificat obtenue</p>
                    </div>
                    <div class="trainingDark col-sm-12 col-md-6 col-lg-6 border border-white">
                        <h3>2015</h3>
                        <p>formatioin Service de Sécurité incendie <br> 
                            et assistance au personnes <br>
                            Certificat obtenue</p>
                    </div>
                </div>
                <div class="trainingBright col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>2013/2014</h3>
                    <p>formation d'aide médico-Psychologique <br>
                        (diplome non obtenu suite a un accident de travail)</p>
                </div>
                <div class="trainingDark col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>Mars 2005</h3>>
                    <p> certificat de Formation aux Activités <br> de Premier secours en Equipe <br>
                        Certificat obtenue</p>
                </div>
                <div class="trainingBrightButton col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h3>juillet 2005</h3>
                    <p>breuvet de jeune sapeur pompier SDIS80 <br>
                        Certificat obtenue <br>
                        (Service départemental d'incendie et de secours de la Sommes)
                </div>
            </div>


            <div class="espace"> <!--espace entre les différentes catégorie-->
                <img id="imgHobbies" src="asset/img/imagePresentation/example-of-cv-hobbies-450x295.png" alt=""/>
            </div>

            <div id="hobbies">
                <div class="row">
                    <div class=" col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h1 class="hobbisesTitle">  Mes passions, mes loisirs </h1>            
                    </div>
                </div>
                <div class="Hobbises row">
                    <div class=" hobbisesDark col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h2 >LA Moto</h2>
                        <img id="bike" src="asset/img/imagePresentation/moto.jpg" alt=""/>
                        <p class="Hobbises">
                            Je posséde le permis moto depuis maintetnant 12 ans, j'ai repris l'antenne  la Fédération Française des Motards en Colére de l'Aisne depuis le 14 janvier 2017, <br>,
                            j'ai travaillé sur la renaissance de cette antenne depuis le mois de juin 2016.<br>
                            j'ai été élu au conseil d'administration et j'ai été nommé Coordinateur de l'antenne en janvier 2017, depuis je gere l'antenne<br>
                            (management d'équipes,  organisation d'évenements motos, manifestations, repérages de points dangereux dans l'infrastructure routiére ...) 
                        </p>
                    </div>
                    <div class="hobbisesBrightRally col-sm-12 col-md-12 col-lg-12 border border-white">
                        <img  id="rally" src="asset/img/imagePresentation/En-remplacement-de-la-carte-voeux.png" alt=""/>
                        <h2 class="h2hobbises">Le rallye automobiles</h2>
                        <p class="pHobbises">
                            La passion que j'ai pour le Rally vient surement de mon pére qui a été pîlote dans les années 80 au volant d'une R5 turbo 2 rouge.<br>
                            Je ne suis pas pilote mais commissaire de cources internationals. Cette fonction est trés importante car sans nous tous les compétitions ne pouraient avoir lieu<br> 
                            En poste sur le bord de la route on assure la sécurité des pilotes et du public. On est les yeux et les oreilles des directeurs d'épreuves et du Poste de Commandement course.
                            <br> J'ai passée mon examen de commissaire en décembre 2017 ou j'ai terminé Major de promo avec 135 points sur 140 . <br>
                            En avril 2018 j'ai eu la  chance de participé comme Commissaire au Rallye  de Corces WRC . Une expeerience qui m'a appris enormément  sur la gestion du public.
                        </p>
                    </div>
                </div>
            </div>

            <!--                <div class="espace">
                                espace entre les différentes catégorie
                            </div>-->
            <div id="contact">
                <div class="row">
                    <div class="ontact col-sm-12 col-md-12 col-lg-12 border border-white">
                        <h1 class="titleContact">Pour me contacter</h1> 
                        <p>Vous pouvez utiliser le formulaire suivant  </p>
                    </div>
                    <div role="form" class="titlecontact col-sm-12 col-md-12 col-lg-12 border border-white my-5" style="clear: both">
                        <span class="text-primary" id="succesForm">Votre formulaire a été envoyer avec succées!!!!!!</span>
                        <span class="text-primary" id="succesFormp"><?= isset($mailMessage) ? $mailMessage : '' ?></span>                            
                        <form method="post" name="contactCompany" onsubmit="return test()" id="formContact" >
                            <div class="form-group">
                                <label for="firstname">votre nom</label><p class="text-warning">*</p>
                                <input type="text" class="form-control text-center"  id="firstname" name="firstname"  placeholder="votre nom">
                                <span class="text-warning" id="firstname1">Veuillez remplir votre nom</span>                            
                                <span class="text-warning" id="firstname2">Veuillez remplir votre avec des caracteres alphabétique !!!</span>
                                <span class="text-warning"  id="firstname3"><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Votre prénom</label><p class="text-warning">*</p>
                                <input type="text" class="form-control text-center"  id="lastname" name="lastname" placeholder="Votre prénom">
                                <span class="text-warning" id="lastname1">Veuillez remplir Votre prénom</span>                            
                                <span class="text-warning" id="lastname2">Veuillez remplir Prénom avec des caracteres alphabétique !!!</span>
                                <span class="text-warning"  id="lastname3"><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="email1">Email</label> <p class="text-warning">*</p>
                                <input type="text" class="form-control text-center" id="email" name="email"  placeholder="Email ">
                                <span id="email1" class="text-warning">Veuillez remplir le champs Email</span>
                                <span id="email1" class="text-warning"><?= isset($formError['email']) ? $formError['email'] : '' ?></span>

                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Téléphone<p class="text-warning">*</p></label>
                                <input type="tel" class="form-control text-center" id="phoneNumber"  name="phoneNumber" placeholder="Téléphone">
                                <span id="phoneNumber1" class="text-warning">Veuillez remplir le numéro de téléphone</span>
                                <span id="phoneNumber2" class="text-warning">Veuillez remplir le numéro de téléphone comme l'exemple->0322585956 ou 0655785400 merci</span>
                                <span id="phoneNumber36" class="text-warning"><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="topic">Votre sujet</label><p class="text-warning">*</p>
                                <input type="text" class="form-control text-center"  id="topic" name="topic" placeholder="Votre sujet">
                                <span class="text-warning" id="topic1">Veuillez remplir le sujet</span>                            
                                <span class="text-warning" id="topic2">Veuillez remplir le sujet avec des caracteres alphabétique !!!</span>
                                <span id="topic" class="text-warning"><?= isset($formError['topic']) ? $formError['topic'] : '' ?></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="text" >votre demande :</label>
                                <textarea class="form-control text-center" name="text" id="text" rows="12"></textarea>
                                <span id="topic" class="text-warning"><?= isset($formError['text']) ? $formError['text'] : '' ?></span>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Enregistrer" name="save" id="save" />
                            <input type="reset" class="btn btn-primary" value="Effacer" id="rase" />
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include ("../include/footer.php");
?>