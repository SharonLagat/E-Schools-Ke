<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
  <style>
      .image_container{
          position:relative;
          background: url("images/events2.jpg") no-repeat center center fixed;
          font-family: 'Skranji', cursive;
          background-size: cover;
          height: 100%;
          overflow: hidden;
      }
      .image_container .panel{
          padding: 3%;
          width: 200%;
          height: 100%;
          align: center;
      }
      .panel.date {
          margin: 0px;
          width: 80px;
          text-align: center;

      }

      .panel.date .month {
          padding: 4px 0px;
          font-weight: 900;
          text-transform: uppercase;
      }

      .panel.date .day {
          padding: 4px 0px;
          font-weight: 900;
          font-size: 2.0em;
      }

  </style>
    <div class="image_container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" >

                <!-- Fluid width widget -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-calendar"></span> 
                           School Events and Sports
                        </h3>
                    </div>
                    <div class="panel-body" alt="Max-width 100%">
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <div class="panel panel-danger text-center date">
                                        <div class="panel-heading month">
                                        <span class="panel-title strong">
                                            August
                                        </span>
                                        </div>
                                        <div class="panel-body day text-danger">
                                            10
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Red Cross Annual Charity Walk
                                    </h4>
                                    <p>
                                        Held in Nairobi. All students gather at the town square at 10:00 am.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <div class="panel panel-danger text-center date">
                                        <div class="panel-heading month">
                                        <span class="panel-title strong">
                                            August
                                        </span>
                                        </div>
                                        <div class="panel-body text-danger day">
                                            16
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Maths Contest
                                    </h4>
                                    <p>
                                        Selected students get to represent their schools. Held at Moi Academy from 8:00 am.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <div class="panel panel-danger text-center date">
                                        <div class="panel-heading month">
                                        <span class="panel-title strong all-caps">
                                            August
                                        </span>
                                        </div>
                                        <div class="panel-body text-danger day">
                                            20
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Senior Year Prom
                                    </h4>
                                    <p>
                                        Class of 2018 get to finish high school in style at Karen Blixen Museum. Event begins at 6:00pm. Dress code : official.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <div class="panel panel-danger text-center date">
                                        <div class="panel-heading month">
                                        <span class="panel-title strong">
                                            September
                                        </span>
                                        </div>
                                        <div class="panel-body text-danger day">
                                            03
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        National Sports Day
                                    </h4>
                                    <p>
                                        Let's all gather at Moi Stadium to cheer and participate in various sports that will be held.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-default btn-block">More Events »</a>
                    </div>
                </div>
                <!-- End fluid width widget -->

            </div>
        </div>
    </div>

<?php
include("footer.php");
?>
