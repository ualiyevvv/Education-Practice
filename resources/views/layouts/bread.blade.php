<?php
    $next_crumb = '';
    $crumbs = explode("/", $_SERVER['REQUEST_URI']);
    // var_dump($crumbs);
?>
<div class="bread">
    <div class="bread__title price-block__title">
        {{end($crumbs)}}
    </div>
    <div class="bread__links">
        <ul>
            <li><a href="/">Main</a></li>
        @foreach($crumbs as $crumb)
            @if($crumb != "")
                <?
                    $next_crumb = "/" . $crumb;
                ?> 
                @if($crumb == end($crumbs))
                    <li class="active"><a href="<?=$_SERVER['REQUEST_URI']?>">{{$crumb}}</a></li>
                @else
                    <li><a href="<?=$next_crumb?>">{{$crumb}}</a></li>
                @endif
            @endif
        @endforeach
        </ul>
    </div>
</div>