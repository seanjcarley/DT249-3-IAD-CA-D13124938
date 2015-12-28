var error1 = [];
var error1chk = 6;
var error2 = [];
var error3 = [];
var error4 = [];

function valfnme(){
    var fname = document.forms["form"]["fname"].value;
    if(fname == "" || fname == null){
        document.getElementById("fnameval").style.visibility = "visible";
        error1[0] = 0;
    }else{
        document.getElementById("fnameval").style.visibility = "hidden";
        error1[0] = 1;
    }
}
    
function valsnme(){
    var sname = document.forms["form"]["sname"].value;
    if(sname == "" || sname == null){
        document.getElementById("snameval").style.visibility = "visible";
        error1[1] = 0;
    }else{
        document.getElementById("snameval").style.visibility = "hidden";
        error1[1] = 1;
        }
}
    
function valeml(){
    var email = document.forms["form"]["email"].value;
    if(email == "" || email == null){
        document.getElementById("emailval").style.visibility = "visible";
        document.getElementById("emailval").innerHTML = "**Please enter your email**";
        error1[2] = 0;
    }else if(!((email.indexOf(".") > 0) && (email.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(email)){
        document.getElementById("emailval").style.visibility = "visible";
        document.getElementById("emailval").innerHTML = "**Please enter a valid email address**";
        error1[2] = 0;
    }else{
        document.getElementById("emailval").style.visibility = "hidden";
        error1[2] = 1;
    }
}
    
function valunme(){
    var uname = document.forms["form"]["uname"].value;
    if(uname == "" || uname == null){
        document.getElementById("unameval").style.visibility = "visible";
        document.getElementById("unameval").innerHTML = "**Please enter your username**";
        error1[3] = 0;
    }else if(/[^a-zA-Z0-9_-]/.test(uname)){
        document.getElementById("unameval").style.visibility = "visible";
        document.getElementById("unameval").innerHTML = "**Only alphanumeric characters, '-', <br/> and '_' can be used in your username**";
        error1[3] = 0;
    }else if (uname.length < 6){
        document.getElementById("unameval").style.visibility = "visible";
        document.getElementById("unameval").innerHTML = "**Username must be at least 6 characters long**";
        error1[3] = 0;
    }else{
        document.getElementById("unameval").style.visibility = "hidden";
        error1[3] = 1;
    }
}
    
function valpwrd(){
    var pword = document.forms["form"]["pword"].value;
    if(pword == "" || pword == null){
        document.getElementById("pwordval").style.visibility = "visible";
        document.getElementById("pwordval").innerHTML = "**Please enter your password**";
        error1[4] = 0;
    }else if (!/[a-z]/.test(pword) || !/[A-Z]/.test(pword) || !/[0-9]/.test(pword)){
        document.getElementById("pwordval").style.visibility = "visible";
        document.getElementById("pwordval").innerHTML = "**Passwords must contain at least one uppercase,<br/>one lowercase, and one numeric character**";
        error1[4] = 0;
    }else if (pword.length < 6){
        document.getElementById("unameval").style.visibility = "visible";
        document.getElementById("unameval").innerHTML = "**Username must be at least 6 characters long**";
        error1[4] = 0;
    }else{
        document.getElementById("pwordval").style.visibility = "hidden";
        error1[4] = 1;
    }
}

function valcnf(){
    var conf = document.forms["form"]["conf"].value;
    var pword = document.forms["form"]["pword"].value;
    if(conf == "" || conf == null){
        document.getElementById("confirmval").style.visibility = "visible";
        document.getElementById("confirmval").innerHTML = "**Please confirm your password**";
        error1[5] = 0;
    }else if (pword.localeCompare(conf) != 0){
        document.getElementById("confirmval").style.visibility = "visible";
        document.getElementById("confirmval").innerHTML = "**The passwords do not match**";
        error1[5] = 0;
    }else{
        document.getElementById("confirmval").style.visibility = "hidden";
        error1[5] = 1;
    }
}

function pg1cmp(){
    if(error1[0] + error1[1] + error1[2] + error1[3] + error1[4] + error1[5] == error1chk){
        document.getElementById("button1").style.visibility = "visible";
    }else{
        document.getElementById("button1").style.visibility = "hidden";
    }
}

function pg2cmp(){
    if(error2.length == 6){
        document.getElementById("button2").style.visibility = "visible";
    }
}
function pg3cmp(){
    if(error3.length == 6){
        document.getElementById("button3").style.visibility = "visible";
    }
}
function pg4cmp(){
    if(error1.length == 6){
        document.getElementById("button4").style.visibility = "visible";
    }
}