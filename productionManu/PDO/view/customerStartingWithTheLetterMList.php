<?php
require('../model/clients.php');
require('../controler/customerStartingWithTheLetterMListCtrl.php');
// linl vieu
include ("../include/cssvieu.php");
?> 

        <title>Vue PDO-part1</title>
    
     <?php // navbar pour vieu
include ("../include/navbar.php");
?>  
          <div class="fondclientm container-fluid">
  <div class="row">
        <div class="titreclientm col-sm-12 col-md-12  border border-white">
        <h1>Nos clients dont le noms de famille commence par <br> la Lettre M </h1>
        </div>
      </div>
        <div class="row ">
            <div class="col-sm-12 col-md-5 col-lg-5"></div>
            <div  class="tableauclientm col-sm-12 col-md-3 col-lg-3 border border-white">
                <table class="titretableclientM">
            <thead>
                <tr>
                    
                    <td>Nom</td>
                    <td>Prénom</td>
                    
                </tr>
            </thead>
            
            <tbody class="nomclientm">
                <?php
                foreach ($customerStartingWithTheLetterMList as $display) {
                    ?>
                    <tr>
                        
                        <td><?= $display->lastName ?></td>
                        <td><?= $display->firstName ?></td>
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
  
