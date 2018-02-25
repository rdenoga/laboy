$(document).ready(function () {

    $('div#booking select#book-des').hide();
    $('div#booking select#book-dp').change(function (e) { 
        e.preventDefault();
        if(this.value=='1'){
        $('#book-des').show();}
        else{
        	$('#book-des').hide();
        }

    });
});




