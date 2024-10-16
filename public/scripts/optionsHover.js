const options = document.querySelectorAll('.about__options__item');

for(const element of options)
{
    element.addEventListener('mouseover', (event) => {
        const currentElementId = event.target.id.replaceAll('-img', '').replaceAll('-text', '');
        const image = document.querySelector('#' + currentElementId + '-img');
        if(image)
        {
            image.src = './assets/' + currentElementId + '_white.png';
        }
    });

    element.addEventListener('mouseout', (event) => {
        const currentElementId = event.target.id.replaceAll('-img', '').replaceAll('-text', '');
        const image = document.querySelector('#' + currentElementId + '-img');
        if(image)
        {
            image.src = './assets/' + currentElementId + '.png';
        }
    })
}