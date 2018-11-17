<?php 
require('value.php');
    session_start();
    if(!isset($_SESSION['username']))
   {
 echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='loginprocess.php';
    </SCRIPT>";
    }
   else
   {
    $var1=$_SESSION['username'];
    $var3=$_SESSION['cart'];
    $var2='logout';
    $link1='myaccount.php';
    $cartlink='cart.php';
    $log='logout.php';
    $logv='logout';
    $prov='My Profile';
    $pro='myaccount.php';
    }
?>
<body>

<div class="form">    
<h1>Doctor Prescription </h1>

<form action="tablet.php" method="post">
<input class="box box1" type="email" name="email"  id="to" placeholder="Email Address" />
<textarea class="box box2" name="drug" id="chat" placeholder="Medicine Name"></textarea>
<textarea class="box box3" name="msg" placeholder="Type your Message" id="msg"></textarea>
<input class="box button" type="submit"  value="Send" />
</form> 
</div>

</body>
<style type="text/css">

.form{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 100%;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form h1{
    background: #43D1AF;
    padding: 30px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.box
{
    width: 100%;
    background: #fff;
    margin-bottom: 2%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.box1 {
    height: 30px;
}
.box2 {
    height: 100px;
}
.box3 {
    height: 150px;
}
.box
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.button{
    width: 100%;
    padding: 1.7%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    color: #fff;
}
.button:hover{
    background: #2EBC99;
}
</style>

<script>
function showUser() {
var str=document.getElementById("chat").value; 
var str2=document.getElementById("to").value; 
var str3=document.getElementById("msg").value; 
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
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","tablet.php?a="+str+"&b="+str2+"&c="+str3,true);
        xmlhttp.send();
    }
}
</script>