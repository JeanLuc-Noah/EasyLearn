let container_form = document.querySelector(".group-form");
let block_msg = document.querySelector(".block-msg");

container_form.addEventListener("submit", function(e){
    e.preventDefault();

    let data = new FormData(this);
    
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let result = this.response;

            if(result.success ==1){
                location.replace('dashboard/'+result.msg);
            }
            else if(result.success == 2){
                location.replace("dashboards/" + result.msg);
            }
            else{
                block_msg.innerHTML = result.msg;
            }
        }
        else if(this.readyState == 4){
            alert("Une erreur est survenue...");
        }
    }
    xhr.open("POST","controllers/Crtl/Ctrl_Login.php", true);
    xhr.responseType = "json";
    xhr.send(data);
})