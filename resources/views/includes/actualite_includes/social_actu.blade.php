<div>
    <div class="box-tools pull-right">
        <button style="color: red;" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
    <h5 style="border-bottom: 4.0px solid rgb(1,88,157);background-image: none;padding-bottom: 0;">
            <span style="width: 90.0%;max-width: 210.0px;padding: 10.0px 0 6.0px 15.0px;display: block;color: white;
                        background-color: rgb(1,88,157);"><span class="fa fa-wifi"></span> Social</span>
    </h5>
</div>
<div layout="row" class="col-lg-offset-1 box-body" layout-sm="column" layout-xs="column">
    <div flex-md="60" flex-xl="50" flex-xs="100" flex-sm="100"  flex="50" style=" margin-right: 45px;"><!--class="posts col-lg-offset-2"-->
        <!--Flux RSS-->
        <div id="articleNew" ><!--col-xs-7--><!--class="col-lg-5 col-sm-6"-->
            <div class="small-box info-box bg-orange" style="border-top-right-radius: 1em;">
                <span class="info-box-icon"><i class="fa fa-rss"></i></span>
                <div class="info-box-content">
                    <div class="panel-heading">Flux RSS</div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    @include('includes.actualite_includes.rssFeed')
                </div>
            </div>
        </div>
    </div>
    <div flex-md="60" flex-xl="40" flex-xs="100" flex-sm="100" flex="50"><!--col-xs-offset-4 col-md-offset-4 col-sm-offset-4--><!--class="posts col-lg-offset-6"-->
        <!--Actu Facebook-->
        <div id="articleNew" ><!--col-xs-7--><!--class="col-lg-8 col-sm-6"-->
            <div class="small-box info-box bg-blue" style="border-top-right-radius: 1em;">
                <span class="info-box-icon"><i class="fa fa-facebook"></i></span>
                <div class="info-box-content">
                    <div class="panel-heading">Fil d'actualité Facebook</div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOzanamLyceeChalons%2F%3Ffref%3Dts&tabs=timeline&width=400&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=152007268286" width="400" height="400" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
