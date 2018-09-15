$(function(){
    $('.modal_ajax').on('click', function(e){
        //Bloquei o link do elemento .modal_ajax
        e.preventDefault();
        
        //Abre o modal na tela
        $('.modal').html('Carregando...');
        $('.background_modal').show();
        
        //Puxar o conteudo do modal que esta no arquivo adicionar.php
        var links = $(this).attr('href');//<a> = adicionar.php - <a> = editar.php
        
        $.ajax({
            url:links,
            type:'GET',
            success:function(html) {
                $('.modal').html(html);
            }
        });
    });
    //Fecha o model quando clica na img
    $('img').on('click', function(){
        $('.button').hidden();
    });
});


