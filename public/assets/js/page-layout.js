const header = document.querySelector(".header");

let previousY = window.scrollY;

window.addEventListener("scroll", function () {
    const currentY = window.scrollY;

    if (currentY < 150) {
        if (header.classList.contains("sticky-header")) {
            header.classList.remove("sticky-header");
        }
    } else {
        if (currentY > previousY) {
            previousY = currentY;
            if (header.classList.contains("sticky-header")) {
                header.classList.remove("sticky-header");
            }
        } else {
            previousY = currentY;
            if (previousY < 5) {
                if (header.classList.contains("sticky-header")) {
                    header.classList.remove("sticky-header");
                    return;
                }
            }
            if (!header.classList.contains("sticky-header")) {
                header.classList.add("sticky-header");
            }
        }
    }
});
