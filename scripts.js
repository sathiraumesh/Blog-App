
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

console.log(blogHeaders);

for(var i=0;i<blogHeaders.length;i++){

    console.log(blogHeaders[i].innerHTML);

}


