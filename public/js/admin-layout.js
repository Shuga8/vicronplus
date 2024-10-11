const dropDownLinks = document.querySelectorAll(".dropdown-links");
const arrowIcons = document.querySelectorAll(".arrow-icon");
const headerDrop = document.querySelector("#header-drop");
const aside = document.querySelector(".aside");
const sideBarAnchors = document.querySelectorAll(".sidebar-anchor");
const sideBarDropDowns = document.querySelectorAll(".dropdown-list");
let pathName = window.location.pathname;
const globalUrl = "http://127.0.0.1:8000";
const basePath = `${globalUrl}`; // add a trailing slash to ensure a proper match
const relativePath = pathName.replace(new RegExp(`^${basePath}`), "");

function toggleDropDown(index) {
    let indexNum = parseInt(index);
    dropDownLinks[indexNum].classList.toggle("active-dropdown");
    if (dropDownLinks[indexNum].classList.contains("active-dropdown")) {
        const contentHeight = dropDownLinks[indexNum].scrollHeight + "px";
        dropDownLinks[indexNum].style.height = contentHeight;
        console.log(contentHeight);
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

function setActiveSideBarDropDowns() {
    sideBarDropDowns.forEach((dropdown, index) => {
        let upper_path = dropdown.getAttribute("data-url");

        if (relativePath.includes(upper_path)) {
            const dropBtn = dropdown.querySelector(".dropdownBtn");
            dropBtn.classList.replace("hover:bg-white", "bg-white");
            dropBtn.classList.replace("hover:bg-opacity-10", "bg-opacity-10");
            dropDownLinks[index].classList.add("active-dropdown");
            if (dropDownLinks[index].classList.contains("active-dropdown")) {
                dropDownLinks[index].style.height = "auto";
                arrowIcons[index].textContent = "keyboard_arrow_up";
                const links = dropDownLinks[index].querySelectorAll("a");
                links.forEach((anchor, aIndex) => {
                    let path = anchor.getAttribute("href");
                    path = path.replace(new RegExp(`^${basePath}`), "");

                    if (path == relativePath) {
                        anchor.classList.replace("hover:bg-white", "bg-white");
                        anchor.classList.replace(
                            "hover:bg-opacity-10",
                            "bg-opacity-10"
                        );
                    }
                });
            }
        }
    });
}

setActiveSidebarAnchor();
setActiveSideBarDropDowns();
