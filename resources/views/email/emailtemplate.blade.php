<!DOCTYPE html>
<html>
<head>
    <title>LITTLE TRIP INVOICE</title>
    <style>
    body {
        margin: 0;
        background-color: #ccc;
    }
    table {
        border-spacing: 0;
    }
    td{
        padding: 0;
    }
    img {
        border: 0;
    }
    .wrapper {
        width: 100%;
        table-layout: fixed;
        background-color: #cccccc;
        padding-bottom: 60px;
        font-family: sans-serif;
    }
    .main {
        background-color: white;
        margin: 0 auto;
        width: 100%;
        max-width: 600px;
        border-spacing: 0;
        font-family: sans-serif;
        color: black;
    }
    .column {
        width: 100%;
        max-width: 300px;
        display: inline-block;
        vertical-align: top;
        text-align: justify;
    }
    .row {
        padding: 35px;
    }
    .socials {
        padding-top: 15px;
        word-spacing: 15px;
    } 
    .container {
        position: relative;
        color: black;
        text-align: left;
    }
    .top-right {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 20px;
        font-family: sans-serif;
    }
    .top-left {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-85%, -60%);
        font-family: sans-serif;
        line-height: 1.0;
        font-weight: bold;
    }
    .p1 {
        font-size: 40px;
    }
    @media screen and (max-width: 450px) {
        .p1 {
            font-size: 25px;
        }
        .top-right {
            font-size: 15px;
            top: 18px;
        }
    }
    @media screen and (max-width: 320px) {
        .p1 {
            font-size: 25px;
        }
        .top-right {
            top: 15px;
            font-size: 10px;
        }
    }
    
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main" >

            <tr>
                <td height="8" style="background-color: #353434;"></td>
            </tr>
    <!----------------------- HEADER SECTION --------------------------->
            <tr class="header">
                <td>
                    <table width="100%">
                        <tr>
                            <td class="container">
                                <img src="{{ asset('img/headerimage.png') }}" alt="" width="600px" 
                                style="max-width: 100%;">
                                <div class="top-right">
                                    <p>September 24 2022</p>
                                </div>
                                <div class="top-left">
                                    <p class="p1">Thank you for commuting with us,<br> Luke</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
    <!----------------------- TRIP DETAILS SECTION ----------------------->
            <tr style="background-color: rgb(215, 22, 22);">
                <td style="padding: 35px; color:white;">
                    <table width="100%">
                        <tr>    
                            <td style="line-height: 0.5;">
                                <p style="font-weight:bold;font-size:large;">Trip Details</p>
                                <p>ID: E3CC12DC-4CA</p>
                                <hr>
                            </td>                    
                        </tr>
                        <tr style="line-height: 0.1;">
                            <td style="text-align: center;">
                                <p style="font-size:20px;">Your Fare</p>
                                <p style="font-size:35px;font-weight:bold;">KES 350.00</p>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <table width="100%">
                                <tr>
                                    <td>
                                        <p>Base Fare</p>
                                        <p>Cost Per KM</p>
                                        <p>Cost Per Minute</p>
                                    <hr>
                                    </td>
                                    <td style="text-align: right;">
                                        <p>270.00</p>
                                        <p>55.00</p>
                                        <p>4.00</p>
                                    <hr>
                                    </td>
                                </tr>
                               </table>
                            </td>    
                        </tr>
                        <tr>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <p>Payment Mode</p>
                                        </td>
                                        <td style="text-align: right;">
                                            <p style="font-weight:bold;">CASH</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
    <!---------------------------- TRIP DETAILS & DRIVER DETAILS  ------------------------------>
            <tr>
                <td style="padding: 35px;">
                    <table width="100%">
                        <tr>
                            <td style="line-height: 1;">
                                <p style="color: rgb(42, 42, 42);font-style: oblique;">Pickup:</p>
                                <p style="font-size: 18px;">Musa Gitau Road</p>
                            </td>
                            <td style="text-align: right;">
                                <p style="font-size: 27px;">14:30</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="line-height: 1;">
                                <p style="color: rgb(42, 42, 42);font-style: oblique;">Dropoff:</p>
                                <p style="font-size: 18px;">Times Towers</p>
                                <hr>
                            </td>
                            <td style="text-align: right;">
                                <p style="font-size: 27px;">15:00</p>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <table width="100%">
                                    <tr>
                                        <p style="font-weight:bold;font-size:larger;">Driver's Details:</p>
                                        <td>
                                            <img src="{{ asset('img/driverprofile.png') }}" alt="Driver Profile Pic" 
                                            width="95px">
                                        </td>
                                        <td style="line-height:0.9;text-align:justify;">
                                            <p>Richard</p>
                                            <p>Mazda Demio</p>
                                            <p>KCT 111Q</p>
                                        </td>
                                    </tr>
                                </table>
                                <p style="word-spacing: 10px;">00:30:45 | 9.5km</p>   
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>         
    <!--------------------------------- INFO SECTION --------------------------------------------->
            <tr style="background-color:#5bc0de;">
                <td style="padding:45px;">
                    <table width="100%">
                        <tr>
                            <td style="text-align:center; font-size:30px;">
                                <p style="font-weight:bold;font-size: 35px;">Did You Know?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <dl>
                                    <dt style="font-weight:bold;">Dial *826#</dt>
                                    <dd>Book a Little Ride even when you don't have data bundles or a smartphone</dd>
                                    <br>
                                    <dt style="font-weight:bold;">Little Coins</dt>
                                    <dd>Enjoy hassle-free trips by loading cash into your Little Wallet</dd>
                                    <br>
                                    <dt style="font-weight:bold;">Chat Ride</dt>
                                    <dd>Use our Telegram & Facebook BOT -<a href="https://telegram.me/@LittleApp_bot" style="color:inherit;">
                                    @LittleApp_bot</a> or Whatsapp on <a href="https://wa.me/254777000777?text=Hello!" style="color: inherit;">
                                    +254777000777</a> to book a Little in a jiffy</dd>
                                    <br>
                                    <dt style="font-weight:bold;">Refer & Earn</dt>
                                    <dd>Get KES 5.00 off your ride, when a friend you referred takes his/her
                                    first ride</dd>
                                </dl>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
    <!----------------------------- SUPPORT SECTION ---------------------------->
            <tr style="background-color: rgb(49, 49, 49);">
                <td style="padding: 35px;color: white;">
                    <table width="100%">
                        <tr>
                            <td>
                                <p style="font-weight:bold;font-size: larger;">Need Support?</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="line-height:normal;">
                                <p>Tap Little Assistance in the Little app to contact us with your question <br>
                                about your trip</p>
                                <p style="line-height:0.9;">For Terms and Conditions and Fare details,</p>
                                <p style="line-height:0.5;margin-bottom:35px;">visit <a href="https://little.bz/" 
                                style="color: inherit;">www.little.bz</a></p>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="socials" style="text-align:center;">
                                <a href="https://www.facebook.com/LittleAppKE/">
                                <img src="{{ asset('img/white-facebook.png') }}" alt="" width="25px"></a>
                                <a href="https://www.instagram.com/littlerideke/">
                                <img src="{{ asset('img/white-instagram.png') }}" alt="" width="25px"></a>
                                <a href="https://twitter.com/littleappkenya">
                                <img src="{{ asset('img/white-twitter.png') }}" alt="" width="25px"></a>
                                <a href="https://www.linkedin.com/company/littleride/mycompany/">
                                <img src="{{ asset('img/white-linkedin.png') }}" alt="" width="25px"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <p style="text-align: center;">Made by Little <span style="color:rgb(215, 22, 22)">❤</span> Kenya</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="8" style="background-color: #353434;">
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
<!-- <h1>Hi {{ $data['name'] }}!</h1>
    <p>{{ $data['subject'] }}</p>
    <p>{{ $data['message'] }}</p> -->
<!-- <h1>Hi {{ $data['name'] }}!</h1>
    <p>{{ $data['subject'] }}</p>
    <p>{{ $data['message'] }}</p> -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>EMAIL</title>
</head>
<body>
    <h1>Hi {{ $data['name'] }}!</h1>
    <p>{{ $data['subject'] }}</p>
    <p>{{ $data['message'] }}</p>
</body>
</html> -->