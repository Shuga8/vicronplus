const headerDrop = document.querySelector("#header-drop");

function toggleHeaderDrop() {
    if (headerDrop.classList.contains("block")) {
        headerDrop.classList.replace("block", "hidden");
    } else if (headerDrop.classList.contains("hidden")) {
        headerDrop.classList.replace("hidden", "block");
    }
}
