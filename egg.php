<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Egg | IoT</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .eggContainer {

            border: #6c6f7d 30px solid;
            border-top: #6c6f7d  28px solid;
            color: white;
            height: 480px;
            padding-bottom: 210px;
            width: 1030px;
            border-radius: 11%;
        }
        .boxSmall {
            border-top: #6c6f7d 9px solid;
            border: #6c6f7d 1px solid;
            color: white;
            height: 212px;
            border-bottom: #6c6f7d 17px solid;
            border-radius: .1%;
        }

        .boxSmall1 {

            border: #6c6f7d 2px solid;
            color: white;
            height: 220px;
            border-top: #6c6f7d 17px solid;
            border-radius: .1%;
            border-bottom: #6c6f7d 1px solid;
        }
        .eggholder1{
              height: 200px;
              width: 161px;
              margin-left: .2px;
              border-left: #6c6f7d 2px solid;
              border-right: #6c6f7d 2px solid;
              border-radius: 12%;
              margin-bottom: 20px;
              float: left;
              margin-right: -.2px;
        }
        .eggholder{
              height: 200px;
              width: 161px;
              margin-left: .20px;
              border-left:#6c6f7d 2px solid;
              border-right: #6c6f7d 2px solid;
              border-radius: 12%;
              margin-bottom: 20px;
              float: left;
              margin-right: .1px;
        }

                .egg1{
            margin-top: 10px;
            margin-left: 20px;
            position: absolute;
            display: block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            float: left;
            z-index: auto;
            width: 116px;
            height: 170px;
            cursor: default;
            opacity: 1;
            padding: 0;
            overflow: visible;
            border: none;
            -webkit-border-radius: 50% / 60% 60% 40% 40%;
            border-radius: 50% / 60% 60% 40% 40%;
            font: normal 100%/normal Arial, Helvetica, sans-serif;
            color: rgba(0,0,0,1);
            -o-text-overflow: clip;
            text-overflow: clip;
            background: -webkit-linear-gradient(-90deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background: -moz-linear-gradient(180deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background: linear-gradient(180deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background-position: 50% 50%;
            -webkit-background-origin: padding-box;
            background-origin: padding-box;
            -webkit-background-clip: border-box;
            background-clip: border-box;
            -webkit-background-size: auto auto;
            background-size: auto auto;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-shadow: none;
            -webkit-transition: none;
            -moz-transition: none;
            -o-transition: none;
            transition: none;
            -webkit-transform: none;
            transform: none;
            -webkit-transform-origin: 50% 50% 0;
            transform-origin: 50% 50% 0;
                }

        .egg{
            margin-top: 10px;
            margin-left: 20px;
            position: absolute;
            display: block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            float: left;
            z-index: auto;
            width: 116px;
            height: 170px;
            cursor: default;
            opacity: 1;
            padding: 0;
            overflow: visible;
            border: none;
            -webkit-border-radius: 50% / 60% 60% 40% 40%;
            border-radius: 50% / 60% 60% 40% 40%;
            font: normal 100%/normal Arial, Helvetica, sans-serif;
            color: rgba(0,0,0,1);
            -o-text-overflow: clip;
            text-overflow: clip;
            background: -webkit-linear-gradient(-90deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background: -moz-linear-gradient(180deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background: linear-gradient(180deg, #e5c7da 0, #e5c7da 11%, #AD6237 95%, #AD6237 100%);
            background-position: 50% 50%;
            -webkit-background-origin: padding-box;
            background-origin: padding-box;
            -webkit-background-clip: border-box;
            background-clip: border-box;
            -webkit-background-size: auto auto;
            background-size: auto auto;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-shadow: none;
            -webkit-transition: none;
            -moz-transition: none;
            -o-transition: none;
            transition: none;
            -webkit-transform: none;
            transform: none;
            -webkit-transform-origin: 50% 50% 0;
            transform-origin: 50% 50% 0;
        }
    </style>
  </head>

  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container">
             <a class="navbar-brand" href="#">Egg Dashboard</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="control.html">Control</a>
            </li>
                        <li class="nav-item">
             <a class="nav-link" href="temp.html">Weather</a>
             </li>
            <li class="nav-item">
              <a class="nav-link" href="data.html">Data</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="egg.php">Egg</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
          <section>
              <div class="container">
              <br />
                <div class="row">
                  <div class="pull-left">
                
                    <?php
                    //server Details
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "id4688657_iot";
                    $count=0;
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $result = $conn->query("SELECT * FROM egg");

              	        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                                //echo $row['value'];
                             if ($row['value']==1) {
                                 $count++;
                             }
                            ?>
                           
                        <?php
                            }
                            
                                }
                             else {
                                echo "0 results";
                            }
              //$count=4;
                        if($count<=6){

                    ?>

                        <div class="eggContainer">
                            
                             <div class="boxSmall">
                                      <!--<div class="eggholder">-->
                                       <?php
                                        $tempBox = 6-$count;

                                        for($i=0;$i<$count;$i++){
                                        ?>
                                        <div class="eggholder">

                                        <div class="egg">

                                        </div>
                                         </div>

                                        <?php
                                        }
                                        if($tempBox!=-1){
                                        for($i=0;$i<$tempBox;$i++){   
                                        ?>
                                        <div class="eggholder1">

                                       
                                         </div>
                                        <?php
                                        }
                                        }
                                            ?>

                                </div>
                                <div class="boxSmall1">
                                <?php
                                    for($i=0;$i<6;$i++){   
                                    ?>
                                <div class="eggholder1">
                                
                                </div>
                                <?php
                                    }
                        
                            ?>
                             </div>

                          </div>
                            <?php
                        }
                            else{
                                
                                        ?>
                                <div class="eggContainer">
                                 <div class="boxSmall">
                                   <?php
                                        for($i=0;$i<6;$i++){
                                        ?>
                                    <div class="eggholder">
                                       
                            
                                        <div class="egg">

                                        </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    

                                </div>
                                <div class="boxSmall1">
                                <?php
                                    $temp = $count-6;
                                    for($i=0;$i<$temp;$i++){   
                                    ?>
                                <div class="eggholder1">
                                <div class="egg">

                                        </div>
                                </div>
                                <?php
                                    }
                                if($temp!=6){
                                for($i=0;$i<6-$temp;$i++){   

                            ?>
                                 <div class="eggholder1">
                                
                                </div>                   
                                                                    <?php
                            }
                                }
                                        ?>
                             </div>

                          </div>
                                        
                      <?php
                            }
                            ?>
                        <?php
                                
                        ?>          
            </div>
      </div><br>
        <div class="alert alert-success">

                        Remaining Eggs: <?php
                        echo $count;
                        ?>
                        <br>
                        Case Capacity:  12
                        <br>
                    </div>
          
        </div>
    </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>