/**
 * Created by Akim on 13/05/2016.
 */
var postId = 0;
var postBodyElement, NameElement, LinkElement, IconElement, VisibilityElement = null;

$('.post').find('.interaction').find('.editAdmin').on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var content =tinyMCE.activeEditor.getContent($.htmlDecodeAttr(event.target.parentNode.parentNode.dataset['content']));
    alert(content);
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
    NameElement = $("tr").children(".name_site");
    LinkElement = $("tr").children(".link-site");
    IconElement = $("tr").children(".icon-site");
    VisibilityElement = $("tr").children(".menu_visibility");
    //NameElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes.childNodes[1];
    //LinkElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[3];
    var SiteName = NameElement.textContent;
    var SiteLink = LinkElement.textContent;
    var SiteIcon = IconElement.html();
    var SiteVisibility = VisibilityElement.textContent;
    postId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['postid'];
    $("#new_name_site").val(SiteName);
    $("#new_link_site").val(SiteLink);
    $("#new_icon_site").val(SiteIcon);
    $("#new_visibility_site").val(SiteVisibility);
    $('#edit-modal-menu').modal();
});

$('#modal-saveMenu').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlMenu,
        data: {
            new_name_site: $("#new_name_site").val(),
            new_link_site : $('#new_link_site').val(),
            new_icon_site : $('#new_icon_site').val(),
            new_visibility_site : $('#new_visibility_site').val(),
            postId: postId,
            _token: token
        }
    })
        .done(function (msg) {
            $(NameElement).text(msg['new_name_update']);
            $(LinkElement).text(msg['new_link_update']);
            $(IconElement).text(msg['new_icon_update']);
            $(VisibilityElement).text(msg['new_visibility_update']);
            $('#edit-modal-menu').modal('hide');
        });
});


$('.wpmse_select2').select2();