<?php
require('../model/show.php');
require('../controler/showListCtrl.php');
 // linl vieu
include ("../include/cssvieu.php");
?> 

        <title>Vue PDO-part1</title>
    
       <?php // navbar pour vieu
include ("../include/navbar.php");
?> 
       <div class="fondshow container-fluid">
  <div class="row">
        <div class="titreshow col-sm-12 col-md-12  border border-white text-center">
        <h1>Nos anciens  spectacles  </h1>
        </div>
      </div>
        <div class="row ">
            <div class="col-sm-12 col-md-3 col-lg- "></div>
            <div  class="tableaushow col-sm-12 col-md-6 col-lg-6  ">
        <table>
            <thead class="titretableshow border border-white text-center">
                <tr>
                    <td>Spectacles</td>
                    
                </tr>
            </thead>
             <tbody class="nomshow  border border-white text-center">
                <?php
                foreach ($showList as $display) {
                    ?>
                    <tr>
                        <td><?= $display->title ?> par <?= $display->performer ?>, le <?= $display->date ?> à <?= $display->startTime ?></td>
                       
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
  