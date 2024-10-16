const DAY_TIME = 24* 60 * 60 * 1000;
const dateTextInput = document.querySelectorAll('.room-detail__calendar__input');
const dateInput = document.querySelectorAll('.room-detail__calendar__dateinput');

dateTextInput.forEach((element) => {
    if(element.id === 'checkin-date-text')
    {
        const currentDate = new Date((new Date()).getTime() + DAY_TIME);
        element.setAttribute('placeholder', formatDate(currentDate));
    } else if(element.id === 'checkout-date-text')
    {
        const currentDate = new Date((new Date()).getTime() + 8 * DAY_TIME);
        element.setAttribute('placeholder', formatDate(currentDate));
    }

    element.addEventListener('change', (event) => {
        const changedInput = event.target;
        const filter = changedInput.value.trim().replaceAll('/', '-').split('-');
        const value = filter[2] + "-" + filter[1] + "-" + filter[0];
        changedInput.value = changedInput.value.match(/^\d{1,2}\/\d{1,2}\/\d{2,4}/) ? formatDate(new Date(Date.parse(value))) : '';
    })
})

dateInput.forEach((element) => {
    element.addEventListener('change', (event) => {
        const changedInput = event.target;

        const textInput = document.querySelector('#' + changedInput.id + '-text');

        if(textInput !== null)
        {
            const selectDate = new Date(changedInput.value);
            textInput.value = formatDate(selectDate);
        }
    })
})

function formatDate(date)
{
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const month = months[date.getMonth()];

    const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const dayName = days[date.getDay()];

    const dayNumber = date.getDate();
    let day = '';
    if(dayNumber === 1)
    {
        day = '1st';
    } else if(dayNumber === 2)
    {
        day = '2nd';
    } else if(dayNumber === 3)
    {
        day = '3rd';
    } else {
        day = dayNumber + 'th';
    }

    const year = date.getFullYear();

    return dayName + ', ' + day + ' ' + month + ' ' + year;
}