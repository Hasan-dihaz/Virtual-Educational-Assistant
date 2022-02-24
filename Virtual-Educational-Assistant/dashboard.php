<html>
  <head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Field', 'No of teacher'],
            <?php
             
              $conn=mysqli_connect("localhost","root","");
              $db=mysqli_select_db($conn,"project");
              $query= mysqli_query($conn,"SELECT field_of_interest,count(*) as num FROM teacher group by field_of_interest");
              while($row=mysqli_fetch_assoc($query)){
               echo "['".$row["field_of_interest"]."', ".$row["num"]."],";
              }
            ?>
          ]);

          var options = {
            chart: {
              title: 'No. of Teacher/Field',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
          //starts.......

      google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChartpi);

            function drawChartpi() {

              var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                  
                  $conn=mysqli_connect("localhost","root","");
                  $db=mysqli_select_db($conn,"project");
                  $query= mysqli_query($conn,"SELECT field_of_interest,count(*) as num FROM teacher group by field_of_interest");
                  while($row=mysqli_fetch_assoc($query)){
                    echo "['".$row["field_of_interest"]."', ".$row["num"]."],";
                  }
                ?>
              ]);

              var options = {
                title: 'Fild Wise Courses'
              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

              chart.draw(data, options);
            }

    </script>


   <?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"project");
    $query1= mysqli_query($conn,"SELECT count(*) as num FROM subject");
    $r=mysqli_fetch_assoc($query1);

    $query2= mysqli_query($conn,"SELECT count(*) as num FROM student");
    $r1=mysqli_fetch_assoc($query2);

    $query3= mysqli_query($conn,"SELECT count(*) as num FROM `teacher`");
    $r2=mysqli_fetch_assoc($query3);

   ?>


  </head>
  <body>
    <div class="container">
      <div class="row lg">
              <div class="col-lg-3">
                <div class="card">

                  <div class="card-header bg-info" >
                    <div  style="  height: 100px; width: 100%;">
                      <br>
                      <h5 > <?php echo "Total Teacher No. "; echo $r2['num'];?> </h5>
                    </div>
                  </div>

                    <!-- <div class="card-body bg-primary">
                        <h4 class="card-title"></h4>
                    </div> -->

                    
                </div>                                      
              </div>

              <div class="col-lg-3">
                <div class="card">

                  <div class="card-header bg-info" >
                    <div  style="  height: 100px; width: 100%;">
                      <br>
                      <h5 ><?php echo "Total Student No. "; echo $r1['num'];?> </h5>
                    </div>
                  </div>

                    <!-- <div class="card-body bg-primary">
                        <h4 class="card-title"></h4>
                    </div> -->

                    <div class="class-footer">
                    </div>
                </div>                                      
              </div>

              <div class="col-lg-3">
                <div class="card">

                  <div class="card-header bg-info" >
                    <div  style="  height: 100px; width: 100%;">
                      <br>
                      <h5 > <?php echo "Total Subject No. "; echo $r['num'];?></h5>
                    </div>
                  </div>

                    <!-- <div class="card-body bg-primary">
                        <h4 class="card-title"></h4>
                    </div> -->

                    <div class="class-footer">
                    </div>
                </div>                                      
              </div>

        </div>

      <div class="row lg">
        <div class="col-lg-6">
          <div id="columnchart_material" style="width: 550px; height: 450px;"></div>
        </div>
        <div class="col-lg-6">
          <div id="piechart" style="width: 650px; height: 500px;"></div>
        </div>
      </div>
    </div>
    <!-- <div id="columnchart_material" style="width: 800px; height: 500px;"></div> -->
    </body>
</html>
