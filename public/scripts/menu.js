const menuIcon = document.querySelector('.header__content__menu');
const menuContainer = document.querySelector('.header__navlist');

menuIcon.addEventListener('click', (event) => alternateMenu(event.target));
menuIcon.addEventListener('blur', (event) => {
    const target = event.target;
 
    if(target.getAttribute('data-open-menu') && target.getAttribute('data-open-menu') === 'open')
    {
        target.src = './assets/menu.png';
        target.style.height = '0.81rem';
        target.style.width = '1.25rem';
        target.style['margin-right'] = '0';
        target.setAttribute('data-open-menu', 'closed');
        
        target.classList.toggle('header__content__menu--cross', false);
        menuContainer.classList.toggle('header__navlist--open', false);
    }
});

function alternateMenu(target)
{
    if(target.getAttribute('data-open-menu') && target.getAttribute('data-open-menu') === 'open')
    {
        target.src = './assets/menu.png';
        target.setAttribute('data-open-menu', 'closed');
        target.classList.toggle('header__content__menu--cross', false);
        menuContainer.classList.toggle('header__navlist--open', false);
    } else {
        target.src = './assets/cross.png';
        
        target.setAttribute('data-open-menu', 'open');
        target.classList.toggle('header__content__menu--cross', true);
        menuContainer.classList.toggle('header__navlist--open', true);
    }
}

const menuContent = document.querySelector('.header__content');
let roundedPercentage = 0;;

document.addEventListener('scroll', () => {
    const percentage = ((document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight) * 100);
    roundedPercentage = Math.round(percentage);     

    if(roundedPercentage > 7)
    {
        menuContent.classList.toggle('header__content--hidden', true);
    } else {
        menuContent.classList.toggle('header__content--hidden', false);
        menuContent.classList.toggle('header__content--toggle', false);
        menuContent.classList.toggle('header__content--toggle-off', false);
    }
});

document.onmousemove = (event) => {
    const { clientX, clientY } = event;
    const desktopNav = document.querySelector('.header__desktop-navlist');
    const menuCont = document.querySelector('.header__desktop-navlist');
    
    if(clientY < 150)
    {
        if(desktopNav && menuCont && roundedPercentage > 7)
        {
            // We're on desktop
            menuContent.classList.toggle('header__content--toggle', true);
            menuContent.classList.toggle('header__content--toggle-off', false);
        }

    } else {
        if(desktopNav && menuCont && roundedPercentage > 7)
        {
            // We're on desktop
            menuContent.classList.toggle('header__content--toggle', false);
            menuContent.classList.toggle('header__content--toggle-off', true);
        }
    }
}