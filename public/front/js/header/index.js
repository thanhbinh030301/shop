$('.container .burger-icon').on("click", function () {
    if ($("body").hasClass("menu-open")) {
        closeMenu();
    } else {
        openMenu();
    }
});
$(".menu-overlay").on("click", function () {
    if ($("body").hasClass("menu-open")) {
        closeMenu();
    }
});
function closeMenu() {
    $("body").removeClass("menu-open");
    $(".mobile-nav").insertAfter($(".container.container-logo"));
    $(".mobile-nav").removeClass("mobile-nav").addClass("main-nav");
}
function openMenu() {
    console.log('openMenu');
    $("body").addClass("menu-open");
    $(".main-nav").insertBefore($("#wrapper"));
    $(".main-nav").removeClass("main-nav").addClass("mobile-nav");
}
