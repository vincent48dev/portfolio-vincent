function verify(){
    var erreurNom = document.querySelector(".erreurnom")
    var nom = document.querySelector("#nom")
    if(nom.value == ""){
        erreurNom.innerHTML= "<u>Veuillez renseigner votre Nom</u>"
        erreurNom.classList.add("color")
    }
    else{
        erreurNom.style.display = "none"
    }
    var erreurprenom = document.querySelector(".erreurprenom")
    var Prenom = document.querySelector("#prenom")
    if(Prenom.value == ""){
        erreurprenom.innerHTML= "<u>Veuillez renseigner votre Prenom</u>"
        erreurprenom.classList.add("color")
    }
    else{
        erreurprenom.style.display = "none"
    }
    var erreurtelephone = document.querySelector(".erreurtelephone")
    var telephone = document.querySelector("#telephone")
    if(telephone.value == ""){
        erreurtelephone.innerHTML= "<u>Veuillez renseigner votre numero de téléphone</u>"
        erreurtelephone.classList.add("color")
    }
    else{
        erreurtelephone.style.display = "none"
    }
    var erreurmail = document.querySelector(".erreurmail")
    var mail = document.querySelector("#mail")
    if(mail.value == ""){
        erreurmail.innerHTML= "<u>Veuillez renseigner votre adresse mail</u>"
        erreurmail.classList.add("color")
    }
    else{
        erreurmail.style.display = "none"
    }
    var erreurmessage = document.querySelector(".erreurmessage")
    var message = document.querySelector("#message")
    if(message.value == ""){
        erreurmessage.innerHTML= "<u>Veuillez adresser un message</u>"
        erreurmessage.classList.add("color")
    }
    else{
        erreurmessage.style.display = "none"
    }

}

