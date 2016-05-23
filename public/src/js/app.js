/**
 * Created by Akim on 03/05/2016.
 */
var postId, actuId = 0;
var postBodyElement, actuBodyElement = null;
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
$('.shadowDepth1').find('.actu_content').find('.readmore').on('click', function (event) {
    event.preventDefault();
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
