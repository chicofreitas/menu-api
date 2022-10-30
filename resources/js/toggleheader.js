const header = document.getElementById('toggled-header');
const navButton = document.getElementById('nav-button');
/**
 * 
 */
const smoothNavbar = () => {
    /**
     * 
     */
    const scrolled = document.documentElement.scrollTop;

    if (  scrolled < 120 ) {
        
        header.classList.remove('bg-white');
        navButton.classList.add('text-white');
        return;

    }
        
    header.classList.add('bg-white');
    navButton.classList.remove('text-white');
}


window.addEventListener('scroll', e => smoothNavbar());