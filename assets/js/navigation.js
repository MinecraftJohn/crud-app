function navMenuFadein() {
    navMobileLinkContainer[0].style.top = "80px"
    navMobileMenuIcon[0].setAttribute("onclick", "navMenuFadeout()")
    navMenusBackground[0].style.display = "block"
    navMenusBackground[0].style.backgroundColor = "rgba(0, 0, 0, 0.75)"
}

function navMenuFadeout() {
    navMobileLinkContainer[0].style.top = "-240px"
    navMobileMenuIcon[0].setAttribute("onclick", "navMenuFadein()")
    navLinkButton[0].setAttribute("onclick", "navAccountMenuFadein()")
    navMenusBackground[0].style.display = "none"
    navAccountContainer[0].style.display = "none"
}

// Account Menu Functions
function navAccountMenuFadein() {
    navLinkButton[0].setAttribute("onclick", "navAccountMenuFadeout()")
    navAccountContainer[0].style.display = "block"
    navMenusBackground[0].style.display = "block"
    navMenusBackground[0].style.backgroundColor = "transparent"
}

function navAccountMenuFadeout() {
    navLinkButton[0].setAttribute("onclick", "navAccountMenuFadein()")
    navAccountContainer[0].style.display = "none"
    navMenusBackground[0].style.display = "none"
    navAccountContainer[0].style.display = "none"
}