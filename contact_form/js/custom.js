function validate_form(){
    let name =  document.getElementById('name').value.trim();
 
    if (name == "") {
        document.querySelector('.form-status').innerHTML = "Name cannot be empty";
        return false;
    }
    
    let email =  document.getElementById('email').value.trim();
    if (email == "") {
        document.querySelector('.form-status').innerHTML = "Email cannot be empty";
        return false;
    } 
    
    let subject =  document.getElementById('subject').value.trim();
    if (subject == "") {
        document.querySelector('.form-status').innerHTML = "Subject cannot be empty";
        return false;
    }

    let message =  document.getElementById('message').value.trim();
    if (message == "") {
        document.querySelector('.form-status').innerHTML = "Message cannot be empty";
        return false;
    }

    document.querySelector('.form-status').innerHTML = "The message has been sent.";
    document.querySelector('#form-popup').style.display = 'none';
}

function popup_toogle(){
    let display_settings = document.querySelector('#form-popup').style.display;

    document.querySelector('#form-popup').style.display = (display_settings == "" || display_settings == 'none') ? 'flex' : 'none';
}