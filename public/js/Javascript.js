//get modal element
var logbox = document.getElementById('modal');
//get open modal button
var modalbtn = document.getElementById('modalbtn1');
//get close btn
var closebtn = document.getElementsByClassName('closebtn')[0];

//function to open modal
if(modalbtn){
  modalbtn.onclick = function(){
    logbox.style.display = 'block';
  }
}

//function to close modal
closebtn.onclick = function (){
  document.getElementById('login_error').value = "";
    document.getElementById('login_email').value = "";
    document.getElementById('login_password').value = "";
    logbox.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == logbox) {
      logbox.style.display = "none";
    }
  }
  //get modal element
var Regbox = document.getElementById('popup');
//get open modal button
var popupbtn = document.getElementById('popupbtn1');
//get close btn
var closebtn = document.getElementsByClassName('closebtn')[0];

//function to open modal
if(popupbtn){
  popupbtn.onclick = function(){
    Regbox.style.display = 'block';
  }
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == Regbox) {
      Regbox.style.display = "none";
    }
  }