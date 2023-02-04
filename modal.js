//Get the modal
var modal = document.getElementById("cartModal");

//Get the button that openms the modal
var btn = document.getElementById("cartBtn");

//Get the span element that closes the modal
var span = document.getElementsByClassName("close")[0];

//When the user clicks on the button, open the modal
btn.onclick = function(){
    modal.style.display="block";
}

//When the user clicks "close" close the modal
span.onclick = function(){
    modal.style.display="none";
}

//When the user clicks anywhere outside the modal, close it
window.onclick = function(event){
    if(event.target==modal){
        modal.style.display="none";
    }
}