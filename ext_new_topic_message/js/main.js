var popUpId = 'popup-confirm-window';

/**
 * Show confirm dialog window
 */
function show_confirm(link) {
    var existPopup = document.getElementById(popUpId);

    if( existPopup ) {
        existPopup.style.display = 'block';

        var ln = existPopup.getElementsByClassName('popup-accept');
        ln[0].setAttribute('href', link.getAttribute('href'));
    }
}

/**
 * Drop confirm popup window
 * @returns {boolean}
 */
function drop_confirm() {
    window.location.href = '/forum';
}