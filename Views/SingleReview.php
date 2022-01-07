<div class="container py-4">
         <!-- <h1 class="h1 text-center" id="pageHeaderTitle">Game Review</h1> -->
         <article class="postcard dark green">
            <div class="postcard__text">
               <h1 class="postcard__title green"><a href="#">Review For <?= $review->Name ?></a></h1>
               <div class="postcard__subtitle small">
               </div>
               <div class="postcard__bar"></div>
               <!-- Here is Game Discrpition -->
               <h1 class="postcard__title green"><a href="#"><?= $review->BuyerUserName ?></a></h1>
               <div class="postcard__preview-txt"><?= $review->Text ?></div>
               <div class="postcard__bar"></div>

               <ul class="postcard__tagbox">
                  <li class="tag__item"><i class="fas fa-tag mr-2"></i><?= $review->Rating ?></li>
               </ul>
            </div>
         </article>
      </div>