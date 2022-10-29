const header = document.getElementById('toggled-header');

window.menuAPI = {};

menuAPI.headerNotActivated = true;
/**
 * 
 * 
 */
const isMobile = () => {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

/**
 * 
 */
const smoothNavbar = () => {
    /**
     * 
     */
    const scrolled = document.documentElement.scrollTop;

    menuAPI.headerNotActivated = scrolled < 120;

    if( !isMobile() ){

        if ( menuAPI.headerNotActivated ) {
            
            header.classList.add('sm:bg-transparent');
            header.classList.remove('sm:py-0');

            return menuAPI.headerNotActivated;

        }
            
        header.classList.remove('sm:bg-transparent');
        header.classList.add('sm:py-0');
    }
}

window.addEventListener('scroll', e => smoothNavbar());