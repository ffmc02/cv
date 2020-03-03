<?php
//require('../model/showtypes.php');
//require('../controler/showtypesListCtrl.php');
// linl vieu
include ("../include/cssvieu.php");
?> 
        <title>exercice2</title>
   
      <?php // navbar pour vieu
include ("../include/navbar.php");
?> 
              <div class="fondtypeschow container-fluid">
  <div class="row">
        <div class="titretypeschow col-sm-12 col-md-12  border border-white text-center">
        <h1>Nos differtent type de spectacle dans la salle du Coliséum  </h1>
        </div>
      </div>
        <div class="row ">
            <div class="col-sm-12 col-md-4 col-lg-4"></div>
            <div  class="tableautypeschow col-sm-12 col-md-4 col-lg-4  ">
        <table>
            <thead class="titretabletypeschow border border-white">
                <tr>
                    <td>ID</td>
                    <td>type</td>
                </tr>
            </thead>
            <tbody class="nomtypeschow border border-white">
                <?php
                foreach ($listShowtypes as $display) 
                    //a chaque ligne de mon tableau je fait une boucle
                    {
                    ?>
                    <tr>
                        <td><?= $display->id ?></td>
                        <td><?= $display->type ?></td>
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
  