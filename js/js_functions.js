//

//Validate captcha submit
function captcha_check()
{
    if(parseInt(document.getElementById("a").innerHTML)+parseInt(document.getElementById("b").innerHTML)!=parseInt(document.getElementById("c").value))
    {
    document.getElementById("a").innerHTML=parseInt(Math.floor((Math.random() * 10) + 1));
    document.getElementById("b").innerHTML=parseInt(Math.floor((Math.random() * 100) + 11));
    alert("Are you a robot!!. Check captcha");
    return false;    
    }
    else if(document.getElementById("email").value==""){alert("email missing"); return false;}
    else if(document.getElementById("name").value==""){alert("Name missing"); return false;}
    else if(document.getElementById("comment").value==""){alert("comments missing"); return false;}
       
    return true;    
}

//add new page form
function update_level()
{
var e = document.getElementById("level_sel");
var value = e.options[e.selectedIndex].value;

 if(document.getElementById("root").checked==true)
 {
    document.getElementById("level_sel").disabled=true;
    document.getElementById("level").value=0;
 }
 else
 {
 document.getElementById("level_sel").disabled=false;
 document.getElementById("level").value=value; 
 }
}


