<?php
require('../model/clients.php');
require('../controler/clientsListCtrl.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />        
        <?php
        // linl vieu
        include ("../include/cssvieu.php");
        ?> 
        <title>Vue PDO-part1</title>
    </head>
    <body>
        <?php
        // navbar pour vieu
        include ("../include/navbar.php");
        ?> 
        <div class="fondclientlist container-fluid">
            <div class="row">
                 <div class="col-sm-12 col-md-3 col-lg-3"></div>
                <div class="titreclientlist col-sm-12 col-md-6 col-lg-6 border border-white">
                    <h1>Nos fidéles clients avec leur date de naissance</h1>
                    <p> si vous voulez les rejoindre renseignez vous a l'acceuilde la salle de concert </p>
                </div>
            </div>
            <div class="row text-center">
              <div class="col-sm-12 col-md-4 col-lg-4 "></div>            
                <div class="tableclientlist col-sm-12 col-md-4 col-lg-4 border border-white text-center">
                    <table>
                        <thead class="titretableclientliste">
                            <tr>
                                <td>ID</td>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Naissance</td>
                            </tr>
                        </thead>
                        <tbody class="nomclientlist">
                            <?php
                            foreach ($listClients as $display) {
                                ?>
                                <tr>
                                    <td><?= $display->id ?></td>
                                    <td><?= $display->firstName ?></td>
                                    <td><?= $display->lastName ?></td>
                                    <td><?= $display->date ?></td>
                                </tr>     
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- dernier div (div fluid contenaire-->
        </div>
        <?php
        // script vieu
        include ("../include/script.php");
        ?> 
    </body>
</html>
