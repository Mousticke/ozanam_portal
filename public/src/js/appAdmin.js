/**
 * Created by Akim on 13/05/2016.
 */
var postId = 0;
var postBodyElement, NameElement, LinkElement, IconElement, VisibilityElement = null;

$('.post').find('.interaction').find('.editAdmin').on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    //var postBody = postBodyElement.textContent;
    var postIdMCE = event.target.parentNode.parentNode.dataset['content'];
    var postBodyMCE = tinyMCE.activeEditor.setContent(postIdMCE); // overall text
    console.log(postBodyMCE);
    postId = event.target.parentNode.parentNode.dataset['postid'];
    //$("#post-body").val(postBody);
    $("#post-body").val(postBodyMCE);
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

var selectedColor = 'bg-aqua';

$('#color_actu').change(function (){
    $('.result_color').removeClass(selectedColor).addClass('bg-'+$(this).val());
    selectedColor = 'bg-'+$(this).val();
});

$('a[rel=popover_facebook]').popover({
    html: true,
    content : function () {
        return $('#tooltip_facebook').html();
    }
});
$('a[rel=popover_twitter]').popover({
    html: true,
    content : function () {
        return $('#tooltip_twitter').html();
    }
});
$('a[rel=popover_google]').popover({
    html: true,
    content : function () {
        return $('#tooltip_google').html();
    }
});
/*
 $('.popper').popover({
 placement: 'bottom',
 html: true,
 content: function () {
 return $(this).next('.popover-content').html();
 }
 });*/

/*
 $('.text_actu').keyup(function (e) {
 var key_statut = $(this).get('body').getContent();
 $('#target_actu').html(key_statut);
 });*/
/*
 function Refresh_actu() {
 //var value = document.getElementById('new-post').value;
 var value = tinymce.get('new-post').getContent();
 var change = document.getElementById('target_actu');
 change.innerHTML = value;
 }*/

var MAX_LINK = 10;
$('#ajout_actu').on('click', '.addButton', function() {
    var $template = $('#external_links_template'),
        $clone = $template
            .clone()
            .removeClass('hide')
            .removeAttr('id')
            .insertBefore($template),
        $option = $clone.find('[name="external_link"]');
})
    .on('click', '.removeButton', function() {
        var $row    = $(this).parents('.input-group'),
            $option = $row.find('[name="external_link"]');
        // Remove element containing the option
        $row.remove();
    })
    .on('removed.field.fv', function(e, data) {
        if (data.field === 'option[]') {
            if ($('#ajout_actu').find(':visible[name="external_link"]').length < MAX_LINK) {
                $('#ajout_actu').find('.addButton').removeAttr('disabled');
            }
        }
    })
    .on('added.field.fv', function(e, data) {
        // data.field   --> The field name
        // data.element --> The new field element
        // data.options --> The new field options

        if (data.field === 'external_link') {
            if ($('#ajout_actu').find(':visible[name="external_link"]').length >= MAX_LINK) {
                $('#ajout_actu').find('.addButton').attr('disabled', 'disabled');
            }
        }
    });



var MAX_FILES = 10;
$('#ajout_actu').on('click', '.addButton_files', function() {
    var $template = $('#external_files_template'),
        $clone = $template
            .clone()
            .removeClass('hide')
            .removeAttr('id')
            .insertBefore($template),
        $option = $clone.find('[name="external_file"]');
})
    .on('click', '.removeButton_files', function() {
        var $row    = $(this).parents('.input-group'),
            $option = $row.find('[name="external_file"]');
        // Remove element containing the option
        $row.remove();
    })
    .on('removed.field.fv', function(e, data) {
        if (data.field === 'option[]') {
            if ($('#ajout_actu').find(':visible[name="external_file"]').length < MAX_FILES) {
                $('#ajout_actu').find('.addButton_files').removeAttr('disabled');
            }
        }
    })
    .on('added.field.fv', function(e, data) {
        // data.field   --> The field name
        // data.element --> The new field element
        // data.options --> The new field options

        if (data.field === 'external_link') {
            if ($('#ajout_actu').find(':visible[name="external_file"]').length >= MAX_FILES) {
                $('#ajout_actu').find('.addButton_files').attr('disabled', 'disabled');
            }
        }
    });
