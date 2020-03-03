
</head>
<body>
    <header>
        <!--             <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">page d'accueil <span class="sr-only">(current)</span></a>
                                    </li>
                                </ul> 
                                <div>
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown text-center ">
                                            <button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            Nos différents sortes de spectacle
                                            </button>                         
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#" >-->
        <?php
// navbar pour vieu
        // include ("../view/showtypeslist2.php");
        ?> 
        <!--                                      </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="titrenavbar">
                                    <ul class="navbar-nav ">
                                        <li id="titrenavbar" class="nav-item active nav-link ">
                                            salle de spectacle du Colyseum 
                                        </li>
                                    </ul> </div>
                                <div>
                                    
                                </div>
                                <div>
                                  <ul class="navbar-nav">
                                        <li class="nav-item dropdown text-center ">
                                            <button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                Nos  clients
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="../view/index.php" >accueil</a>
                                                <a class="dropdown-item" href="../view/clientslist.php"> liste des clients </a>
                                                <a class="dropdown-item" href="../view/customerStartingWithTheLetterMList.php" >Client commencant par M</a>
                                                <a class="dropdown-item" href="../view/customersWithLoyaltyCardList.php">liste des clients avec carte de fidélité</a>
                                                <a class="dropdown-item" href="../view/first20ClientsList.php" >les 20 premuers clients </a>
                                                <a class="dropdown-item" href="../view/clientsFidelitylist.php" >liste des clients avec ou sans carte de fidélité </a>
                                                 <a class="dropdown-item" href="../view/showList.php" >liste des spectacles </a> 
                                               </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
            <a class="navbar-brand" href="../view/index.php">accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nos differents spectacle</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" >   
                            <?php
// navbar pour vieu
                            include ("showtypeslist2.php");
                            ?> 
                        </a>
                    </div>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        salle de spectacle du Colyseum 
                    </li>
                </ul>
                  <div class="justify-content-center">
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nos clients</a>
                        <div class="dropdown-menu dropdown-menu-left ">
                            <a class="dropdown-item" href="../view/index.php" >accueil</a>
                            <a class="dropdown-item" href="../view/clientslist.php"> liste des clients </a>
                            <a class="dropdown-item" href="../view/customerStartingWithTheLetterMList.php" >Client commencant par M</a>
                            <a class="dropdown-item" href="../view/customersWithLoyaltyCardList.php">liste des clients avec carte de fidélité</a>
                            <a class="dropdown-item" href="../view/first20ClientsList.php" >les 20 premuers clients </a>
                            <a class="dropdown-item" href="../view/clientsFidelitylist.php" >liste des clients avec ou sans carte de fidélité </a>
                            <div class="dropdown-divider">Les differents spectacles</div>
                            <a class="dropdown-item" href="../view/showList.php" >liste des spectacles </a> 
                        </div>
                    </li>
                </ul>
                 </div>
            </div>
        </nav>
    </header>
