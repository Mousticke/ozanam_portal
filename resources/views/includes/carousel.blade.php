<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><img class="img-responsive thumbnail"
                                                                                src="{{URL::to('slider/slider1-thumb.jpg')}}">
            </li>
            <li data-target="#myCarousel" data-slide-to="1"><img class="img-responsive thumbnail"
                                                                 src="{{URL::to('slider/slider1-thumb.jpg')}}"></li>
            <li data-target="#myCarousel" data-slide-to="2"><img class="img-responsive thumbnail"
                                                                 src="{{URL::to('slider/slider1-thumb.jpg')}}"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="slide-image">
                            <a href="#">
                                <img class="first-slide" src="{{URL::to('src/css/images/image-slider1.png')}}"
                                     alt="First slide">
                            </a>
                        </div>
                        <!--CONTROLLER ANGULAR MODAL-->
                        <div class="slide-content">
                            <blockquote><p>Vu des chambres du Lycée Ozanam</p></blockquote>
                            <!-- <button class="btn icon-btn btn-info">
                                <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                Lire plus
                            </button> -->
                            <!--TODO : Modal boostrap lire plus-->
                        </div>
                    </div>
                </div>
            </div>
            @foreach($carousels as $carousel)
                <div class="item">
                    <div class="container">
                        <div class="slide-wrapper">
                            <div class="slide-image">
                                <a href="#">
                                    <img class="first-slide" src="{{URL::to('src/css/images/image-slider2.png')}}"
                                         alt="First slide">
                                </a>
                            </div>
                            <!--CONTROLLER ANGULAR MODAL-->
                            <div class="slide-content">
                                <blockquote><p>{!! html_entity_decode($carousel->body) !!}.
                                        <em>Par {{$carousel->user->first_name}}</em></p></blockquote>
                                <!--TODO : Modal boostrap lire plus-->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
