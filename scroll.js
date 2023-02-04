window.addEventListener("scroll",function(){
    //console.log(window.scrollY);
    if(window.scrollY>=208){
        // console.log("Yo whuddup!");
        header.style.backgroundColor="#55A9B2";
    }else{
        header.style.backgroundColor="hsla(100,0%,0%,25%)";
    }
})