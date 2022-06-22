CKEDITOR.replace( 'editor1' );


//Traitement de formulaire
let container_form = document.querySelector(".group-form");
let container_msg = document.querySelector(".container-msg");

container_form.addEventListener("submit", function(e){
    e.preventDefault();

    //Données du formulaire
    let data = new FormData(this);
    
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            
            

            let result = this.response;
            container_msg.innerHTML = result.msg;
            
            if(result.success){
              
            }
                
        }
        else if(this.readyState == 4){
            alert("Une erreur une survenue....");
        }
    }
    xhr.open("POST", "controllers/Crtl/Ctrl_forum.php", true);
    xhr.responseType ="json";
    xhr.send(data);

    return false;
})