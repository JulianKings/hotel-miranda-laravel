const elementList = document.querySelectorAll('.room__details');

elementList.forEach((element) => {
    if(element.tagName.toLowerCase() !== 'span')
    {
        element.addEventListener('mouseover', (event) => {
            const content = event.target.innerHTML;
            const replaced = content.replaceAll('Booking Now', 'Book Now');
            event.target.innerHTML = replaced;
        });

        element.addEventListener('mouseout', (event) => {
            const content = event.target.innerHTML;
            const replaced = content.replaceAll('Book Now', 'Booking Now');
            event.target.innerHTML = replaced;
        })
    }
})