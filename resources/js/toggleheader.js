const header = document.getElementById('toggled-header');
const navItems = document.getElementById('nav-items');

const isMobile = () => {
    return ( ( window.innerWidth <= 800 ) && ( window.innerHeight <= 600 ) );
}

/**
 * 
 */
const smoothNavbar = () => {
    /**
     * 
     */
    const scrolled = document.documentElement.scrollTop;

    if( !isMobile() ){
        
        const toggled = scrolled >= 114 ? true : false;

        if ( toggled ) {

            header.classList.remove('sm:bg-transparent');
            header.classList.add('sm:py-0');
            
        }else{

            header.classList.add('sm:bg-transparent');
            header.classList.remove('sm:py-0');

        }
    }
}

window.addEventListener('scroll', e => smoothNavbar());