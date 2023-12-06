function find(){
 errors= document.getElementsByClassName('zxc');
 for(var item of errors){
 item.innerHTML="";
 }
}
function put(id,error){
element =document.getElementById(id);
console.log(element);
element.getElementsByClassName('zxc')[0].innerHTML=error;
}
function validateForm(){
 
var r=true;
find();
var get_name = document.forms['myfrom']['name'].value;
var get_pin = document.forms['myfrom']['pincode'].value;
var get_email = document.forms['myfrom']['email'].value;
var get_mob = document.forms['myfrom']['mob'].value;

if(get_name==null || get_name==""){
 put("name1","Name can not empty");
 r=false;
}
else if(!isNaN(get_name)){
put("name1","please only charctor");
r=false;   
}
else if(get_name.charCodeAt(0)<97){
    put("name1","put first charctor small ");
    r= false; 
}

if(get_pin==null || get_pin==""){
    put("pin1","pin can not empty");
    r= false;
}
else if(get_pin.length<6 || get_pin.length>6){
    put("pin1","put the correct pin code");
    r=false; 
}
else if(isNaN(get_pin)){
    put("pin1","please only digit");
    r =false;
}

if(get_email==null ||get_email=="" ){
put("email1","email can not empty");
r= false;
}
else if(get_email.charAt(get_email.length-4)!="." || get_email.charAt(get_email.length-10)!="@"){
    put("email1","please fill the currect Email");
    r =false;
}

if(get_mob==null || get_mob==""){
    put("mobile1","mobile can not empty");
    r=false;   
}
else if(get_mob.length<10 || get_mob.length>10 ){
    put("mobile1","please fill the currect mobile no");
    r=false;  

}
else if(isNaN(get_mob)){
    put("mobile1","please only digit");
    r=false;   
}
return r;
}