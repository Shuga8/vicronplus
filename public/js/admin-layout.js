const dropDownLinks = document.querySelectorAll(".dropdown-links");
const arrowIcons = document.querySelectorAll(".arrow-icon");

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
