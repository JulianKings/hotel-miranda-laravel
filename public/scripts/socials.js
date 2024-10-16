const imageList = document.querySelectorAll('.socials__image');

imageList.forEach((element) => {
    element.addEventListener('mouseover', (event) => toggleStatus(event.target, true));

    element.addEventListener('mouseout', (event) => toggleStatus(event.target, false))
})

function toggleStatus(target, status)
{
    if(status)
    {
        const oldSource = target.src;
        const parent = target.parentElement;

        if(parent)
        {
            parent.classList.toggle('footer__socials__box--over', true);
        }

        target.src = oldSource.replace('.png', '-white.png');
    } else {
        const oldSource = target.src;
        const parent = target.parentElement;

        if(parent)
        {
            parent.classList.toggle('footer__socials__box--over', false);
        }

        target.src = oldSource.replace('-white.png', '.png');
    }
}