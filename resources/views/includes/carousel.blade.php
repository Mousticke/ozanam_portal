<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div id="slider1" class="item active">
            <img class="first-slide" src="{{URL::to('src/css/images/image-slider1.png')}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div id="slider1" class="item">
            <img class="second-slide" src="{{URL::to('src/css/images/image-slider1.png')}}" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div id="slider1" class="item">
            <img class="third-slide" src="{{URL::to('src/css/images/image-slider1.png')}}" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
