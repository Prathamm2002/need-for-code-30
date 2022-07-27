    <?php
    require "dbconnect.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $identry=$_POST['identry'];
    
    
    // PRINTING THE DATA INTO TABLE
    $sql = "SELECT * FROM `subjectscore` WHERE `id`='$identry'";
    $result = mysqli_query($conn, $sql);
    

    if($result -> num_rows > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $sub1 = $row["SE"];
            $sub2 = $row["DWM"];
            $sub3 = $row["PCE"];
            $sub4 = $row["TCS"];
            $sub5 = $row["CN"];
        }
    }
}
?>


<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>upStat</title>


    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

    
    </head>

    <body>
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <nav class="navbar navbar-expand-lg custom_nav-container ">
                                <a class="navbar-brand" href="index.html">
                                    <span>
                  upStat
                </span>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <div class="d-flex  flex-column flex-lg-row align-items-center">
                                        <ul class="navbar-nav  ">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="report.php">Report </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="perform.php">Performance </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="test.php">Take a test </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="login.php"> Login</a>
                                            </li>
                                        </ul>

                                        <br>
                                        <br>
                                        <form action="perform.php" method="POST">
                                        <label for="id">ID FOR GRAPH</label>
                                        <input type="text" name="identry" id="identry" placeholder="ID *" required>

                                        <button type="submit" name="submit" class="btn">SUBMIT</button>
                                        </form>
                                        <!--Table and divs that hold the pie charts-->
                                        <table class="columns">
                                            <tr>
                                                <td>
                                                    <div id="piechart_div" style="border: 1px solid #ccc"></div>
                                                </td>
                                                <td>
                                                    <div id="barchart_div" style="border: 1px solid #ccc"></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header section -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load Charts and the corechart and barchart packages.
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Draw the pie chart and bar chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['CN', <?php $sub1 ?>],
                ['SE', <?php $sub2 ?>],
                ['DWM', <?php $sub3 ?>],
                ['PCE', <?php $sub4 ?>],
                ['TCS', <?php $sub5 ?>]
            ]);

            var piechart_options = {
                title: 'Pie Chart',
                width: 650,
                height: 550,
                is3D: true
            };
            var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
            piechart.draw(data, piechart_options);

            var barchart_options = {
                title: 'Barchart: Performance',
                width: 650,
                height: 550,
                legend: 'none'
            };
            var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
            barchart.draw(data, barchart_options);
        }
    </script>
</body>
</html>

    
