const logoutSel = document.getElementById('triggerLogout');
if(logoutSel !== null) {
    logoutSel.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
}

