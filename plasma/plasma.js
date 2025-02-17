document.querySelector(".close").addEventListener("click", function () {
    $(".modal").fadeOut();
});

window.addEventListener("click", function (event) {
    if (event.target.classList.contains("modal")) {
        $(".modal").fadeOut();
    }
});