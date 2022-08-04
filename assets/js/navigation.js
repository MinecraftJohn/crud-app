function navMenuFadein() {
    navMobileLinkContainer.style.top = "80px"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadeout()")
    navMobileLinkBackground.style.display = "block"
}

function navMenuFadeout() {
    navMobileLinkContainer.style.top = "-240px"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadein()")
    navMobileLinkBackground.style.display = "none"
}

// Account Menu Functions
function navAccountMenuFadein() {
    navLinkButton.setAttribute("onclick", "navAccountMenuFadeout()")
    navAccountContainer.style.display = "block"
}

function navAccountMenuFadeout() {
    navLinkButton.setAttribute("onclick", "navAccountMenuFadein()")
    navAccountContainer.style.display = "none"
}