
if(document.getElementById('signup')){

    document.getElementById('signup').onclick=function(){

        // alert("signup clicked");
        location.href="./signup.php";
    }
    
}

if(document.getElementById('login')){

    document.getElementById('login').onclick=function(){

        location.href="./login.php"
    }
}



var blogHeaders=document.getElementsByClassName('blog-headers');
// alert(blogHeaders);

if(document.getElementById("search")){

    document.getElementById("search").onkeyup=function(){
        serachFilter();
        // alert(this.value);

    }
}

function serachFilter(){
    var input = document.getElementById("search");
    var filter=input.value.toUpperCase();
    var blogHeaders=document.getElementsByClassName('blog-headers');
   
    var blogCards=document.getElementsByClassName('blog-cards');
    console.log(blogCards);

    for(var i=0;i<blogHeaders.length;i++){
        
        if((blogHeaders[i].innerHTML.toUpperCase().indexOf(filter))> -1){
           
            
            blogCards[i].style.display="";
            

        }else{
            blogCards[i].style.display="none";
        }
    }

    

}


