function startTimer(htmlContainer, timeStamp) {
    const day = 86400
    const hour = 3600
    const min = 60

    let seconds, minutes, hours, days;
    setInterval(function () {
        seconds = timeStamp
        days = Math.floor(seconds / day)
        seconds = seconds % day
        hours = Math.floor(seconds / hour)
        seconds = seconds % hour
        minutes = Math.floor(seconds / min)
        seconds = seconds % min
        htmlContainer.innerHTML = `<span>${days}</span>days <span>${hours}</span>hours <span>${minutes}</span>:<span>${seconds}</span>`
        timeStamp --
    }, 1000);
}

window.onload = function () {
    const htmlContainer = document.querySelector('.timer h6');
    startTimer(htmlContainer, htmlContainer.dataset.current);
};