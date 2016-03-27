﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
	<meta charset="utf-8" />
    <meta name="google" value="notranslate" />

    <link rel="stylesheet" type="text/css" href="css/weather-icons.min.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="left"></div>
    <div class="middle"></div>
    <div class="right"></div>
    <div class="time topLeft">
        <table class="timeTable">
            <tr>
                <td class="clock"></td>
            </tr>
            <tr>
                <td class="date"></td>
            </tr>
        </table>
    </div>
    <div class="weather topRight">
        <table class="weatherTable">
            <tr>
                <td class="indoorTemp" colspan="4">In: 20.7 °C</td>
            </tr>
            <tr class="currentWeather">
                <td class="currentWeatherIcon" colspan="2"></td>
                <td class="currentWeatherTemp" colspan="2"></td>
            </tr>
            <tr class="forecast0"></tr>
            <tr class="forecast1"></tr>
            <tr class="forecast2"></tr>
            <tr class="forecast3"></tr>
            <tr class="forecast4"></tr>
        </table>
    </div>
    <div class="gas">
        <table class="gasTable">
            <tr>
                <td>
                    <div class="gasImg">
                        <img id="svg" src="./img/diesel.svg" alt="Diesel-Zapfsäule" />
                    </div>
                </td>
                <td class="price"></td>
            </tr>
            <tr>
                <td class="lowestPriceTime"></td>
            </tr>
        </table>
    </div>

    <div class="calendar">
        <table class="calendarTable">
            <tr>
                <td class="subject"></td>
            </tr>
            <tr>
                <td class="calTime"></td>
            </tr>
        </table>
    </div>
    <div class="eta"></div>
    
    <script type="text/javascript" src="js/lib/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="js/lib/moment-with-locales.min.js"></script>

    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="js/position.js"></script>
    <script type="text/javascript" src="js/time.js"></script>
    <script type="text/javascript" src="js/temperature.js"></script>
    <script type="text/javascript" src="js/weather.js"></script>
    <script type="text/javascript" src="js/gas.js"></script>
    <script type="text/javascript" src="js/controller.js"></script>
</body>
</html>
