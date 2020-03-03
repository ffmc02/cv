<?php
require('../model/clients.php');
require('../controler/customersWithLoyaltyCardListCtrl.php');
     
             // linl vieu
include ("../include/cssvieu.php");
?> 

        <title>Vue PDO-part1</title>
   
       <?php // navbar pour vieu
include ("../include/navbar.php");
?> 
        <div class="fondautreclient container-fluid">
  <div class="row">
        <div class="titreclient2 col-sm-12 col-md-12  border border-white text-center">
        <h1>Nos clients bénéficiant d'avantage grace <br> à leur carte de fidélité </h1>
        </div>
      </div>
        <div class="row ">
            <div class="col-sm-12 col-md-5 col-lg-5"></div>
            <div  class="tableauclient2 col-sm-12 col-md-2 col-lg-2  ">
        <table>
            <thead class="titretableautre border border-white">
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    
                </tr>
            </thead>
            <tbody class="nomclientautre border border-white">
                <?php
                foreach ($customersWithLoyaltyCard as $display) {
                    ?>
                    <tr>
                        <td><?= $display->id ?></td>
                        <td><?= $display->lastName ?></td>
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
    
