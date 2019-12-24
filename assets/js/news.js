$(document).ready(function () {
    var url = 'https://newsapi.org/v2/top-headlines?' +
        'sources=google-news-br' +
        '&apiKey=1a7df728459345648450694b45c57962';

    $.ajax({
        url: url,
        type: 'get',
    }).done(function(data) {
        data.articles.forEach(function (index) {
            var autor         = index.author == null ? ' desconhecido' : ' ' + index.author;
            var titulo        = index.title;
            var descricao     = index.description;
            var link          = index.url;

            if(link.indexOf('https') == -1){
                link.replace('http', 'https');
            }

            var imagem        = index.urlToImage;

            if(imagem.indexOf('https') == -1){
                imagem.replace('http', 'https');
            }

            var diaPublicacao = index.publishedAt;
            var conteudo      = index.content;

            var corpoNoticia =
                '<a class="noticia" href="' + link + '">' +
                '<img src="' + imagem + '">' +
                '<div>' +
                '<h2>' + titulo + '</h2>'+
                '<p>' +  descricao + '</p>' +
                '<span class="date">' + diaPublicacao + ' - Autor:' + autor + '</span>' +
                '</div>' +
                '</a>';

            $('.content-noticias').append(corpoNoticia);
        });
        // data.each(function (index) {

        // });
    });
});

