const inputpwd = document.querySelectorAll('input[type=password]');
const chkbox = document.querySelectorAll('.chkbox');

function showPassword(e) {
    inputpwd.forEach(function (item) {
        if (item.type === 'password') {
            item.type = "text";
        }
        else {
            item.type = "password";
        }
    })
}


if (chkbox) {
    chkbox.forEach(item => item.addEventListener('click', showPassword))
}

