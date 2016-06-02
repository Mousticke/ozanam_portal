/**
 * Created by Akim on 03/05/2016.
 */
var postId, actuId = 0;
var postBodyElement, actuBodyElement, ArticleContent, ArticleTitle, ArticleImage, ArticleLink, ArticleDate, ArticleFile = null;
/*
 $('.postArticle').find('.interaction').find('.edit').on('click', function(event){
 event.preventDefault();

 postBodyElement = event.target.parentNode.parentNode.childNodes[1];
 var postBody = postBodyElement.textContent;
 postId = event.target.parentNode.parentNode.dataset['postid'];
 $("#post-body").val(postBody);
 $('#edit-modal').modal();
 });

 $('#modal-save').on('click', function(){
 $.ajax({
 method: 'POST',
 url: urlEdit,
 data: {
 body: $("#post-body").val(),
 postId: postId,
 _token: token
 }
 })
 .done(function(msg){
 $(postBodyElement).text(msg['new_body']);
 $('#edit-modal').modal('hide');
 });
 });
 */
/*
$('.shadowDepth1').find('.actu_content').find('.readmore').on('click', function (event) {
    alert('ouverture');
    event.preventDefault();
    $('#actualite_display').modal();
});
*/
$(".modal").on("hidden.bs.modal", function(){
    $(".modal_contentArticle").find('#title_actu').html("");
    $(".modal_contentArticle").find('#content_actu').html("");
});

$('.readmore').on('click', function (event) {
    event.preventDefault();
    ArticleDate = event.target.parentNode.parentNode.dataset['date'];
    ArticleContent = event.target.parentNode.parentNode.dataset['content'];
    ArticleTitle = event.target.parentNode.parentNode.dataset['title'];
    //ArticleImage = event.target.parentNode.parentNode.dataset['img'];
    ArticleImage = event.target.parentNode.parentNode.getAttribute('data-img');

    ArticleLink = event.target.parentNode.parentNode.getAttribute('data-link');
    var arr = ArticleLink.split(',');

    ArticleFile = event.target.parentNode.parentNode.getAttribute('data-file');
    var arr2 = ArticleFile.split(',');
    
    for (var i = 0; i < arr.length; i++) {
        console.log(arr[i]);
        $('#link_actu').attr('href', ArticleLink);
        $('#link_actu').text('Lien numéro : '+ i +'.');
    }

    for (var j = 0; j < arr2.length; j++) {
        console.log(arr2[j]);
        $('#file_actu').attr('href', ArticleFile);
        $('#file_actu').text('Ficher : '+ j +'.');
    }

    console.log(ArticleContent);
    console.log(ArticleTitle);
    console.log(ArticleImage);
    console.log(ArticleDate);
    //alert('ouverture');
    $('#image_actu').attr('src', ArticleImage);

    /*$(".modal_contentArticle").find('#attach_media').append('<img src="' + ArticleImage + '" id="image_actu" ' +
        'style="max-height: 400px; max-width: 500px;" ' +
        'alt="img_modal" ' +
        'class="center_image_modal">'
    );*/
    $(".modal-title").find('#date').text(ArticleDate);
    $(".modal_contentArticle").find('#title_actu').html(ArticleTitle);
    $(".modal_contentArticle").find('#content_actu').html(ArticleContent);
    console.log($(".modal_contentArticle").find('#content_actu').html(ArticleContent));
    $('#actualite_display').modal();
});

$('.card__share > a').on('click', function (e) {
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

/*

(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);


$(function(){
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        $.createModal({
            title:'Exemple',
            message: iframe,
            closeButton:true,
            scrollable:false
        });
        return false;
    });
});

    */
