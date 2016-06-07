<div layout="row" class="col-lg-offset-2">
    <div  show-gt-sm flex="40" ><!--class="posts col-lg-offset-2"-->
        <!--Flux RSS-->
        <div id="articleNew" ><!--col-xs-7--><!--class="col-lg-5 col-sm-6"-->
            <div class="small-box info-box bg-orange">
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
    <div show-gt-sm flex="40" ><!--col-xs-offset-4 col-md-offset-4 col-sm-offset-4--><!--class="posts col-lg-offset-6"-->
        <!--Actu Facebook-->
        <div id="articleNew" ><!--col-xs-7--><!--class="col-lg-8 col-sm-6"-->
            <div class="small-box info-box bg-blue">
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
