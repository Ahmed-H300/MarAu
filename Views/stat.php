<?php
    // require "../Controller/";
    
?>
<?php
// header('Content-Type: application/json');

// require_once('db.php');

// $sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

// $result = mysqli_query($conn,$sqlQuery);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// mysqli_close($conn);

// echo json_encode($data);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Home_style.css">
    <link rel="stylesheet" href="../css/stat.css">
    <title>MarAu </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <?php  include ('nav.php') ?>
    <!-- welcome text -->
    <div class="title-stat"> statistices</div>
    <div class="details_stat">Total Number Of Buyers: </div>
    <div class="details_stat">Total Number Of Sellers: </div>
    <div class="details_stat">Total Numbner Of Games: </div>
    <div class="details_stat">Average Price Of All Games: </div>


    <div id="chart-container">
        <canvas id="graphCanvas"> Stat</canvas>
    </div>


    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].student_name);
                        marks.push(data[i].marks);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Student Marks',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>


<script src='../js/bootstrap.min.js'></script>
<script src="../js/nav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>
