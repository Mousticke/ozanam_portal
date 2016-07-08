/**
 * Created by Akim on 13/05/2016.
 */
var postId, accessId = 0;
var ClasseNameElement, ClasseStudentElement, ClasseGroupeElement, postBodyElement, NameElement, LinkElement, IconElement, VisibilityElement, UserName, UserEmail, UserPoste, UserPassword, accessBodyElement = null;

$(".modal").on("hidden.bs.modal", function() {
    $(".classe_title").find("#classe_name").html("");
    $(".classe_student").find("#eleves").html("");
});
$('.classe_details').find('.interaction').find('.classes').on('click', function (event) {
    event.preventDefault();
    ClasseNameElement =  event.target.parentNode.parentNode.parentNode.dataset['classename'];
    ClasseGroupeElement =  event.target.parentNode.parentNode.parentNode.dataset['classegroupe'];
    postId = event.target.parentNode.parentNode.parentNode.dataset['classeid'];

    ClasseStudentElement = event.target.parentNode.parentNode.parentNode.getAttribute("data-classestudent");
    var arr = ClasseStudentElement.split(',');
    for (var i = 0; i < arr.length; i++) {
        $(".table").find("#eleves").append('<tr><td>' + arr[i] + '</td></tr>');
    }
    console.log(ClasseNameElement);
    console.log(ClasseGroupeElement);
    $(".classe_title").find("#classe_name").text(ClasseNameElement);
    $(".classe_info").find("#UtP").text(ClasseGroupeElement);
    $('#classe_display').modal();
});

$('.post').find('.interaction').find('.editAdmin').on('click', function (event) {
    event.preventDefault();
    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postIdMCE = event.target.parentNode.parentNode.dataset['content'];
    var postBodyMCE = tinyMCE.activeEditor.setContent(postIdMCE); // overall text
    console.log(postBodyMCE);
    postId = event.target.parentNode.parentNode.dataset['postid'];
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


$('.access').find('.interaction').find('.editAccess').on('click', function (event) {
    event.preventDefault();
    accessBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var accessIdMCE = event.target.parentNode.parentNode.dataset['content'];
    var accessBodyMCE = tinyMCE.activeEditor.setContent(accessIdMCE); // overall text
    console.log(accessBodyMCE);
    accessId = event.target.parentNode.parentNode.dataset['accessid'];
    $("#access-body").val(accessBodyMCE);
    $('#edit-modal-access').modal();
});

$('#modal-save-access').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlAccess,
        data: {
            body: $("#access-body").val(),
            accessId: accessId,
            _token: token
        }
    })
        .done(function (msg) {
            $(accessBodyElement).text(msg['access-body-update']);
            $('#edit-modal-access').modal('hide');
        });
});


$('.menu').find('.interaction').find('.editMenu').on('click', function (event) {
    event.preventDefault();
    NameElement = $("tr").children(".name_site");
    LinkElement = $("tr").children(".link-site");
    IconElement = $("tr").children(".icon-site");
    VisibilityElement = $("tr").children(".menu_visibility");
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

$('.list-users').on('click', function(e){
    $('a.active').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
    UserName = e.target.parentNode.dataset['name'];
    UserEmail = e.target.parentNode.dataset['email'];
    UserPoste = e.target.parentNode.dataset['poste'];
    UserPassword = e.target.parentNode.dataset['password'];

    $(".detailsUser").find("#UserNameDetails").text(UserName);
    $(".detailsUser").find("#UserEmailDetails").text(UserEmail);
    $(".detailsUser").find("#UserPosteDetails").text(UserPoste);
    $(".detailsUser").find("#UserPasswordDetails").text(UserPassword);
    $('.detail').css('display', 'block');
});

$('.wpmse_select2').select2();

$('#titre_access').on('keyup', function () {
    console.log('Modification du titr ' + $('#titre_access').val());
    var value = $('#titre_access').val();
    var change = document.getElementById('target_access_title');
    change.innerHTML = value;
});

var selectedColor = 'bg-aqua';

var selectedIcon = "fa fa-newspaper-o";

$('#icon_access').on('keyup',function (){
    $('.result_icon_access').removeClass(selectedIcon).addClass('fa fa-'+$(this).val());
    selectedIcon = 'fa fa-'+$(this).val();
});

$('#color_access').change(function (){
    $('.result_color_access').removeClass(selectedColor).addClass('bg-'+$(this).val());
    selectedColor = 'bg-'+$(this).val();
});

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

$('#ajout_actu')
    //LINKS
    .on('click', '.addButton', function() {
        $('#external_links').
        after(
            '<div id="external_links" class="input-group"> ' +
            '<span class="input-group-addon" id="basic-addon6"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span> ' +
            '<div class="col-lg-8"> ' +
            '<input type="text" aria-describedby="basic-addon6" class="form-control"' +
            ' name="external_link[]" id="external_link" title="Liens externes" placeholder="Liens externes "/> ' +
            '</div> ' +
            '<div class="append col-xs-4"> ' +
            '<button type="button" class="btn btn-default removeButton_link"><i class="fa fa-minus"></i></button> ' +
            '</div> ' +
            '</div>');
    })
    .on('click', '.removeButton_link', function() {
        var $row = $(this).parents('#external_links');
        $row.remove();
    })

    //FILES
    .on('click', '.addButton_files', function() {
        $('#external_files').
        after(
            '<div id="external_files" class="input-group"> ' +
            '<span class="input-group-addon" id="basic-addon7"><i class="fa fa-file" aria-hidden="true"></i></span> ' +
            '<div class="col-lg-8"> ' +
            '<input type="file" aria-describedby="basic-addon7" class="form-control"' +
            ' name="external_file[]" id="external_file" title="Fichier externe" placeholder="Fichier externe "/> ' +
            '</div> ' +
            '<div class="append col-xs-4"> ' +
            '<button type="button" class="btn btn-default removeButton_files"><i class="fa fa-minus"></i></button> ' +
            '</div> ' +
            '</div>');
    })
    .on('click', '.removeButton_files', function() {
        var $row = $(this).parents('#external_files');
        $row.remove();
    });
