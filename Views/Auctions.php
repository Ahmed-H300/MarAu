<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MarAu </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/Auctions.css" rel="stylesheet">
</head>
<?php
session_start();
include '../Models/Account.php';
if (!isset($_SESSION['Account'])) {
    header("Location: ../views/login");
} else $account = unserialize($_SESSION['Account']);
include "../Controller/Select_Auctions.php";

?>

<body onclick="myFunction()" class="dark">
    <?php include('nav.php') ?>
    <section>
        <div class="container py-4">
            <h1 class="h1 text-center" id="pageHeaderTitle">Auctions</h1>
            <?php
            for ($x = 0; $x < count($Auctions); $x += 2) {
                echo "<article class='postcard dark blue'>
                <a class='postcard__img_link' href='#'>
                <img class='postcard__img' src='../GamesImages/GameIcon" . $Auctions[$x]->GameId . "' alt='Image Title' />
                </a>
                <div class='postcard__text'>
                    <h1 class='postcard__title blue'><a href='#'>" . $Auctions[$x]->GameName . "</a></h1>
                    <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-calendar-alt mr-2'></i>" . date('d/M/Y h:i:s', strtotime($Auctions[$x]->StartDate)) . "
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>" . $Auctions[$x]->GameDescription . "</div>
                    <ul class='postcard__tagbox'>
                    <form method='POST' action='../Controller/addBid.php'>
                    <input type='text' class='form-controls' style='display:none;' name='AuctionId' value='" . $Auctions[$x]->AuctionId . "' ></input>
                    <input type='text' class='form-controls' style='display:none;' name='BuyerId' value='" . $account->ID . "' ></input>

                    <li class='tag__item'><i class='fas fa-clock mr-2'></i>Highest: " . $Auctions[$x]->HighestBidAmount . "</li>";
                if (!empty($Auctions[$x]->HighestBidBuyerUserName))
                    echo "<li class='tag__item'><i class='fas fa-clock mr-2'></i>Highest Bidder is " . $Auctions[$x]->HighestBidBuyerUserName . "</li>";
                if ($Auctions[$x]->Status == 1)
                    echo "<li class='tag__item'><i class='fas fa-clock mr-2'></i>Time Left: " . intval(((strtotime($Auctions[$x]->EndDate) - strtotime('now')) / 60)) . "  Minutes</li>";
                if ($Auctions[$x]->Status == 1 && $account->AccountType == "Buyer" && $account->ID != $Auctions[$x]->HighestBidBuyerId)
                    echo "<li class='tag__item'><input type='text' name='Amount' class='form-controls'  placeholder='Amount' ></input></li>
                    <li class='tag__item play blue'>
                    <button type='submit' style='background: none;
                    color: inherit;
                    border: none;
                    padding: 0;
                    font: inherit;
                    cursor: pointer;
                    outline: inherit;'><i class='fas fa-play mr-2'></i>Bid</button>
                    </li>";
                if ($Auctions[$x]->Status == -1 && isset($Auctions[$x]->HighestBidBuyerUserName) && $Auctions[$x]->HighestBidBuyerUserName == $account->Username)
                    echo "<li class='tag__item play yellow'>
                    <a href='../Controller/claimGame.php?id=" . $Auctions[$x]->AuctionId . "'><i class='fas fa-play mr-2'></i>Claim</a>
                    </li>";
                echo "</ul>
                </form>
                </div>
            </article>
            ";
                if (!empty($Auctions[$x + 1])) {
                    echo "<article class='postcard dark red'>
                <a class='postcard__img_link' href='#'>
                <img class='postcard__img' src='../GamesImages/GameIcon" . $Auctions[$x + 1]->GameId . "' alt='Image Title' />
                </a>
                <div class='postcard__text'>
                    <h1 class='postcard__title red'><a href='#'>" . $Auctions[$x + 1]->GameName . "</a></h1>
                    <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-calendar-alt mr-2'></i>" . date('d/M/Y h:i:s', strtotime($Auctions[$x + 1]->StartDate)) . "
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>" . $Auctions[$x + 1]->GameDescription . "</div>
                    <ul class='postcard__tagbox'>
                    <form method='POST' action='../Controller/addBid.php'>
                    <input type='text' class='form-controls' style='display:none;' name='AuctionId' value='" . $Auctions[$x + 1]->AuctionId . "' ></input>
                    <input type='text' class='form-controls' style='display:none;' name='BuyerId' value='" . $account->ID . "' ></input>

                    <li class='tag__item'><i class='fas fa-clock mr-2'></i>Highest: " . $Auctions[$x + 1]->HighestBidAmount . "</li>";
                    if (!empty($Auctions[$x + 1]->HighestBidBuyerUserName))
                        echo "<li class='tag__item'><i class='fas fa-clock mr-2'></i>Highest Bidder is " . $Auctions[$x + 1]->HighestBidBuyerUserName . "</li>";
                    if ($Auctions[$x + 1]->Status == 1)
                        echo "<li class='tag__item'><i class='fas fa-clock mr-2'></i>Time Left: " . intval(((strtotime($Auctions[$x + 1]->EndDate) - strtotime('now')) / 60)) . "  Minutes</li>";
                    if ($Auctions[$x + 1]->Status == 1 && $account->AccountType == "Buyer" && $account->ID != $Auctions[$x + 1]->HighestBidBuyerId)
                        echo "<li class='tag__item'><input type='text' name='Amount' class='form-controls'  placeholder='Amount' ></input></li>
                    <li class='tag__item play red'>
                    <button type='submit' style='background: none;
                    color: inherit;
                    border: none;
                    padding: 0;
                    font: inherit;
                    cursor: pointer;
                    outline: inherit;'><i class='fas fa-play mr-2'></i>Bid</button>
                    </li>";
                    if ($Auctions[$x + 1]->Status == -1 && isset($Auctions[$x + 1]->HighestBidBuyerUserName) && $Auctions[$x + 1]->HighestBidBuyerUserName == $account->Username)
                        echo "<li class='tag__item play yellow'>
                    <a href='../Controller/claimGame.php?id=" . $Auctions[$x + 1]->AuctionId . "'><i class='fas fa-play mr-2'></i>Claim</a>
                    </li>";
                    echo "</ul>
                </form>
                </div>
            </article>
            ";
                }
            }
            ?>


        </div>
    </section>

</body>
<script>
    // function myFunction() {
    //     var audio = new Audio("../audio/gangsta.mp3");
    // audio.play();
    // }
</script>
<script src="../js/nav.js"></script>