 <script>
function showUser() {
    var x = document.forms["myForm"]["title_text_1"].value;
    var y = document.forms["myForm"]["title_pic_1"].value;
    var z = document.forms["myForm"]["main_text_1"].value;
    var str = x+"/"+y+"/"+z;
    console.log(str);
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forms.php?q="+str,true);
        xmlhttp.send();
    }

 }
// ########################################################################
 function edit(){
     var x2= document.forms["myForm_1"]["title_text_2"].value;
    var y2 = document.forms["myForm_1"]["title_pic_2"].value;
    var z2 = document.forms["myForm_1"]["main_text_2"].value;
    var str = x2+"/"+y2+"/"+z2;
   
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_1").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?p="+str,true);
        xmlhttp.send();
    }

 }
//###################################################################
function edit1(){
     var x3= document.forms["myForm_2"]["title_text_3"].value;
    var y3 = document.forms["myForm_2"]["title_pic_3"].value;
    var z3 = document.forms["myForm_2"]["main_text_3"].value;
    var str = x3+"/"+y3+"/"+z3;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_2").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?k="+str,true);
        xmlhttp.send();
    }

 }
//###################################################################
function edit2(){
     var x4= document.forms["myForm_3"]["title_text_4"].value;
    var y4 = document.forms["myForm_3"]["title_pic_4"].value;
    var z4 = document.forms["myForm_3"]["main_text_4"].value;
    var str = x4+"/"+y4+"/"+z4;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_3").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?b="+str,true);
        xmlhttp.send();
    }
 }
//##########################################################
function edit3(){
     var x5= document.forms["myForm_4"]["title_text_5"].value;
    var y5 = document.forms["myForm_4"]["title_pic_5"].value;
    var z5 = document.forms["myForm_4"]["main_text_5"].value;
    var str = x5+"/"+y5+"/"+z5;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_4").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?a="+str,true);
        xmlhttp.send();
    }

 }
//###################################################################
function edit4(){
     var x6= document.forms["myForm_5"]["title_text_6"].value;
    var y6 = document.forms["myForm_5"]["title_pic_6"].value;
    var z6 = document.forms["myForm_5"]["main_text_6"].value;
    var str = x6+"/"+y6+"/"+z6;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_5").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?c="+str,true);
        xmlhttp.send();
    }
 }
function changPass(){
    var x9= document.forms["myForm_10"]["oldPass"].value;
    var y9 = document.forms["myForm_10"]["newPass"].value;
    var z9 = document.forms["myForm_10"]["rnewPass"].value;
    var str = x9+"/"+y9+"/"+z9;
  if (str == "") {
        document.getElementById("txtHint_7").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_7").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?d="+str,true);
        xmlhttp.send();
    }
     var x9= document.forms["myForm_10"]["oldPass"].value="";
    var y9 = document.forms["myForm_10"]["newPass"].value="";
    var z9 = document.forms["myForm_10"]["rnewPass"].value="";
}

function delettext(){
     var id= document.forms["blogForm"]["delbutt"].value;
      var str = id;
       console.log(str);
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint_20").innerHTML = xmlhttp.responseText;
            }
        };
         
        xmlhttp.open("GET","forms.php?id="+str,true);
        xmlhttp.send();
    }

 }
</script>
 