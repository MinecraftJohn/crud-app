function navMenuFadein() {
    navMobileLinkContainer.style.top = "80px"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadeout()")
    navMenusBackground.style.display = "block"
    navMenusBackground.style.backgroundColor = "rgba(0, 0, 0, 0.75)"
}

function navMenuFadeout() {
    navMobileLinkContainer.style.top = "-240px"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadein()")
    navLinkButton.setAttribute("onclick", "navAccountMenuFadein()")
    navMenusBackground.style.display = "none"
    navAccountContainer.style.display = "none"
}

// Account Menu Functions
function navAccountMenuFadein() {
    navLinkButton.setAttribute("onclick", "navAccountMenuFadeout()")
    navAccountContainer.style.display = "block"
    navMenusBackground.style.display = "block"
    navMenusBackground.style.backgroundColor = "transparent"
}

function navAccountMenuFadeout() {
    navLinkButton.setAttribute("onclick", "navAccountMenuFadein()")
    navAccountContainer.style.display = "none"
    navMenusBackground.style.display = "none"
    navAccountContainer.style.display = "none"
}