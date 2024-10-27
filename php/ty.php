<script type="text/javascript">

(function () {
    var timeLeft = 5,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>
<body style="text-align:center;margin-top:30vh; font-size:2vw;font-family:sans-serif;background-color: #FC7676; color:white;">
    <h1>Thankyou for Contacting us</h1>
    <h2>You will be forward back in<?php header("Refresh:5;url=../clientside/index.php")?></h2>
    <p id="countdown" style="border:1px solid white;border-radius:100%; font-size:3vw; width:fit-content; margin-left:47vw;background-color:white;color:black;padding:20px 30px 20px 30px;">5</p>
</body>