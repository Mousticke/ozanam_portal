<ul class="nav nav-tabs" id="rss_tabs">
    <li class="active"><a data-toggle="tab" href="#content_1">Livres à découvrir</a></li>
    <li><a data-toggle="tab" href="#content_2">Mangas</a></li>
    <li><a data-toggle="tab" href="#content_3">Revues à découvrir</a></li>
    <li><a data-toggle="tab" href="#content_4">Sélection Littérature</a></li>
    <li><a data-toggle="tab" href="#content_5">Pack Citoyenneté</a></li>
</ul>

<div class="md-padding" layout-xs="column" layout="row">
    <div flex-xs flex-gt-xs="100" layout="row">
        <div class="tab-content">

            <div id="content_1" class="tab-pane fade in active">
                @foreach($rss_books->channel->item as $entry)
                    <div style="display: inline-block;" data-toggle="tooltip_rss" title=' <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                            <div>{{str_limit($entry->description, 200)}}</div>'>
                        <a class="book_summary" href="{{$entry->link}}" title='{{$entry->title}}'>
                            <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div id="content_2" class="tab-pane">
                @foreach($rss_mangas->channel->item as $entry)
                    <div style="display: inline-block;" data-toggle="tooltip_rss" title=' <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                            <div>{{str_limit($entry->description, 200)}}</div>'>
                        <a class="book_summary" href="{{$entry->link}}" title='{{$entry->title}}'>
                            <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div id="content_3" class="tab-pane">
                @foreach($rss_magazines->channel->item as $entry)
                    <div style="display: inline-block;" data-toggle="tooltip_rss" title=' <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                            <div>{{str_limit($entry->description, 200)}}</div>'>
                        <a class="book_summary" href="{{$entry->link}}" title='{{$entry->title}}'>
                            <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div id="content_4" class="tab-pane">
                @foreach($rss_literatures->channel->item as $entry)
                    <div style="display: inline-block;" data-toggle="tooltip_rss" title=' <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                            <div>{{str_limit($entry->description, 200)}}</div>'>
                        <a class="book_summary" href="{{$entry->link}}" title='{{$entry->title}}'>
                            <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div id="content_5" class="tab-pane">
                @foreach($rss_packs->channel->item as $entry)
                    <div style="display: inline-block;" data-toggle="tooltip_rss" title=' <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                            <div>{{str_limit($entry->description, 200)}}</div>'>
                        <a class="book_summary" href="{{$entry->link}}" title='{{$entry->title}}'>
                            <img height="100px" width="100px" src="{{$entry->enclosure['url']}}">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

