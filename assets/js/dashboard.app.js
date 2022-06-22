/*-------------------------------------------------------------*\
                    ONGLET DE NAVIGATION
\*-------------------------------------------------------------*/
let btn_popup_search = document.querySelector(".btn-popup-search");
let container_popup_search = document.querySelector(".container-popup-search");
let close_search_overlay = document.querySelector(".close-search-overlay");
let container__overlay_popupSearch = document.querySelector(".container--overlay-popupSearch");
let dataUser = document.querySelector(".data-user");

btn_popup_search.addEventListener("click", ()=>{
    container_popup_search.classList.add("active");
    close_search_overlay.style.display="block"
})
close_search_overlay.addEventListener("click", ()=>{
    container_popup_search.classList.remove("active")
    close_search_overlay.style.display="none";
})
container__overlay_popupSearch.addEventListener("click", ()=>{
    container_popup_search.classList.remove("active")
    close_search_overlay.style.display="none";
})

/*-------------------------------------------------------------*\
                    ONGLET DE NAVIGATION
\*-------------------------------------------------------------*/
let tabs_contents = document.querySelectorAll(".tabs-content");
let link_onglets = document.querySelectorAll(".link-onglet");
let index =0;

let afficher = function(e){
    if(e.classList.contains("active")){
        return false
    }
    else{
        e.classList.add("active");
    }
    index = e.getAttribute("data-onglet");
    link_onglets.forEach(onglet_data => {
        if(onglet_data.getAttribute('data-onglet') != index){
            onglet_data.classList.remove("active")
        }
    });

    tabs_contents.forEach(contenus_onglet =>{
        if(contenus_onglet.getAttribute("data-onglet") == index){
            contenus_onglet.classList.add("active");
        }
        else{
            contenus_onglet.classList.remove("active");
        }
    })
}

link_onglets.forEach(liens => {
    liens.addEventListener("click", (e)=>{
        afficher(liens);
    })
});

let hash =  dataUser.getAttribute("data-user") + window.location.hash;

link_onglets.forEach((liens, index) =>{
    if(hash != null && liens.getAttribute('href') == hash){
        afficher(liens)
    }
})