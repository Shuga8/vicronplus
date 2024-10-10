const dropDownLinks = document.querySelectorAll(".dropdown-links");
const arrowIcons = document.querySelectorAll(".arrow-icon");
const headerDrop = document.querySelector("#header-drop");
const aside = document.querySelector(".aside");

function toggleDropDown(index) {
    let indexNum = parseInt(index);
    dropDownLinks[indexNum].classList.toggle("active-dropdown");
    console.log(arrowIcons[index].textContent);
    if (dropDownLinks[indexNum].classList.contains("active-dropdown")) {
        const contentHeight = dropDownLinks[indexNum].scrollHeight + "px";
        dropDownLinks[indexNum].style.height = contentHeight;
        arrowIcons[indexNum].textContent = "keyboard_arrow_up";
    } else {
        dropDownLinks[indexNum].style.height = "0px";
        arrowIcons[indexNum].textContent = "keyboard_arrow_down";
    }
}

function toggleHeaderDrop() {
    if (headerDrop.classList.contains("block")) {
        headerDrop.classList.replace("block", "hidden");
    } else if (headerDrop.classList.contains("hidden")) {
        headerDrop.classList.replace("hidden", "block");
    }
}

function toggleAsideVisisbilty() {
    aside.classList.toggle("active");
}
