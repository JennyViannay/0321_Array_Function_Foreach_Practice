function burgerMenuFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function darkModeFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}