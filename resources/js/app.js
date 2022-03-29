var router = document.getElementsByName('routeName')[0].getAttribute('content');

import 'bootstrap/dist/js/bootstrap.bundle.min';

require('./bootstrap');

document.addEventListener('DOMContentLoaded', function () {
    document.getElementsByClassName('lk-' + router)[0].classList.add('mm-active');
});

