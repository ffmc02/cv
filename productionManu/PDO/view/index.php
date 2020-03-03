     <?php // navbar pour vieu
include ("../include/navbar.php");
?> 
        <title>Salle de spectacle colyseul</title>

    <?php // linl vieu
include ("../include/cssvieu.php");
?> 

        <div class="fondindex">
        <div class="container-fluid">
            <!-- 3 colones  -->
            <div class="row">
                <div class="bienvenuindex col-sm-12 col-md-12 col-lg-12 border border-white">
                    <h1 class="titre1index">bienvenue à la <br> 
                        salle de spectacle du colyséum </h1>
                </div>
            </div> 
              <div class="difspectacleindex row">
                <div class="difspectacleindex col-sm-12 col-md-4 col-lg-4 border border-white">
                    <h2 class="proposecpindex">Nous vous proposons différents spéctacle :</h2> 
            <ul>
                <li>   
                    du théatre </li>
                <li> des concerts </li>
                <li>  de la dance </li>
                <li>  des spectacle d'humour </li>
            </ul>
</div>                  
           <!--fin div difspectacleindex-->
                <div class="artisteindex col-sm-12 col-md-4 col-lg-4 border border-white">
                    <h3>Nos différents ariste </h3> 
                    <ul>
                        <li>Boone</li>
                        <li>Butler</li>
                        <li>Juarez</li>
                    </ul>
                    <p> Et bien d'autre se produise régulierement dans notre sale pour savoir les prochaine date c'est par <a class="ici" href="showList.php">ICI</a></p>
            </div> 
           <div class="dateindex col-sm-12 col-md-4 col-lg-4 border border-white">
               <h4>Nos Prochaine date de spectacle</h4>
               <p>dans les prochains mois vous pourrez retrouver tout les artistes cité <a class="ici" href="showList.php">ICI</a></p>
           </div>
            </div>
            
        </div> <!-- div contenaire-fluid-->
          </div> <!-- class fond index-->
      <?php // script vieu
include ("../include/script.php");
?> 
