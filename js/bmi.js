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
        document.getElementById("nweight").innerHTML= 1+w+"kg to ";
        document.getElementById("nweight2").innerHTML= w2-1+"kg";
    }
    else{
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
        document.getElementById("nweight").innerHTML= w+"lbs to ";
        document.getElementById("nweight2").innerHTML= w2+"lbs";
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
        document.getElementById("output").innerHTML= "Alien";
        document.getElementById("output").style.color="blue";
        document.getElementById("rresult").innerHTML= "You are not human!";
    }
}