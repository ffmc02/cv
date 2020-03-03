$(function () {
  // Déclaration des variables pour les articles
  // format fiche JSON
  w = 50;
  let loop = setInterval('intro()',24/1000);
  let fiche = [{
    // Articles de la Catégorie Aventure
    ref: 0,
    nom: 'Trek dans le Grand Canyon',
    imageSrc: 'assets/img/imgAdventure/image11.jpg',
    prixAdult: 1600,
    //prixChild: ,
    description: 'Plongez dans le poster, soyez terrassé par la taille du décor, émerveillé par les gorges et les mesas!\nSéjour de trois jours, un hébergement sous tente, dont une nuit au cœur de Canyonland, aux Needles.\nTous compris',
    category: 'Voyage Aventure'
  },
  {
    ref: 1,
    nom: 'Autotour Route 66, le grand rêve américain',
    imageSrc: 'assets/img/imgAdventure/image12.jpg',
    prixAdult: 3500,
    // prixChild: ,
    description: 'Traversée des Etats-Unis, de Chicago à Los Angeles. 8 états emblématiques dont le Texas, l\'Arizona & la Californie.\nSéjour de trois semaines, 1 Nuit dans un Motel mythique, La possibilité de réaliser l\'itinéraire en Harley Davidson',
    category: 'Voyage Aventure'
  },
  {
    ref: 2,
    nom: 'Trek dans le désert du Maroc',
    imageSrc: 'assets/img/imgAdventure/image13.jpg',
    prixAdult: 400,
    // prixChild: ,
    description: '4 jours à pied dans le désert, Les 3 nuits sous les étoiles en bivouac nomade, et 1 nuit au village de Mhamid en bivouac fixe confort.\nRandonnée sportive au rythme de l\'ombre des Tamaris (5h00 à 6h00 de marche par jour).',
    category: 'Voyage Aventure'
  },
  {
    ref: 3,
    nom: 'Maldives, d\'île en île',
    imageSrc: 'assets/img/imgAdventure/image14.jpg',
    prixAdult: 2400,
    // prixChild: ,
    description: 'Nager avec des centaines de poissons, Jouer à Robinson Crusoé sur des îles désertes, Dormir à la belle étoile sur le pont du bateau.\nSéjour de 9 jours.',
    category: 'Voyage Aventure'
  },
  {
    ref: 4,
    nom: 'Trek au royaume des glaces',
    imageSrc: 'assets/img/imgAdventure/image15.jpg',
    prixAdult: 2000,
    // prixChild: ,
    description: 'Vous installez votre camp sur l\'île de Qeqertarsuaq. Votre tente donne sur les baleines qui s\'offrent en spectacle.\nC\'est également l\'occasion de nombreuses randonnées pour découvrir les paysages de cette île volcanique: glaciers, pics enneigés, mais aussi lacs, plages et formations volcaniques',
    category: 'Voyage Aventure'
  },
  {
    ref: 5,
    nom: 'Circuit Safari Tembo',
    imageSrc: 'assets/img/imgAdventure/image16.jpg',
    prixAdult: 2900,
    // prixChild: ,
    description: 'Découverte de 3 sites classés à l\'UNESCO.\nHébergements situés au plus près de la migration des gnous et zèbres.\nVisite guidée de Stown Town et ses influences arabes et africaines.\nSéjour de 10 jours.',
    category: 'Voyage Aventure'

    // Articles de la Catégorie Noces
  },
  {
    ref: 6,
    nom: 'Pacha Trip',
    imageSrc: 'assets/img/imgHoneyMoon/article_IndianPalace.jpg',
    prixAdult: 3200,
    // prixChild: ,
    description: 'Votre voyage à deux commence ici. Plus de contraintes, bienvenue au paradis des amoureux et de la paresse !',
    category: 'Voyage Noces'
  },
  {
    ref: 7,
    nom: 'Montenegro Dreaming',
    imageSrc: 'assets/img/imgHoneyMoon/article_montenegroSauvage.jpg',
    prixAdult: 3290,
    // prixChild: ,
    description: 'Flirtez avec la vie sauvage au coeur du Montenegro, imaginez de superbes plages sauvages, de hautes montagnes enneigées se jetant dans les eaux cristallines de l’Adriatique, des fjords spectaculaires parmi les plus profonds d’Europe, à la croisée entre l’Orient et l’Occident. ',
    category: 'Voyage Noces'
  },
  {
    ref: 8,
    nom: 'Seuls au Monde',
    imageSrc: 'assets/img/imgHoneyMoon/article_seulsAuMonde.png',
    prixAdult: 4760,
    // prixChild: ,
    description: 'L’île aux trésors Southern Ocean Lodge, Kangaroo Island Située à 15 km au sud du continent, Kangaroo Island abrite des populations entières de kangourous, de koalas, de dauphins et d’otaries. Plus de la moitié de l’île n’a jamais été déboisée. Un tiers est classé en zone protégée, à l’image du parc de Seal Bay, où flemmardent 500 lions de mer. Des baies vitrées courant sur toute la façade du lodge, il n’est pas impossible d’apercevoir une baleine sans sortir de son lit!',
    category: 'Voyage Noces'
  },
  {
    ref: 9,
    nom: 'Le Paradis Beachcomber',
    imageSrc: 'assets/img/imgHoneyMoon/image24.png',
    prixAdult: 2500,
    // prixChild: ,
    description: 'Le meilleur hôtel de loisirs à l’île Maurice !\nPour un séjour dynamique, combinant sports, loisirs et golf à l’île Maurice, le Paradis Beachcomber Golf Resort & Spa est l’hôtel 5 étoiles qu’il vous faut',
    category: 'Voyage Noces'
  },
  {
    ref: 10,
    nom: 'Mariage dans le Sud',
    imageSrc: 'assets/img/imgHoneyMoon/image25.jpg',
    prixAdult: 1800,
    // prixChild: ,
    description: 'C\’est aujourd’hui le jour tant attendu : celui de votre mariage !\nDu « Veux-tu m’épouser ? » au « Oui, je le veux. », nous veillons à ce que ce soit rempli de féérie pour vous offrir un mariage dans le Sud encore plus grandiose que celui dont vous avez toujours rêvé.',
    category: 'Voyage Noces'
  },
  {
    ref: 11,
    nom: 'Croisière aux Bahamas',
    imageSrc: 'assets/img/imgHoneyMoon/image26.jpg',
    prixAdult: 2400,
    // prixChild: ,
    description: 'Envie de partir en croisière pour commencer l’année en beauté ? Laissez-vous tenter par une croisière exceptionnelle en Atlantique à la découverte de Bahamas. Véritable coin de paradis, cette destination peut vous garantir farniente et dépaysement sous un climat ensoleillé.',
    category: 'Voyage Noces'
  },
  {
    ref: 12,
    nom: 'Africa In',
    imageSrc: 'assets/img/imgFamily/article_africaTrip.jpg',
    prixAdult: 3190,
    // prixChild: ,
    description: 'Safari à volonté dans le grandiose parc Masai Mara et sa magnifique vue sur le Kilimandjaro. Après cette parenthèse spectaculaire, partez vous reposer sur les plages de Diani Beach, à l\'ombre des cocotiers.',
    category: 'Voyage Familiale'
  },
  {
    ref: 13,
    nom: 'China Oh',
    imageSrc: 'assets/img/imgFamily/article_merveilleDeChine.jpg',
    prixAdult: 2700,
    // prixChild: ,
    description: 'Un voyage inoubliable! visitez la Grande Muraille impériale à Pékin, découvrez les magnifiques Guerriers en Terre Cuite à Xian, partez à la rencontre des adorables Pandas et profitez d\'une croisière idyllique sur la rivière Li à Guilin',
    category: 'Voyage Familiale'
  },
  {
    ref: 14,
    nom: 'Le Grand Saut',
    imageSrc: 'assets/img/imgFamily/article_ParcAttractions.jpg',
    prixAdult: 1800,
    // prixChild: ,
    description: 'Le parc de loisirs Europa-Park mérite de passer la frontière ! Sur 95 hectares, ce parc d\'attractions a pour thème les pays européens, qu\'il décline à travers 14 quartiers. En les traversant, découvrez l\'architecture, les traditions culturelles et gastronomiques de 14 pays européens, et même certains paysages. Plus de 100 attractions et spectacles vous attendent!',
    category: 'Voyage Familiale'
  },
  {
    ref: 15,
    nom: 'Hôtel La Baia',
    imageSrc: 'assets/img/imgFamily/image34.jpg',
    prixAdult: 900,
    // prixChild: ,
    description: '3 bonnes raisons de nous rendre visite :\nLa mer à quelques pas, On rejoint la plage les pieds nus !\nL\'île de Jack Surf, Un terrain de jeu coloré où laisser libre cours à l\'imagination et Le restaurant des enfants, notre espace où les enfants mangent librement avec les nounous',
    category: 'Voyage Familiale'
  },
  {
    ref: 16,
    nom: 'Algarve, Portugal : les splendeurs du sud',
    imageSrc: 'assets/img/imgFamily/image35.jpg',
    prixAdult: 2000,
    // prixChild: ,
    description: 'Falaises ocre contrastant avec le turquoise de la mer. Chapelet de plages dorées et de criques isolées. Arrière-pays fait de villages historiques. Bienvenue en Algarve, la région la plus ensoleillée du Portugal. Des circuits accompagnés aux séjours de golf, Transat vous offre une panoplie d’options de voyage en Algarve.  ',
    category: 'Voyage Familiale'
  },
  {
    ref: 17,
    nom: 'La Bastiane',
    imageSrc: 'assets/img/imgFamily/image36.jpg',
    prixAdult: 600,
    // prixChild: ,
    description: 'Situé à côté de Fréjus, le camping 5* La Bastiane vous accueille au cœur d’une nature préservée pour des vacances en Provence. A deux pas des plages du littoral méditerranéen, des villages typiques du pays varois, vous découvrirez les richesses de la Côte d’Azur et apprécierez la quiétude de notre coin de paradis, entre Cannes et Saint Tropez',
    category: 'Voyage Familiale'
  },
  {
    ref: 18,
    nom: 'Be Zen',
    imageSrc: 'assets/img/imgSolo/article_indianZen.jpg',
    prixAdult: 3400,
    // prixChild: ,
    description: 'L’Inde est le berceau du yoga, l\’endroit où tout a commencé.Un paradis tropical où vous pourrez vous régénérer entre plages, jungle et rivières.',
    category: 'Voyage en Solitaire'
  },
  {
    ref: 19,
    nom: 'Islande Mon Amour',
    imageSrc: 'assets/img/imgSolo/article_islandeSolitaire.jpg',
    prixAdult: 4900,
    // prixChild: ,
    description: 'Des lumières, des paysages spectaculaires et changeants, une nature capricieuse...L\'Islande vous en fait voir de toutes les couleurs et charme à coup sûr.',
    category: 'Voyage en Solitaire'
  },
  {
    ref: 20,
    nom: 'Blue Lagoon',
    imageSrc: 'assets/img/imgSolo/article_tropical.jpg',
    prixAdult: 3500,
    // prixChild: ,
    description: 'D\'île en île, évadez-vous pour un séjour tout compris aux Bahamas, paysages des plus belles romances. Petit coin de paradis entre la Floride et Cuba, l’archipel fait succomber les amoureux des fonds marins. Dans les îles Berry, après avoir lézardé au soleil, plongez au large de Mamma Rhoda Rock. Une cinquantaine d’espèces de poissons exotiques trouvent refuge dans ce récif peu profond. Poursuivez ces instants idylliques sur la Gold Rock Beach.',
    category: 'Voyage en Solitaire'
  },
  {
    ref: 21,
    nom: 'Mont Saint-Michel',
    imageSrc: 'assets/img/imgSolo/image44.jpg',
    prixAdult: 800,
    // prixChild: ,
    description: 'Découvrez pourquoi le pays est si fascinant, à tous les niveaux. Sa riche histoire vous invite à vous promener dans de majestueux châteaux, à visiter des monuments reconnus à travers le monde et à découvrir d’illustres oeuvres d’art.',
    category: 'Voyage en Solitaire'
  },
  {
    ref: 22,
    nom: 'Les Highlands d\'Ecosse',
    imageSrc: 'assets/img/imgSolo/image45.jpg',
    prixAdult: 1000,
    // prixChild: ,
    description: 'Des Highlands aux Lowlands, faites un voyage en Écosse; voyez ses lacs, sa variété de paysages et sa capitale. Des scènes artistiques et muséale vibrante et sa délicieuse cuisine',
    category: 'Voyage en Solitaire'
  },
  {
    ref: 23,
    nom: 'Cancun Resort and Spa',
    imageSrc: 'assets/img/imgSolo/image46.jpg',
    prixAdult: 600,
    // prixChild: ,
    description: 'Vivez votre passion sous le soleil !\nEnvie d\’affronter les vagues lors de vos prochaines vacances ? On vous propose plusieurs hôtels à proximité des sites de surf les plus exaltants.',
    category: 'Voyage en Solitaire'
  }]

  let categoryArray = ['Voyage Aventure', 'Voyage Noces', 'Voyage Familiale', 'Voyage en Solitaire'];
  // Affichage des valeurs des variables
  // dans les articles de chaque catégorie
  for (let i = 1; i < 5; i++) {
    let k = 0;
    for (let j = 0; j < fiche.length; j++) {
      if (categoryArray[i - 1] == fiche[j].category && k < 7) {
        k++;
        $('#nomArticle' + i + k).html(fiche[j].nom);
        $('#pic' + i + k).attr('src', fiche[j].imageSrc);
        $('#refArticle' + i + k).html(fiche[j].ref);
        $('#prixAdultArticle' + i + k).html(fiche[j].prixAdult + '€');
        $('#prixChildArticle' + i + k).html(fiche[j].prixChild);
        $('#descriptionArticle' + i + k).html(fiche[j].description);
        $('#buttonPanier' + i + k).val(fiche[j].ref);
        $('#pic' + i + k).mousedown(function () {
          getInfoModal(fiche[j].ref);
        })
      }
    }
  }

  // Gestion des apparitions et disparitions des catégories
  // sur un événement 'click'
  $('#navHome').click(function () {
    $('#home').fadeIn(800);
    $('#category1').fadeOut(800);
    $('#category2').fadeOut(800);
    $('#category3').fadeOut(800);
    $('#category4').fadeOut(800);
    $('#title').html('Wonder Box');
  })
  $('#navCategory1, #cat1').click(function () {
    $('#home').fadeOut(800);
    $('#category1').fadeIn(800);
    $('#category2').fadeOut(800);
    $('#category3').fadeOut(800);
    $('#category4').fadeOut(800);
    $('#title').html('Voyage Aventure');
  });
  $('#navCategory2, #cat2').click(function () {
    $('#home').fadeOut(800);
    $('#category1').fadeOut(800);
    $('#category2').fadeIn(800);
    $('#category3').fadeOut(800);
    $('#category4').fadeOut(800);
    $('#title').html('Voyage de Noces');
  });
  $('#navCategory3, #cat3').click(function () {
    $('#home').fadeOut(800);
    $('#category1').fadeOut(800);
    $('#category2').fadeOut(800);
    $('#category3').fadeIn(800);
    $('#category4').fadeOut(800);
    $('#title').html('Voyage Familial');
  });
  $('#navCategory4, #cat4').click(function () {
    $('#home').fadeOut(800);
    $('#category1').fadeOut(800);
    $('#category2').fadeOut(800);
    $('#category3').fadeOut(800);
    $('#category4').fadeIn(800);
    $('#title').html('Voyage en Solitaire');
  });

  // Affichage des Modals
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  });

  // Gestion du panier
  let panier = new Array();
  $('.buttonPanier').click(function () {
    let countArticle = 0;
    let totalht = 0;
    let totalttc = 0
    let prov = $(this).val();
    let doublon = false;

    // Vérification si doublon dans les articles choisis
    for (let i = 0; i < panier.length; i++) {
      if (panier[i].ref == prov) {
        console.log(panier[i].nbreArticle);
        panier[i].nbreArticle++;
        doublon = true;
      }
    }
    if (doublon == false) {
      panier.push({
        ref: $(this).val(),
        nbreArticle: 1
      });
      console.log('doublon');
    }

    // Affichage des articles dans le modal Panier
    $('#panierAfficher').html("");
    for (let i = 0; i < panier.length; i++) {
      $('#panierAfficher').append('<tr><td>' + fiche[panier[i].ref].nom + '</td><td>' + fiche[panier[i].ref].prixAdult  + '€' + '</td><td>' + panier[i].nbreArticle + '</td><td>' + fiche[panier[i].ref].prixAdult * panier[i].nbreArticle + '€' + '</td></tr>');
      totalht += fiche[panier[i].ref].prixAdult * panier[i].nbreArticle
      countArticle += panier[i].nbreArticle
      //console.log( 'article' + i +' : '+ fiche[i].nom + 'prix : ' + fiche[i].prixAdult + ' total : ' + fiche[panier[i].ref].prixAdult * panier[i].nbreArticle )
      //alert('votre ajout a étais effectuer au panier')//teste
    }
    totalttc = totalht+((totalht * 20) / 100);
    tva = totalttc - totalht
    //total
    // affiche  le nombre d'article
    $('#nombredarticle').html(countArticle)
    //afiche le totalht
    $('#totalht').html(totalht + '€')

    //affiche la tva
    $('#tva').html(tva + '€')
    //affiche le totalttc
    $('#totalttc').html(totalttc + '€')
  });

  // Affichage Informations Articles Modal
  getInfoModal = function (_ref) {
    $('#NrefArticle').html(_ref);
    $('#Ndescription').html(fiche[_ref].description);
    $('#NnomArticle').html(fiche[_ref].nom);
    $('#Npic').attr('src', fiche[_ref].imageSrc);
    $('#NprixAdultArticle').html(fiche[_ref].prixAdult + '€');
  };

  // Introduction Rideaux
  intro = function (){
    w-=0.1;
    if (w<=0) {
      clearInterval(loop);
      $('#rideauG').html("");
      $('#rideauD').html("");
      $('#rideauG').css('width', 0);
      $('#rideauD').css('width', 0);

    }
    $('#rideauG').css('left',(w-50)+'%');
    $('#rideauD').css('left',(100-w)+'%');
  }
});
