let btn_suppression = document.querySelectorAll(".btn-suppression");
        
btn_suppression.forEach(supprimer => {
    supprimer.addEventListener("click", function(e){

        e.preventDefault();
        let id_formation = supprimer.getAttribute("data-id");
        
        let answer = confirm("Vous confirmer la suppréssion cette formation ?");
        if(answer == true){

            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status){
                    
                    let result = this.response;
                    if(result.success == 1){
                        location.replace('dashboards/Supprimer');
                    }
                }
                else if(this.readyState == 4){
                    alert("Une erreur est survenue...");                    
                }
            }
            xhr.open("POST", "controllers/Crtl/Ctrl_Delete.php", true);
            xhr.responseType = "json";
            xhr.setRequestHeader("Content-type", "application/json");
            xhr.send("id_formation=" + id_formation);
        }

    })
});