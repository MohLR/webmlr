function showMessage(){
    var hiddenElement = document.getElementById("hidden-message")
    if(hiddenElement.style.display === 'block'){
        hiddenElement.style.display = 'none';
    } else {
        hiddenElement.style.display = 'block';
    } 
}