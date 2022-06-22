let form = document.querySelector(".container-form");
let msg_error = document.querySelector(".msg-error");

form.addEventListener("submit", function(e){
    e.preventDefault();  

    /**
     * Appelle des methodes asynchrones
     */
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let reponses = this.response;
            if(reponses.success == 1){
                msg_error.classList.add("succes");
                msg_error.innerHTML = reponses.msg + '! <a href="Login">connectez-vous maintenant</a>';
            }
            else{
                msg_error.innerHTML = reponses.msg;
            }
            
        }
        else if(this.readyState == 4){
            alert("Une erreur est survenue...");
        }
    }
    xhr.open("POST","controllers/Crtl/Ctrl_Formulaire.php", true);
    xhr.responseType = "json";
    let data = new FormData(this);
    xhr.send(data);
})