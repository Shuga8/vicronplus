const headerDrop = document.querySelector("#header-drop");
const aside = document.querySelector(".aside");
const sideBarAnchors = document.querySelectorAll(".sidebar-anchor");
let pathName = window.location.pathname;
const globalUrl = "http://127.0.0.1:8000";
const basePath = `${globalUrl}`;
const relativePath = pathName.replace(new RegExp(`^${basePath}`), "");

function toggleHeaderDrop() {
    if (headerDrop.classList.contains("block")) {
        headerDrop.classList.replace("block", "hidden");
    } else if (headerDrop.classList.contains("hidden")) {
        headerDrop.classList.replace("hidden", "block");
    }
}

function setActiveSidebarAnchor() {
    sideBarAnchors.forEach((anchor) => {
        let path = anchor.getAttribute("href");
        path = path.replace(new RegExp(`^${basePath}`), "");

        if (path == relativePath) {
            anchor.classList.replace("hover:bg-white", "bg-white");
            anchor.classList.replace("hover:bg-opacity-10", "bg-opacity-10");
        }
    });
}

function toggleAsideVisisbilty() {
    aside.classList.toggle("active");
}

setActiveSidebarAnchor();
