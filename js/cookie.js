window.onload = function() {
    var cookiePopup = document.getElementById('cookiePopup');
    var acceptCookies = document.getElementById('acceptCookies');

    if (document.cookie.indexOf('cookie_consent=accepted') === -1) {
        cookiePopup.style.display = 'block';
    }

    acceptCookies.onclick = function() {
        document.cookie = 'cookie_consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 UTC; path=/';
        cookiePopup.style.display = 'none';
    };
};

