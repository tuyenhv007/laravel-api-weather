<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>



<!-- Head -->
<head>

    <title>HA NOI Weather Widget A Flat Responsive Widget Template :: w3layouts</title>

    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New York Weather Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->

    <!-- Style --> <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />

    <!-- Web-Fonts -->
    <link href='//fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:100,200' rel='stylesheet' type='text/css'>
    <!-- //Web-Fonts -->

</head>
<!-- Head -->



<!-- Body -->
<body onload="startTime()">



<!-- Heading -->
<h1>HA NOI WEATHER WIDGET</h1>
<!-- //Headng -->



<!-- Container -->
<div class="container">

    <!-- City -->
    <div class="city">
        <div class="title">
            <h2></h2>
            <h3>{{ $city }}</h3>
        </div>
        <div class="date-time">
            <div class="dmy">
                <div id="txt"></div>
                <div class="date">
                    <!-- Date-JavaScript -->
                    <script type="text/javascript">
                        var mydate=new Date()
                        var year=mydate.getYear()
                        if(year<1000)
                            year+=1900
                        var day=mydate.getDay()
                        var month=mydate.getMonth()
                        var daym=mydate.getDate()
                        if(daym<10)
                            daym="0"+daym
                        var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                        var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                        document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
                    </script>
                    <!-- //Date-JavaScript -->
                </div>
            </div>
            <div class="temperature">
                <p>{{ $celsius }}°<span>C</span></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- //City -->

    <!-- Forecast -->
    <div class="forecast">
        <div class="forecast-icon">
            <img src="../images/forecast.png" alt="Ha Noi Weather Widget">
        </div>
        <div class="today-weather">
            <h3>Cloudy</h3>
            <ul>
                <li>Now <span> </span></li>
                <li>09:00 <span> 22°C</span></li>
                <li>12:00 <span> 24°C</span></li>
                <li>15:00 <span> 23°C</span></li>
                <li>18:00 <span> 20°C</span></li>
            </ul>
        </div>
    </div>
    <!-- //Forecast -->
    <div class="clear"></div>

</div>
<!-- //Container -->



<!-- Footer -->
<div class="footer">

    <!-- Copyright -->
    <div class="copyright">
        <p> &copy; 2016 Ha Noi Weather Widget. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
    <!-- //Copyright -->

</div>
<!-- //Footer -->



<!-- Custom-JavaScript-Files -->

<!-- Time-JavaScript -->
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i}; // add zero in front of numbers < 10
        return i;
    }
</script>
<!-- //Time-JavaScript -->

<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->



</html>
