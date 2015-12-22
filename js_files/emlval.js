function emailValidation(field){
    
    var eml = document.getElementById("email");
    
    if (eml == "")
        return "Please enter a valid email address!\n";
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0_9.@_-]/.test(field))
        return "The email address is not valid!\n";
}