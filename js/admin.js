$(document).ready(function () {
    alert('ready');
    $('div#booking select#book-des').hide();

    $('div#booking select#book-dp').change(function (e) { 
        e.preventDefault();
        if(this.value=='2'){
        $('#book-des').show();}
        else{
        	$('#book-des').hide();
        }

    });
});



