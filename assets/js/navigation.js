function navMenuFadein() {
    navMobileLinkContainer.style.top = "80px"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadeout()")
    navMobileLinkBackground.style.display = "block"
}
function navMenuFadeout() {
    navMobileLinkContainer.style.top = "-100%"
    navMobileMenuIcon.setAttribute("onclick", "navMenuFadein()")
    navMobileLinkBackground.style.display = "none"
}