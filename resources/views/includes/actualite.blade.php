<div class="col-lg-8 col-lg-offset-2"><!---->
    <div class="row posts">
        <div ng-cloak>
            <div class="md-padding" layout-xs="column" layout="row">
                <div flex-xs flex-gt-xs="100" layout="row">
                    @foreach($posts as $key=>$post)
                        @if($post->id != 1)
                            <div class="info-box card radius shadowDepth1 bg-{{$post->color}}" data-actuid="{{ $post->id }}"
                                 data-title="{{$post->titre}}" data-img="{{$post->image_actu}}" data-content="{{$post->body}}"
                                 data-date="{{date('d M Y' ,strtotime($post->created_at))}}" data-link = " @foreach($links as $link)
                            @if($link->post_id == $post->id)
                            @if(str_contains($link->body , '.fr') || str_contains($link->body , '.com') || str_contains($link->body , '.org') || str_contains($link->body , '.net'))
                            @if(starts_with($link->body , 'wwww.'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(starts_with($link->body , 'http://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(starts_with($link->body , 'https://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(!starts_with($link->body , 'https://') && !starts_with($link->body , 'http://') && !starts_with($link->body , 'www.'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @endif
                            @else
                            @if(starts_with($link->body , 'wwww'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(starts_with($link->body , 'http://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(starts_with($link->body , 'https://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(!starts_with($link->body , 'https://') && !starts_with($link->body , 'http://') && !starts_with($link->body , 'www.'))
                                    <a class='custom-color-a-link' href='http://www.{{$link->body}}.fr'>http://www.{{$link->body}}.fr</a>,
                                    @endif
                            @endif
                            @endif
                            @endforeach "
                                 data-file = "@foreach($files as $key3=>$file)
                                 @if($file->post_id == $post->id)
                                         <a class='custom-color-a-file' href='{{URL::to($file->body)}}'>Fichier joint {{$key3}}</a>,
                                 @endif
                                 @endforeach "
                            >
                                <div class="bg-{{$post->color}} actu_content">
                                    <div class="card_header_actu bg-blue">
                                        <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                        <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                    </div>
                                    @if($post->image_actu != null)
                                        <div class="resume_bio">
                                            <a class="img-actu card__image border-tlr-radius">
                                                <img style="height: 250px;" src="{{URL::to($post->image_actu)}}" alt="image" class="border-tlr-radius">
                                            </a>
                                        </div>
                                    @else
                                        <div class="resume_bio">
                                            <a class="img-actu card__image border-tlr-radius">
                                                <img style="height: 250px;" src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="card__content card__padding">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="{{$post->facebook_post}}"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="{{$post->twitter_post}}"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="{{$post->google_post}}"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>
                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>
                                    </div>
                                    <article class="card__article">
                                        @if(strlen(html_entity_decode($post->body))>47)
                                            {{--*/ $resume = substr(html_entity_decode($post->body),0, 100) /*--}}
                                            <div style="text-indent: 20px !important;" class="contentArticle article_cut">
                                                {!! html_entity_decode($resume) !!}  <em>...</em> </div>
                                            <div style="display: none;text-indent: 20px !important;" class="contentArticle article_full">
                                                {!! html_entity_decode($post->body) !!}  <em>...</em> </div>
                                        @else
                                            <div style="text-indent: 20px !important;" class="contentArticle article_full">{!! html_entity_decode($post->body) !!}</div>
                                        @endif
                                    </article>

                                </div>
                                <div class="readme_center">
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                                <!--MODAL-->

                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.actualite_includes.modal_actu')

<div class="clearfix"></div>
<div class="row">
@include('includes.actualite_includes.social_actu')
</div>

<div class="clearfix"></div>
