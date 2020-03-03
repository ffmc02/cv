<?php
require('../model/clients.php');
require('../controler/clientsFidelitylistCtrl.php');
      
   
// linl vieu
include ("../include/cssvieu.php");
?> 


        <title>Vue PDO-part1</title>
    
     <?php // navbar pour vieu
include ("../include/navbar.php");
?> 
        <div class="fondclientFidelitylist container-fluid">
  <div class="row">
        <div class="titrepossetion col-sm-12 col-md-12  border border-white">
        <h1>Les clients qui possédent l'avantage fidélité</h1>
        </div>
      </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4"></div>
            <div  class="tableauclientFidelitylist col-sm-12 col-md-5 col-lg-5 border border-white text-center">
        <table>
            <thead class="titretableclientfidelityliste">>
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Naissance</td>
                    <td>carte de fidélité possédé</td>
                    <td>numéros de carte</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clientsFidelityList as $display) {
                    ?>
             
                    <tr>
                        <td><?= $display->firstName ?></td>
                        <td><?= $display->lastName ?></td>
                        <td><?= $display->date ?></td>
                        <td><?= $display->carte  ?></td>
                        <td><?= $display->carte == 'OUI' ? $display-> cardNumber : ''  ;?>
                        </td>  
                    </tr> 
                    <?php
                }
                ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>

 <?php // script vieu
include ("../include/script.php");
?> 
 
