<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./design.css"> -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url(./images/vector7.png);
            background-repeat: no-repeat;
            background-position: top right;

            padding: 0px;
            margin: 0px;
        }

        .container {
            padding-left: 30px;
            padding-right: 30px;
            display: inline-block;
        }

        @media screen and (max-width: 480px) {
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        .section-1 {
            display: flex;
            color: white;
        }

        /* left start */
        .section-1__left {
            color: white;
            float: left;
        }

        .section-1__left-title {
            font-size: 55px;
            padding-top: 150px;
            padding-left: 70px;
            font-weight: bolder;
            margin-bottom: 40px;
        }

        .section-1__left-text {
            padding-top: 0px;
            padding-bottom: 0px;
            padding-left: 70px;
            font-size: 12px;
            margin-bottom: 30px;
        }

        .section-1__left-button-group {
            padding-left: 70px;
            display: flex;
            align-items: center;
        }

        .section-1__left-button-group__left {
            margin-right: 40px;
        }

        .section-1__left-button-group__right {
            display: flex;
            align-items: center;
        }

        .section-1__left-button-group__right-text {
            margin-right: 16px;
        }


        /* left end */

        .section-1__right {
            transform: rotate(7deg);
            z-index: -1;
            width: 120%;
        }


        /* Start section-2 */
        .section-2 {
            display: flex;
            color: white;
        }

        .section-2__left {
            display: flex;


        }

        .section-2__left-image {
            margin-left: 0px;
        }

        .section-2__left-text {

            font-size: 45px;
            font-weight: bolder;
            margin-top: 250px;

        }

        .section-2__center {
            float: left;
            align-items: center;
            justify-content: center;
        }

        .section-2__right {
            align-items: center;
            background-image: url('./images/Link-btn.png');
            background-position: bottom right;
            background-repeat: no-repeat;
            margin-bottom: 180px;
            margin-right: 10px;
        }

        /* End section-2 */

        /* Start section-2 */

        .section-3 {
            display: flex;
            color: white;
        }

        .section-3__left {
            /* justify-content: center; */
            float: right;
            padding-right: 0px;
            margin-bottom: 20px;
            margin-left: 50px;
        }

        .section-3__right {
            float: left;
            /* justify-content: center; */
            padding-left: 20px;
            margin-bottom: 20px;
            margin-right: 0px;
        }

        .section-3__text {
            padding-left: 15px;
            padding-right: 15px;
            color: white;
            font-size: 52px;

        }

        /* End section-2 */

        /* Start section-3 */
        .section-4 {
            /* background-image: url('./images/40.png');
    margin: 5px; */
            background-repeat: no-repeat;
        }

        /* End section-3 */


        /* Start section-5 */
        .section-5 {
            display: flex;
            color: white;
        }

        .section-5__left {
            display: flex;
            /* margin: 0px;
    padding: 0px;
    justify-content: center; */

        }

        .section-5__left-title {
            margin-left: 10px;
            /* float: right; */
            justify-content: center;
            /* align-items: center; */
        }

        .section-5__center {
            float: left;
            align-items: center;
            justify-content: center;
        }

        .section-5__right {
            float: right;
            /* margin-left: -50px;
    background-image: url('./images/casper_ghost\ 5.png');
    background-position: bottom right;
    background-repeat: no-repeat; */
            /* margin-top: -150px; */
            /* padding-top: 100px; */
            /* margin-bottom: -170px; */
        }

        /* End section-5 */

        /* Start section-6 */
        .section-6 {
            display: flex;
        }

        .section-6__left {
            margin-left: 30px;
        }

        .section-6__left-smallimage {}

        .section-6__left-image {
            margin-left: 20px;
        }

        .section-6__right-title {
            padding-top: 30px;
            /* padding-top: 40px; */
            margin-top: 250px;
            /* align-items: center; */
        }

        .section-6__right {}

        /* End section-6 */

        /* Start section-7 */
        .section-7 {
            display: flex;
        }

        .section-7__left {
            margin-left: 30px;
        }

        .section-7__left-smallimage {}

        .section-7__left-image {
            margin-left: 20px;
        }

        .section-7__right-title {
            /* padding-top: 30px; */
            margin-top: 250px;

            align-items: center;
        }

        .section-7__right {}

        /* End section-6 */

        /* The Last Start */
        .section-last {
            display: flex;
            color: white;
        }

        .section--last__left {
            /* text-align: center ; */
            text-align: end right;
        }


        .section--last__center {
            text-align: center end;
        }

        .section--last__right {
            /* float: left; */
            align-items: flex-end;
        }

        /* Start col- */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        /* make col- Start */
        [class*="col-"] {
            float: left;
            padding: 10px;
        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }

        /* make col- End */

        /* make col-md Start */
        [class*="col-md"] {
            float: left;
            padding: 10px;
        }

        @media only screen and (max-width:1200px) {
            .col-md-1 {
                width: 8.33%;
            }

            .col-md-2 {
                width: 16.66%;
            }

            .col-md-3 {
                width: 25%;
            }

            .col-md-4 {
                width: 33.33%;
            }

            .col-md-5 {
                width: 41.66%;
            }

            .col-md-6 {
                width: 50%;
            }

            .col-md-7 {
                width: 58.33%;
            }

            .col-md-8 {
                width: 66.66%;
            }

            .col-md-9 {
                width: 75%;
            }

            .col-md-10 {
                width: 83.33%;
            }

            .col-md-11 {
                width: 91.66%;
            }

            .col-md-12 {
                width: 100%;
            }
        }

        /* End make col-md */

        /* make col-sm Start */
        [class*="col-sm"] {
            float: left;
            padding: 10px;
        }

        @media only screen and (max-width:992px) {
            .col-sm-1 {
                width: 8.33%;
            }

            .col-sm-2 {
                width: 16.66%;
            }

            .col-sm-3 {
                width: 25%;
            }

            .col-sm-4 {
                width: 33.33%;
            }

            .col-sm-5 {
                width: 41.66%;
            }

            .col-sm-6 {
                width: 50%;
            }

            .col-sm-7 {
                width: 58.33%;
            }

            .col-sm-8 {
                width: 66.66%;
            }

            .col-sm-9 {
                width: 75%;
            }

            .col-sm-10 {
                width: 83.33%;
            }

            .col-sm-11 {
                width: 91.66%;
            }

            .col-sm-12 {
                width: 100%;
            }
        }

        /* make col-sm End */

        /* make col-xs Start */
        [class*="col-xs"] {
            float: left;
            padding: 10px;
        }

        @media only screen and (max-width:768px) {
            .col-xs-1 {
                width: 8.33%;
            }

            .col-xs-2 {
                width: 16.66%;
            }

            .col-xs-3 {
                width: 25%;
            }

            .col-xs-4 {
                width: 33.33%;
            }

            .col-xs-5 {
                width: 41.66%;
            }

            .col-xs-6 {
                width: 50%;
            }

            .col-xs-7 {
                width: 58.33%;
            }

            .col-xs-8 {
                width: 66.66%;
            }

            .col-xs-9 {
                width: 75%;
            }

            .col-xs-10 {
                width: 83.33%;
            }

            .col-xs-11 {
                width: 91.66%;
            }

            .col-xs-12 {
                width: 100%;
            }
        }

        /* make col-sm End */
        /* End col- */
    </style>
</head>

<body style="background-color: black;">
    <div class="container">
        <div class="row">

            <!-- section-1 start -->
            <div class="section-1">
                <div class="col-4 col-md-6 col-sm-4 col-xs-4 section-1__left">
                    <div class="section-1__left-title">
                        Casper The Next Gen Cryto
                    </div>
                    <div class="section-1__left-text">
                        In search for cute little puppy, Captain Sem has come back from his tragic death. With his
                        hogwarts certified power he promise to be a hero for all of ghostkind.
                    </div>
                    <div class="section-1__left-button-group">
                        <div class="section-1__left-button-group__left"><img src="./images/btn.png" alt=""></div>
                        <div class="section-1__left-button-group__right">
                            <div class="section-1__left-button-group__right-text"><img src="./images/Link-btn-1.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-md-8 col-sm-8 col-xs-8 section-1__right">
                    <img src="./images/casper3.png" alt="" class="" width="100%" />
                </div>
            </div>
            <!-- section-1 end -->

            <!-- section-2 start -->
            <div class="section-2">
                <div class="col-6 col-md-6 col-sm-4 col-xs-12 section-2__left">
                    <div class="section-2__left-image">
                        <img src="./images/casper_ghost 4.png" alt="">
                    </div>
                    <div class="section-2__left-text">
                        Explore Products
                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-4 col-xs-12 section-2__center">
                    <img src="./images/64.png" alt="">
                </div>
                <div class="col-3 col-md-3 col-sm-4 section-2__right">
                    <img src="" alt="">
                </div>
            </div>
            <!-- section-2 end -->

            <!-- section-3 start -->
            <div class="section-3">
                <div class="col-6 col-md-6 col-sm-12 col-xs-12 section-3__left">
                    <img src="./images/Frame 18.png" alt="" style="margin-bottom: 20px; float: right;">
                    <img src="./images/Frame 20.png" alt="" style="margin-bottom: 20px; float: right;">
                </div>
                <div class="col-6 col-md-6 col-sm-12 col-xs-12 section-3__right">
                    <img src="./images/Frame 19.png" alt="" style="margin-bottom: 20px; float: left;">
                    <div class="section-3__right-image-1"></div>

                    <img src="./images/Frame 21.png" alt="" style="margin-bottom: 20px; float: left;">
                </div>

            </div>

            <div class="col-12 col-md-12 col-sm-12 col-xs-12 section-3__text">
                WE BELIEVE IN THE POTENTIAL OF FAST & FEELESS BLOCKCHAIN & ARE READY TO PRESENT THE UNIFIED ECOSYSTEM
                BUILT ON Casper→SO #JOINTHECASPER
            </div>
            <!-- section-3 end -->

            <!-- section-4 start -->
            <div class="section-4">
                <img src="./images/40.png" alt="">
            </div>
            <!-- section-4 End -->

            <!-- section-5 start -->
            <div class="section-5">
                <div class="col-1 col-md-1 col-sm-12 col-xs-12 section-5__left-blank">
                </div>
                <div class="col-5 col-md-5 col-sm-12 col-xs-12 section-5__left-title">
                    <div class="section-2__left-image">
                        <img src="./images/Frame 27.png" alt="">
                        <img src="./images/check-info.png" alt="">
                        <img src="./images/Frame 28.png" alt="">
                        <img src="./images/Frame 30.png" alt="">

                    </div>
                </div>
                <div class="col-3 col-md-3 col-sm-12 col-xs-12 section-5__center">
                    <img src="./images/Frame 31.png" alt="">
                    <img src="./images/Frame 31.png" alt="">
                    <img src="./images/Frame 31.png" alt="">
                    <img src="./images/Frame 31.png" alt="">
                </div>
                <div class="col-3 col-md-3 col-sm-12 section-5__right">
                    <img src="./images/casper_ghost 5.png" alt="">
                </div>
            </div>
            <!-- section-5 end -->

            <!-- section-6 start -->
            <div class="section-6">
                <div class="col-7 col-md-7 col-sm-12  section-6__left">
                    <div class="section-6__left-smallimage"><img src="./images/2.png" alt=""></div>
                    <div class="section-6__left-image"><img src="./images/Phone Mockup.png" alt=""></div>
                </div>
                <div class="col-5 col-md-5 col-sm-12 col-xs-12  section-6__right">
                    <div class="section-6__right-title"><img src="./images/Component 9.png" alt=""></div>
                </div>
            </div>
            <!-- section-6 end -->

            <!-- section-7 start -->
            <div class="section-7">
                <div class="col-7 col-md-7 col-sm-12  section-7__left" style="margin-left: 30px;">
                    <div class="section-7__right-title"><img src="./images/Component 9.png" alt=""></div>
                </div>
                <div class="col-5 col-md-5 col-sm-12 col-xs-12  section-7__right">
                    <div class="section-7__left-smallimage"><img src="./images/2.png" alt=""></div>
                    <div class="section-7__left-image"><img src="./images/Phone Mockup.png" alt=""></div>
                </div>
            </div>
            <!-- section-7 end -->

            <!-- The last section start -->
            <div class="section-last">
                <div class="col-4 col-md-4 col-sm-6 col-xs-12 section-last__left">
                    ©All rights reserved by Casper
                </div>

                <div class="col-4 col-md-4 col-sm-6 col-xs-12 section-last__center">
                    <img src="./images/casper_ghost 6.png" alt="">
                </div>

                <div class="col-4 col-md-4 col-sm-6 col-xs-12 section-last__right">
                    <img src="./images/Vector.png" style="padding: 10px;" alt="">
                    <img src="./images/Vector-1.png" style="padding: 10px;" alt="">
                    <img src="./images/Vector-2.png" style="padding: 10px;" alt="">
                    <img src="./images/Vector-3.png" style="padding: 10px;" alt="">

                </div>
            </div>
            <!-- The last section end -->

        </div>
    </div>

</body>

</html>