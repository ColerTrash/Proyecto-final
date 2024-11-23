document.addEventListener("DOMContentLoaded", () => {
    const perfilDropdown = document.querySelector("#perfiles");
    const ulDropdown = document.querySelectorAll("ul");
    let active = false;
    if (perfilDropdown) {
        perfilDropdown.addEventListener("click", () => {
            if (active == false) {
                ulDropdown.forEach((ul)=>{
                    ul.style.display = "block";
                    active = true;
                })
            }else{
                ulDropdown.forEach((ul)=>{
                    ul.style.display = "none";
                    active = false;
                })
            }
            
        });
    } else {
        console.error("El elemento con ID 'perfiles' no se encontró.");
    }
});