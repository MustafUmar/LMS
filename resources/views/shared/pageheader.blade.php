<div class="top-page-header">
                    
    <div class="page-title">
        <h2>{{$slot}}</h2>
        <small>Thema blank page template.</small>
    </div>
    <div class="page-breadcrumb">
        <nav class="c_breadcrumbs">
            <ul>
                @if(!empty($links))
                    @foreach($links as $link)
                        <li><a href="{{(!$loop->last)?$link[1]:'#'}}" class="{{$loop->last?'active':''}}">{{$link[0]}}</a></li>
                    @endforeach
                @else
                    <li class="active"><a href="#">Dashboard</a></li>
                @endif
                
            </ul>
        </nav>
    </div>
    <div class="right-menu pull-right">
        
    </div>

    <div class="pull-right toggle-right-sidebar">
        <span class="fa fa-outdent fa-2x title-open-right-sidebar"></span>
    </div>

</div>