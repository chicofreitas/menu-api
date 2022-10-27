const header = document.getElementById('toggled-header');
const navItems = document.getElementById('nav-items');

let toggled = false;
/**
 * 
 */
const smoothNavbar = () => {
    /**
     * 
     */
    const scrolled = document.documentElement.scrollTop;

    if ( (scrolled >= 114) ) {

        if (toggled === false) {
            header.classList.toggle('bg-white');
            header.classList.toggle('sm:py-0');
            navItems.classList.toggle('dark:text-gray-600');
            toggled = true;
        }
        
    }else{
        header.classList.remove('bg-white');
        header.classList.remove('sm:py-0');
        navItems.classList.remove('dark:text-gray-600');
        toggled = false;
    }
}

window.addEventListener('scroll', e => smoothNavbar());