
require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()

document.addEventListener("turbolinks:before-cache", function () {
    document.body.querySelectorAll("[t-cabc]").forEach(function (t) {
        if (t.attributes.getNamedItem('t-cabc').value == "true" || t.attributes.getNamedItem('t-cabc').value == "") {
            t.style.display = 'none';
        }
    });
});

require('./livewire-turbolinks');
require('./alpine-turbolinks');
require('alpinejs');

