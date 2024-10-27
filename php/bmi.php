<section class="container">
      <p class="h2 text-center">BMI CALCULATOR</p>
      <div class="form-row my-3">
    <div class="col">
      <input type="numeric" class="form-control" name="weight" placeholder="Enter your Weight: " id="weight" required="required">
    </div>
    <div class="col">
    <select id="sweight" class="form-control">
    <option selected>Select the weight Conversion</option>
      <option value="Kg">Kg</option>
      <option value="Pound">Pound</option>
    </select>
</div>
</div>
<div class="form-row my-3">
    <div class="col">
      <input type="numeric" class="form-control" name="height" placeholder="Enter your Height: " id="height" required="required">
    </div>
    <div class="col">
    <select id="sheight" class="form-control">
    <option selected>Select the Height Conversion</option>
    <option value="Feet">Feet</option>
      <option value="cm">cm</option>
    </select>
</div>
</div>
    <div class="d-flex justify-content-center"><button class="btn btn-secondary my-3" onclick="run()">Submit</button></div>
    <div class="d-flex justify-content-center"><button class="btn btn-primary my-3" onclick="window.open('bmilearnmore.php','_self'); return false;">Learn More</button></div>
    <div id="rweight" style="font-size: 30px; color: white; margin-bottom: 10px;" class="text-center"><span id="normal"></span><br><span id="nweight"></span><span id="nweight2"></span></div>
    <div style="text-align: left;left: 50%;
    transform: translate(-50%, 0%); width: fit-content;">
    <h2 id="rtitle" style="text-align: center;"></h2>
    <h1 id="output"></h1>
  </div>
  <div style="text-align: left;left: 50%;
    transform: translate(-50%, 0%); width: fit-content;">
    <p id="rresult"></p>
    </div>
    </section>
