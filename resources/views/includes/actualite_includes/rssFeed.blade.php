<ul class="nav nav-tabs" id="rss_tabs">
    <li class="active"><a data-toggle="tab" href="#content_1">Livres à découvrir</a></li>
    <li><a data-toggle="tab" href="#content_2">Mangas</a></li>
    <li><a data-toggle="tab" href="#content_3">Revues à découvrir</a></li>
    <li><a data-toggle="tab" href="#content_4">Sélection Littérature</a></li>
    <li><a data-toggle="tab" href="#content_5">Pack Citoyenneté</a></li>
</ul>

<div class="tab-content" >
    <div ng-cloak>
        <div class="md-padding" layout-xs="column" layout="row">
            <div flex-xs flex-gt-xs="100" layout="row">
                <div id="content_1" class="tab-pane fade in active">
                    @foreach($rss_books->channel->item as $entry)
                        <a href="{{$entry->link}}" title='{{$entry->title}}'><img height="100px" width="100px" src="{{$entry->enclosure['url']}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!--end content 1-->

    <div id="content_2" class="tab-pane fade">
        <ul>
            @foreach($rss_mangas->channel->item as $key=>$entry)
                <li><a href="{{$entry->link}}" title='{{$entry->title}}'>{{$entry->title}}</a></li>
            @endforeach
        </ul>
    </div><!--end content 2-->

    <div id="content_3" class="tab-pane fade">
        <ul>
            @foreach($rss_magazines->channel->item as $entry)
                <li><a href="{{$entry->link}}" title='{{$entry->title}}'>{{$entry->title}}</a></li>
            @endforeach
        </ul>
    </div><!--end content 3-->

    <div id="content_4" class="tab-pane fade">
        <ul>
            @foreach($rss_literatures->channel->item as $entry)
                <li><a href="{{$entry->link}}" title='{{$entry->title}}'>{{$entry->title}}</a></li>
            @endforeach
        </ul>
    </div>

    <div id="content_5" class="tab-pane fade">
        <ul>
            @foreach($rss_packs->channel->item as $entry)
                <li><a href="{{$entry->link}}" title='{{$entry->title}}'>{{$entry->title}}</a></li>
            @endforeach
        </ul>
    </div>

</div><!--end main content -->


