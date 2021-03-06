<div class="col-lg-9 col-lg-offset-2">
    @include('includes.actualite_includes.acces')
    <div class="row posts" >
        <div class="box" style="background-color: transparent; border: 1px solid white; box-shadow: 0 0 8px #565656;" ng-cloak>
            <div>
                <div class="box-tools pull-right">
                    <button style="color: red;" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <h5 style="border-bottom: 4.0px solid rgb(1,88,157);background-image: none;padding-bottom: 0;">

                    <span style="width: 90.0%;max-width: 210.0px;padding: 10.0px 0 6.0px 15.0px;display: block;color: white;
                        background-color: rgb(1,88,157);"><span class="fa fa-newspaper-o"></span> Actualités
                    </span>
                </h5>
            </div>
            <div layout="row" layout-wrap class="col-lg-offset-1 box-body ">
                <!--<div flex="100" flex-gt-xs="100" flex-sm="50" >-->
                @foreach($posts as $key=>$post)
                    @if($post->id != 1 && ((strtotime($post->publish_at) >= strtotime(date('Y-m-d'))) && (strtotime(date('Y-m-d')) < strtotime($post->delete_at)) || $post->delete_at == null) && ($post->groupe_id==null || $post->groupe_id==$post->user->groupe_id || $post->user->groupe_id==5))
                        <div flex-gt-sm="30" flex-md="30" flex-lg="30" flex-sm="30" class="small-box info-box card radius shadowDepth1 bg-{{$post->color}}" data-actuid="{{ $post->id }}"
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
                                    <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du : {{date('d M Y' ,strtotime($post->created_at))}}</span>
                                    <span class="info-box-number">{{$post->titre}}</span>
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
                                <div class="block-mid-area"></div>
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
                                <article style="padding-left: 20px !important;" class="card__article">
                                    <span  class="info-box-number">{{$post->titre}}</span>
                                    @if(strlen(html_entity_decode($post->body))>94)
                                        {{--*/ $resume = substr(html_entity_decode($post->body),0, 150) /*--}}
                                        <div style="text-indent: 20px !important;" class="contentArticle article_cut">
                                            {!! html_entity_decode($resume) !!}  </div>
                                        <div style="display: none;text-indent: 20px !important;" class="contentArticle article_full">
                                            {!! html_entity_decode($post->body) !!} </div>
                                    @else
                                        <div style="text-indent: 20px !important;" class="contentArticle article_full">{!! html_entity_decode($post->body) !!}</div>
                                    @endif
                                </article>
                            </div>
                            <div style="padding-top: 90px;"></div>
                            <div class="readme_center small-box-footer">
                                <a href="#" class="readmore">
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

@include('includes.actualite_includes.modal_actu')

<div class="clearfix"></div>
<div class="col-lg-9 col-lg-offset-2">
<div class="row box" style="background-color: #ededed; border: 1px solid white; box-shadow: 0 0 8px #565656;">
    @include('includes.actualite_includes.social_actu')
</div>
</div>
<div class="clearfix"></div>
