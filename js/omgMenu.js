
document.addEventListener("click", (e) => {
    
    const $btnMenu = document.getElementById("btnmenu"),
        $omgMenu = document.getElementById("omgmenu"),
        $link = document.getElementsByClassName(".link")

    if(e.target === $btnMenu){
        $omgMenu.classList.toggle("show");
    } else {
        $omgMenu.classList.remove("show");
    }

    if(e.target === $link) $omgMenu.classList.remove("show");
    
});