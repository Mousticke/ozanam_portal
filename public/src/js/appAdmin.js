/**
 * Created by Akim on 13/05/2016.
 */
var postId = 0;
var postBodyElement, NameElement, LinkElement, IconeElement = null;

$('.post').find('.interaction').find('.editAdmin').on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $("#post-body").val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlEdit,
        data: {
            body: $("#post-body").val(),
            postId: postId,
            _token: token
        }
    })
        .done(function (msg) {
            $(postBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        });
});

$('.menu').find('.interaction').find('.editMenu').on('click', function (event) {
    event.preventDefault();

    NameElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[2];
    // LinkElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[3];
    // IconeElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[3];
    // var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['postid'];
    //$("#post-Menu").val(postBody);
    $('#edit-modal-menu').modal();
});

$('#modal-saveMenu').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlMenu,
        data: {
            name: $("#name").val(),
            link: $('#link').val(),
            postId: postId,
            _token: token
        }
    })
        .done(function (msg) {
            $(NameElement).text(msg['new_name']);
            //   $(LinkElement).text(msg['new_link']);
            $('#edit-modal-menu').modal('hide');
        });
});


$('.wpmse_select2').select2();