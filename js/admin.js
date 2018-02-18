$(document).ready(function () {
    alert('ready');

    $('div#booking select#book-dp').change(function (e) { 
        e.preventDefault();
        
        alert('change! gawin mo dito')
    });
});