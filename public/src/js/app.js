/**
 * Created by Akim on 03/05/2016.
 */

var ArticleContent, ArticleTitle, ArticleImage, ArticleLink, ArticleDate, ArticleFile = null;

$(".modal").on("hidden.bs.modal", function(){
    $(".modal_contentArticle").find("#title_actu").html("");
    $(".modal_contentArticle").find("#content_actu").html("");
    $(".tab-content").find("#tab_1-1").html("");
    $(".tab-content").find("#tab_2-2").html("");
});

$(".readmore").on('click', function (event) {
    event.preventDefault();
    ArticleDate = event.target.parentNode.parentNode.dataset['date'];
    ArticleContent = event.target.parentNode.parentNode.dataset['content'];
    ArticleTitle = event.target.parentNode.parentNode.dataset['title'];
    //ArticleImage = event.target.parentNode.parentNode.dataset['img'];
    ArticleImage = event.target.parentNode.parentNode.getAttribute("data-img");

    if(event.target.parentNode.parentNode.getAttribute("data-img") == ""){
        ArticleImage = 'slider/slider1.jpg';
    }

    ArticleLink = event.target.parentNode.parentNode.getAttribute("data-link");
    var arr = ArticleLink.split(',');

    ArticleFile = event.target.parentNode.parentNode.getAttribute("data-file");
    var arr2 = ArticleFile.split(',');

    for (var i = 0; i < arr.length; i++) {
        console.log(arr[i]);
        $(".tab-content").find("#tab_1-1").append(arr[i] + '<br>');
    }

    for (var j = 0; j < arr2.length; j++) {
        console.log(arr2[j]);
        $(".tab-content").find("#tab_2-2").append(arr2[j] + '<br>');
    }

    console.log(ArticleContent);
    console.log(ArticleTitle);
    console.log(ArticleImage);
    console.log(ArticleDate);

    $('#image_actu').attr('src', ArticleImage);

    $(".modal-title").find("#date").text(ArticleDate);
    $(".modal_contentArticle").find("#title_actu").html(ArticleTitle);
    $(".modal_contentArticle").find("#content_actu").html(ArticleContent);
    console.log($(".modal_contentArticle").find("#content_actu").html(ArticleContent));
    $('#actualite_display').modal();
});

$(".card__share > a").on('click', function (e) {
    e.preventDefault(); // prevent default action - hash doesn't appear in url
    $(this).parent().find('div').toggleClass('card__social--active');
    $(this).toggleClass('share-expanded');
});

/*Tooltip menu header*/
$('[data-toggle="tooltip_menu"]').tooltip({
    placement: 'top'
});

$(".modal-wide").on("show.bs.modal", function() {
    var height = $(window).height() - 200;
    $(this).find(".modal-body").css("max-height", height);
});

$('div[data-toggle="tooltip_rss"]').tooltip({
    animated: 'fade',
    placement: 'top',
    html: true,
});

$(window).scroll(function() {
    if ($(window).scrollTop() > 1) {
        $('.nav-head').css('top', '0 ');
        console.log('scollé');
    } else {
        $('.nav-head').css('top', '100px');
    }
});
