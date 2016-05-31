<div class="input-group {{ $errors->has('facebook_actu') ? 'has-error ' : '' }}">
    <span style="background-color: #3b5998; color: white;" class="input-group-addon" id="basic-addon2">
        <a rel="popover_facebook" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
    </span>
    <div id="tooltip_facebook" class="hide">
        @include('admin.includes.tooltip.facebook')
    </div>
    <div class="col-lg-8">
        <input type="url" aria-describedby="basic-addon2" class="form-control"
               name="facebook_actu" id="facebook_actu" title="Lier un post Facebook : "
               placeholder="Lier un post Facebook : ex: https://www.facebook.com/OzanamLyceeChalons/posts/1771994209696235:0. Cliquez sur l'icône pour savoir comment faire">
    </div>
</div>

<div class="input-group {{ $errors->has('twitter_actu') ? 'has-error ' : '' }}">
    <span style="background-color: #1da1f2; color: white;" class="input-group-addon" id="basic-addon3">
        <a rel="popover_twitter" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
    </span>
    <div id="tooltip_twitter" class="hide">
        @include('admin.includes.tooltip.twitter')
    </div>
    <div class="col-lg-8">
        <input type="url" aria-describedby="basic-addon3" class="form-control"
               name="twitter_actu" id="twitter_actu" title="Lier un post Twitter : " placeholder="Lier un post Twitter : ex: https://twitter.com/Exemple/status/Exemple. Cliquez sur l'icône pour savoir comment faire">
    </div>
</div>

<div class="input-group {{ $errors->has('google_actu') ? 'has-error ' : '' }}">
    <span style="background-color: #d32f2f; color: white;" class="input-group-addon" id="basic-addon4">
        <a rel="popover_google" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
            <i class="fa fa-google-plus" aria-hidden="true"></i>
        </a>
    </span>
    <div id="tooltip_google" class="hide">
        @include('admin.includes.tooltip.google')
    </div>
    <div class="col-lg-8">
        <input type="url" aria-describedby="basic-addon4" class="form-control"
               name="google_actu" id="google_actu" title="Lier un post Google + : " placeholder="Lier un post Google + : ex: https://plus.google.com/exemple/posts/exemple. Cliquez sur l'icône pour savoir comment faire">
    </div>
</div>
