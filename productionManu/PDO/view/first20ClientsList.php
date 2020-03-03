<?php
require('../model/clients.php');
require('../controler/first20ClientsListCtrl.php');

        // linl vieu
        include ("../include/cssvieu.php");
        ?> 

        <title>Vue PDO-part1</title>
   
        <?php
        // navbar pour vieu
        include ("../include/navbar.php");
        ?>
        <div class="fond20first container-fluid">
  <div class="row">
        <div class="titre20first col-sm-12 col-md-12  border border-white text-center">
        <h1>Nos 20 premiers clients  </h1>
        </div>
      </div>
        <div class="row ">
            <div class="col-sm-12 col-md-4 col-lg-4"></div>
            <div  class="tableau20first col-sm-12 col-md-6 col-lg-5  ">
        <table>
            <thead class="titretable20first border border-white">
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Naissance</td>
                </tr>
            </thead>
            <tbody class="nom20first border border-white">
                <?php
                foreach ($list20FristClients as $display) {
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
            </div>
       
        <?php
        // script vieu
        include ("../include/script.php");
        ?> 
  