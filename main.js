$(document).ready(function(){

    var is_php = true;

    var radios = $('input:radio[name=call]');
    if(radios.is(':checked') === false) {
        radios.filter('[value=php]').prop('checked', true);
    };

    $('#ajax').hide();
    $('#php').show();

    $(radios).on('change', function(){
        if(radios.val()=='php'){
            radios.val('ajax');
            is_php = false;
            $('#php').hide();
            $('#ajax').show();
            $('h1').text('Brani caricati tramite chiamata AJAX');
        }
        else{
            radios.val('php');
            is_php = true;
            $('#ajax').hide();
            $('#php').show();
            $('h1').text('Brani caricati tramite file PHP');
        }
        console.log(radios.val());
        console.log(is_php);
    });

    const source = $("#card").html();
    const template = Handlebars.compile(source);

    $.ajax({
        url: 'dischi_ajax.php',
        method: 'GET',
        success: function(data){
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                var context = {
                    poster: data[i].poster,
                    title: data[i].title,
                    genre: data[i].genre,
                    author: data[i].author,
                    year: data[i].year,
                };
                var html = template(context);
                $('#ajax').append(html);
            }
        },
        error: function(){
            console.log('errore');
        }
    });



});
