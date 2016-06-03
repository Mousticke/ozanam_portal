<div class="posts col-lg-offset-2">
    <!--Flux RSS-->
    <div id="articleNew" class="col-lg-4"><!--col-xs-7-->
        <div class="small-box info-box bg-orange">
            <span class="info-box-icon"><i class="fa fa-rss"></i></span>
            <div class="info-box-content">
                <div class="panel-heading">Flux RSS</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <ul>
                    @foreach($xml as $feeds)
                        <li>
                            <strong>{{$feeds->title}}</strong>
                            <blockquote>{{$feeds->description}}</blockquote>
                            <strong>Date : {{$feeds->pubDate}}</strong>
                            <strong>Source : {{$feeds->link}}</strong>
                        </li>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="posts col-lg-offset-6"><!--col-xs-offset-4 col-md-offset-4 col-sm-offset-4-->
    <!--Actu Facebook-->
    <div id="articleNew" class="col-lg-8 "><!--col-xs-7-->
        <div class="small-box info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-facebook"></i></span>
            <div class="info-box-content">
                <div class="panel-heading">Fil d'actualité Facebook</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOzanamLyceeChalons%2F%3Ffref%3Dts&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=152007268286" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>