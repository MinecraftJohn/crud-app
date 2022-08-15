function navMenuFadein() {
    navMobileContainer[0].style.top = "80px"
    navIcon[0].setAttribute("onclick", "navMenuFadeout()")
    navMobileBackground[0].style.display = "block"
    navMobileBackground[0].style.background = "rgba(0, 0, 0, 0.75)"
}

function navMenuFadeout() {
    navMobileContainer[0].style.top = "-240px"
    navIcon[0].setAttribute("onclick", "navMenuFadein()")
    navMobileBackground[0].style.display = "none"
    navMobileBackground[0].style.background = "none"
}