const aside = document.querySelector(".aside");

function togglePageAsideBar(e){
    aside.classList.remove("shimmer-out");
    aside.classList.replace("hidden", "flex");
    aside.classList.add("shimmer-in");
    
}

function closePageAside(){
    aside.classList.remove("shimmer-in");
    aside.classList.add("shimmer-out");
    
    setTimeout(() => {
        aside.classList.replace("flex", "hidden");
        aside.classList.remove("shimmer-out");
        
    }, 700);
}