<?php
    if(isset($_GET['id']) == false){
        header("Location: ../views/Not_Found.php");
    }
    else
    {
        require "../Controller/getGame.php";
        if(isset($game) == false)
        {
            header("Location: ../views/Not_Found.php");
        }
    }
?>
<!DOCTYPE html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>MarAu </title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/Auctions.css" rel="stylesheet">
</head>
<body class="dark">
   <section class="dark">
      <div class="container py-4">
         <h1 class="h1 text-center" id="pageHeaderTitle">Game Details</h1>
   <article class="postcard dark green">
      <a class="postcard__img_link" href="#">
         <img class="postcard__img" src="<?= '../GamesImages/GameIcon'. $game->GameId .'.jpg'?>" alt="Image Title" />
      </a>
      <div class="postcard__text">
         <h1 class="postcard__title green"><a href="#"><?= $game->Name ?></a></h1>
         <div class="postcard__subtitle small">
            <!-- Here Is Start Date -->
            <time datetime="2020-05-25 12:00:00">
               <i class="fas fa-calendar-alt mr-2"></i><?= $game->ReleaseDate ?>
            </time>
         </div>
         <div class="postcard__bar"></div>
         <!-- Here is Game Discrpition -->
         <h1 class="postcard__title green"><a href="#">Game Description</a></h1>
         <div class="postcard__preview-txt"><?= $game->Description ?></div>
         <div class="postcard__bar"></div>
         
         <!-- Here is Game Requirements -->
         <h1 class="postcard__title green"><a href="#">Game Requirements</a></h1>
         <h6>Operating System: <strong><em><?= $game->OperatingSystem ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Minimum CPU: <strong><em><?= $game->MinimumCPU ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Recommended CPU: <strong><em><?= $game->RecommendedCPU ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Minimum GPU: <strong><em><?= $game->MinimumGPU ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Recommended GPU: <strong><em><?= $game->RecommendedGPU ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Minimum Ram: <strong><em><?= $game->MinimumRam ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Recommended Ram: <strong><em><?= $game->RecommendedRam ?? 'Runs on Any PC' ?></em></strong> </h6>
         <h6>Storage: <strong><em><?= $game->Storage ?? 'Runs on Any PC' ?></em></strong> </h6>

         <div class="postcard__bar"></div>
         <!-- Here is Seller Info -->
         <!-- Href to seller page -->
         <h4 class="postcard__title green"><?php echo("<a href='../Views/Seller_Page?id=$game->SellerId'");  ?>>Seller is <?= $game->SellerName ?></a></h4>
        
         <ul class="postcard__tagbox">
            <li class="tag__item"><i class="fas fa-tag mr-2"></i><?= $game->Type ?></li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Rating: <?= $game->Rating ?? '0'?> Stars</li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>First Owener: <?= $game->FirstOwner ?? 'Not Yet, May be it is you !'?></li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Price: <?= $game->Price ?></li>
            <li class="tag__item play green">
               <!-- Href to buy it -->
               <a href="#"><i class="fas fa-play mr-2"></i>Buy Now!</a>
            </li>
         </ul>
      </div>
   </article>
   </div>
   </section>
   
</body>
<script src='../js/bootstrap.min.js'></script>
</html>