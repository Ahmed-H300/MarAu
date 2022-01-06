<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="../css/stat.css">
    <title>MarAu </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Views/Home.php"><img src='../img//Home/super-logo.png' width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['Account'])) {

                            echo ("
            <a class='nav-link' href='../Controller/logout.php'>Sign out</a>
            ");
                            //$nav->link("logout", "logoff.php");


                        } else {

                            echo ("
            <a class='nav-link' href='../Views/login.php'>Sign in</a>
            ");
                            //$nav->link("logout", "logoff.php");
                        }


                        ?>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Views/Account.php">MY Profile</a>
                    </li>
                    <li class="nav-item">
                        <?php

                        if (isset($_SESSION['Account'])) {
                            if (unserialize($_SESSION['Account'])->AccountType == 'Buyer') {
                                echo ("
            <a class='nav-link' href='../Views/My_Games'>MY Games</a>
            ");
                            } else if (unserialize($_SESSION['Account'])->AccountType == 'Seller') {
                                echo ("
              <a class='nav-link' href='../Views/My_Games_Seller'>MY Games</a>
              ");
                            }
                        } else {
                            echo ("
            <a class='nav-link' href='../Views/Home.php'>Home</a>
            ");
                        }
                        ?>
                    </li>

                    <?php

                    if (isset($_SESSION['Account'])) {
                        if (unserialize($_SESSION['Account'])->AccountType == 'Seller') {
                            echo ("<li>
              <a class='nav-link' href='../Views/Add_Game'>Add Game</a>
              </li>
              ");
                        }
                    }



                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="../Views/Auctions">Auctions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Views/Contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- welcome text -->
    <div class="title-stat"> Statistics</div>
    <div id="chart-container" class="container mb-5" style='width:800px'>
        <div>
            <canvas id="graphCanvas0">Stat</canvas>
        </div>
    </div>
    <div id="chart-container" class="container mb-5">
        <div class="row">
            <div class="offset-1 col-sm-5" style='width:500px'>
                <canvas id="graphCanvas1">Stat</canvas>
            </div>
            <div class="offset-1 col-sm-5" style='width:500px'>
                <canvas id="graphCanvas2">Stat</canvas>
            </div>
            <div></div>
        </div>
    </div>
    <div id="chart-container" class="container mb-5">
        <div class="row">
            <div class="offset-1 col-sm-5" style='width:500px'>
                <canvas id="graphCanvas3">Stat</canvas>
            </div>
            <div class="offset-1 col-sm-5" style='width:500px'>
                <canvas id="graphCanvas4">Stat</canvas>
            </div>
            <div></div>
        </div>
    </div>


</body>
<script src='../js/bootstrap.min.js'></script>
<script src="../js/nav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function() {
        showGraph0();
        showGraph1();
        showGraph2();
        showGraph3();
        // showGraph4(); -> Active
        showGraph4();
    });
    const COLORS = [
        '#4dc9f6',
        '#f67019',
        '#f53794',
        '#537bc4',
        '#acc236',
        '#166a8f',
        '#00a950',
        '#58595b',
        '#8549ba'
    ];
    const CHART_COLORS = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(201, 203, 207)'
    };
    const NAMED_COLORS = [
        CHART_COLORS.red,
        CHART_COLORS.orange,
        CHART_COLORS.yellow,
        CHART_COLORS.green,
        CHART_COLORS.blue,
        CHART_COLORS.purple,
        CHART_COLORS.grey,
    ];

    function showGraph0() {
        {
            $.post("../controller/generalStatistic.php",
                function(data) {
                    console.log(data);
                    var names = ['Buyers', 'Sellers', 'Games'];
                    var marks = [];

                    marks.push(data[0].Buyers);
                    marks.push(data[0].Sellers);
                    marks.push(data[0].Games);


                    var chartdata = {
                        labels: names,
                        datasets: [{
                            label: 'Count',
                            backgroundColor: '#4dc9f6',
                            borderColor: '#ffffff',
                            hoverBackgroundColor: '#ff006f',
                            hoverBorderColor: '#666666',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas0");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,
                        options: {
                            legend: {
                                labels: {
                                    fontColor: 'red'
                                }
                            },

                        }
                    });
                });
        }
    }

    function showGraph1() {
        {
            $.post("../controller/gamesCountByType.php",
                function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].Type);
                        marks.push(data[i].games_count);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Count',
                            backgroundColor: COLORS,
                            borderColor: '#ffffff',
                            hoverBackgroundColor: '#ff006f',
                            hoverBorderColor: '#666666',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            responsive: true
                        }
                    });
                });
        }
    }

    function showGraph2() {
        {
            $.post("../controller/gameAccordingToSeller.php",
                function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].Username);
                        marks.push(data[i].games_count);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Count',
                            backgroundColor: COLORS,
                            borderColor: '#ffffff',
                            hoverBackgroundColor: '#ff006f',
                            hoverBorderColor: '#666666',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas2");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            responsive: true
                        }
                    });
                });
        }
    }

    function showGraph3() {
        {
            $.post("../controller/mostOrderedGames.php",
                function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].Name);
                        marks.push(data[i].orders_count);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Count',
                            backgroundColor: COLORS,
                            borderColor: '#ffffff',
                            hoverBackgroundColor: '#ff006f',
                            hoverBorderColor: '#666666',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas3");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            responsive: true
                        }
                    });
                });
        }
    }

    function showGraph4() {
        {
            $.post("../controller/bidsForAuctions.php",
                function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].Name);
                        marks.push(data[i].bids_count);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Count',
                            backgroundColor: COLORS,
                            borderColor: '#ffffff',
                            hoverBackgroundColor: '#ff006f',
                            hoverBorderColor: '#666666',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas4");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            legend: {
                                labels: {
                                    fontColor: 'red'
                                }
                            },
                            responsive: true
                        }
                    });
                });
        }
    }
</script>




</html>