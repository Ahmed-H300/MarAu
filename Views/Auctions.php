<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MarAu </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/Auctions.css" rel="stylesheet">
</head>
<?php  include ('nav.php') ?>
<body onclick="myFunction()">
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center" id="pageHeaderTitle" >Auctions</h1>
            <?php
            session_start();
            $_SESSION['Games'] = [['Name' => 'Red Dead Redemption 3'], ['Name' => 'GTA VI'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy'], ['Name' => 'GTA The Trialogy']];
            $Games = $_SESSION['Games'];
            for ($x = 0; $x < count($Games); $x += 2) {
                echo "<article class='postcard dark blue'>
			<a class='postcard__img_link' href='#'>
				<img class='postcard__img' src='https://picsum.photos/1000/1000' alt='Image Title' />
			</a>
			<div class='postcard__text'>
				<h1 class='postcard__title blue'><a href='#'>" . $Games[$x]['Name'] . "</a></h1>
				<div class='postcard__subtitle small'>
					<time datetime='2020-05-25 12:00:00'>
						<i class='fas fa-calendar-alt mr-2'></i>Mon, May 25th 2020
					</time>
				</div>
				<div class='postcard__bar'></div>
				<div class='postcard__preview-txt'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                <ul class='postcard__tagbox'>
					
					<li class='tag__item'><i class='fas fa-clock mr-2'></i>Time Left: 55 mins.</li>
					<li class='tag__item'><input type='text' class='form-controls' id='bid' placeholder='Amount' ></input></li>
                    <li class='tag__item play blue'>
						<a href='#'><i class='fas fa-play mr-2'></i>Bid</a>
					</li>
				</ul>
			</div>
		</article>";
                if (!empty($Games[$x + 1])) {
                    echo "<article class='postcard dark red'>
                <a class='postcard__img_link' href='#'>
                    <img class='postcard__img' src='https://picsum.photos/501/500' alt='Image Title' />	
                </a>
                <div class='postcard__text'>
                    <h1 class='postcard__title red'><a href='#'>" . $Games[$x + 1]['Name'] . "</a></h1>
                    <div class='postcard__subtitle small'>
                        <time datetime='2020-05-25 12:00:00'>
                            <i class='fas fa-calendar-alt mr-2'></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class='postcard__bar'></div>
                    <div class='postcard__preview-txt'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                    <ul class='postcard__tagbox'>
                    <li class='tag__item'><i class='fas fa-clock mr-2'></i>Time Left: 55 mins.</li>
                    <li class='tag__item'><input type='text' class='form-controls' id='bid' placeholder='Amount' ></input></li>
                        <li class='tag__item play red'>
                            <a href='#'><i class='fas fa-play mr-2'></i>Bid</a>
                        </li>
                    </ul>
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
function myFunction() {
    var audio = new Audio("../audio/gangsta.mp3");
audio.play();
}
</script>
<script src="../js/nav.js"></script>

</html>