<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/29/15
 * Time: 1:17 PM
 */
require_once "response/jssdk.php";
$jssdk=new JSSDK("wxd1c57c307f05d877","f6473b539bf2b74d647350eb1d4fa26b");
$signPackage=$jssdk->getSignPackage();
?>


<html>
<head>
    <title>What is your world?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/main.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>

    <!-- nav starts -->

    <!-- nav ends -->

    <!-- section starts  -->
    <div class="mainview">

        <div class="container">

            <div class="lastBackArea row">

                <img class="back col-xs-8 col-xs-offset-2" id="lastBackPic" src="img/back1.png">

            </div>

            <div class="row up-area">

                <label id="up-button" class="fa fa-caret-up  col-xs-2 col-xs-offset-5"></label>

            </div>

            <div class="row middle-area">

                <div class="left-area col-xs-1 col-xs-offset-1">

                    <label id="left-button" class="fa fa-caret-left"></label>


                </div>



                <div class="col-xs-8 workspace">

                    <div class="back">
                                <img id="currentBackPic" src="img/back2.png">

                    </div>



                </div>

                <div class="right-area col-xs-2">

                    <label id="right-button" class="fa fa-caret-right">

                    </label>

                </div>



            </div>


            <div class="front">
                <div class="container">
                    <div class="row">
                        <img id="lastFrontPic" class="col-xs-4" src="img/front1.png">
                        <img id="currentFrontPic" class="col-xs-4" src="img/front2.png">
                        <img id="nextFrontPic" class="col-xs-4" src="img/front3.png">
                    </div>
                </div>
            </div>

            <div class="row bottom-area ">
                <label id="down-button" class="fa fa-caret-down col-xs-2 col-xs-offset-5"></label>

            </div>



            <div class="nextBackArea row">

                <img class="back col-xs-8 col-xs-offset-2" id="nextBackPic" src="img/back3.png">

            </div>

        </div>

    </div>
    <!-- section ends  -->


    <!-- foot area starts -->

    <footer class="navbar navbar-fixed-bottom">
        <div class="navbar-header" >
            <a class="navbar-brand" href="#">WeWorld</a>
        </div>
        <div>
            <ul class="nav navbar-nav">

            </ul>
        </div>
    </footer>
    <!-- foot area ends -->


   <!-- script area starts -->
    <script type="text/javascript"  src="js/bootstrap.min.js"></script>
    <!-- script area ends -->
</body>



<script>



</script>
</html>
