
document.getElementById('signup').onclick=function(){

    // alert("signup clicked");
    location.href="./signup.php"
}


function checkPassword(){
    alert("submit is clicked");
   var passwordOne= document.getElementById('password').value;
   var passwordTwo= document.getElementById('confirmpassword').value;

   if(passwordOne==passwordTwo){
 
       return true;
   }
   else{
      
       return false;
   }
}