<script>
function run(){
    var x = document.getElementById("sweight").value;
    var y = document.getElementById("sheight").value;
    document.getElementById("rtitle").innerHTML= "Result";

    if (x == "Kg" && y == "Feet"){
        var a = parseFloat(document.getElementById("weight").value);
        var b = parseFloat(document.getElementById("height").value);
        var fm = b * 0.3048; 
        var fm2 = fm*fm;
        var c = a / fm2;
        var z = parseFloat(c).toFixed(1);
        var sup="2";
        document.getElementById("output").innerHTML= z+" kg/m"+sup.sup();
        document.getElementById("rweight").style.backgroundColor="green";
        var w = parseInt(18.5*fm2);
        var w2 = parseInt(25*fm2);
        document.getElementById("normal").innerHTML= "Your Normal weight should be from";
        document.getElementById("normal").style.color= "white";
        document.getElementById("nweight").innerHTML= 1+w+"kg to ";
        document.getElementById("nweight2").innerHTML= w2+"kg";
    }
    else if(x == "Pound" && y== "Feet"){
        var a = parseFloat(document.getElementById("weight").value);
        var b = parseFloat(document.getElementById("height").value);
        var fi = b * 12; 
        var fi2 = fi*fi;
        var c = a / fi2 *703;
        var z = parseFloat(c).toFixed(1);
        var sup="2";
        var fi3 = fi2/703;
        document.getElementById("output").innerHTML= z+" lbs/in"+sup.sup();
        document.getElementById("rweight").style.backgroundColor="green";
        var w = parseInt(18.5*fi3);
        var w2 = parseInt(25*fi3);
        document.getElementById("normal").innerHTML= "Your Normal weight should be from";
        document.getElementById("normal").style.color= "white";
        document.getElementById("nweight").innerHTML= 1+w+"lbs to ";
        document.getElementById("nweight2").innerHTML= w2-1+"lbs";
    }
    else if(x == "Kg" && y == "cm"){
        var a = parseFloat(document.getElementById("weight").value);
        var b = parseFloat(document.getElementById("height").value);
        var fm = b *0.01; 
        var fm2 = fm*fm;
        var c = a / fm2;
        var z = parseFloat(c).toFixed(1);
        var sup="2";
        document.getElementById("output").innerHTML= z+" kg/m"+sup.sup();
        document.getElementById("rweight").style.backgroundColor="green";
        var w = parseInt(18.5*fm2);
        var w2 = parseInt(25*fm2);
        document.getElementById("normal").innerHTML= "Your Normal weight should be from";
        document.getElementById("normal").style.color= "white";
        document.getElementById("nweight").innerHTML= 1+w+"kg to ";
        document.getElementById("nweight2").innerHTML= w2-1+"kg";
    }
    else if(x == "Pound" && y == "cm"){
        var a = parseFloat(document.getElementById("weight").value);
        var b = parseFloat(document.getElementById("height").value);
        var fi = b *0.393701; 
        var fi2 = fi*fi;
        var c = a / fi2 *703;
        var z = parseFloat(c).toFixed(1);
        var sup="2";
        var fi3 = fi2/703;
        document.getElementById("output").innerHTML= z+" lbs/in"+sup.sup();
        document.getElementById("rweight").style.backgroundColor="green";
        var w = parseInt(18.5*fi3);
        var w2 = parseInt(25*fi3);
        document.getElementById("normal").innerHTML= "Your Normal weight should be from";
        document.getElementById("normal").style.color= "white";
        document.getElementById("nweight").innerHTML= w+"lbs to ";
        document.getElementById("nweight2").innerHTML= w2+"lbs";
    }
    else{
        document.getElementById("normal").innerHTML= "Kindly, Select the weight and height conversion";
        document.getElementById("normal").style.color= "black";
    }
    if(z<18.5){
        document.getElementById("rresult").style.color="darkred";
        document.getElementById("rresult").innerHTML= "You are under-weight!";
        document.getElementById("output").style.color="darkred";
    }
    else if (z>=18.5 && z<25) {
        document.getElementById("rresult").style.color="green";
        document.getElementById("rresult").innerHTML= "Your Weight is Normal!";
        document.getElementById("output").style.color="green";
    } else if(z>=25 && z<30) {
        document.getElementById("rresult").style.color="darkred";
        document.getElementById("rresult").innerHTML= "You are over weight!";
        document.getElementById("output").style.color="darkred";
    }
    else if(z>=30 && z<35){
        document.getElementById("output").style.color="darkred";
        document.getElementById("rresult").style.color="darkred";
        document.getElementById("rresult").innerHTML= "Your Weight is in class 1 (low-risk) Obesity which means<br>Your health could be in risk of:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. hypertension<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. coronary artery disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. congestive heart failure<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. stroke<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. asthma<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. pulmonary embolism<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. gallbladder disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. several types of cancer<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. osteoarthritis<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10. chronic back pain.";
    }
    else if(z>=35 && z<=40){
        document.getElementById("output").style.color="darkred";
        document.getElementById("rresult").style.color="darkred";
        document.getElementById("rresult").innerHTML= "Your Weight is in class 2 (moderate-risk) Obesity which means<br>Your health could be in risk of:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. hypertension<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. coronary artery disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. congestive heart failure<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. stroke<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. asthma<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. pulmonary embolism<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. gallbladder disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. several types of cancer<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. osteoarthritis<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10. chronic back pain.";
    }
    else if(z>40){
        document.getElementById("rresult").style.color="darkred";
        document.getElementById("output").style.color="darkred";
        document.getElementById("rresult").innerHTML= "Your Weight is in class 3 (high-risk) Obesity which means<br>Your health could be in risk of:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. hypertension<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. coronary artery disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. congestive heart failure<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. stroke<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. asthma<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. pulmonary embolism<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. gallbladder disease<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. several types of cancer<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. osteoarthritis<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10. chronic back pain.";
    }
    else{
      document.getElementById("rtitle").innerHTML= null;
    }
}
</script>