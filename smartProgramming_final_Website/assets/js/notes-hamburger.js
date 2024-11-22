document
    .getElementById("notes-hamburger-btn")
    .addEventListener("click", function () {
        document.getElementById("notes-sidebar").classList.toggle("active");
    });

document
    .getElementById("notes-sidebar-close-btn")
    .addEventListener("click", function () {
        document.getElementById("notes-sidebar").classList.remove("active");
    });