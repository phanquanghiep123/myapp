<?php $use = $_SEFF->_USER; ?>
<div class="header-bar">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed circle" data-toggle="collapse" data-target="#navbar-nav-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-circle"></span>
            <span class="icon-circle"></span>
            <span class="icon-circle"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav navbar-nav collapse" id="navbar-nav-collapse">
            <li class="item-avatar vcard">
                <a href="#">
                    <div class="vcard-content"><span class="text-primary">Welcome</span> {{@$use->first_name}} {{@$use->last_name}}</div>
                    <div class="vcard-img"><img src="{{asset(@$use->photo)}}"></div>
                </a>
            </li>
            <li class="item-notification"><a href="#"><span class="icon icon-alarm"></span></a></li>
            <li class="item-share"><a href="#"><span class="icon icon-share"></span></a></li>
            <li class="item-setting">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="icon icon-settings"></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">My profile</a>
                    <a class="dropdown-item" href="#">My Duties</a>
                    <a class="dropdown-item" href="#">My Photo</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route($_SEFF->_ROUTE_FIX.'.logout')}}" class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="collapse header-menu" id="navbar-collapse">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="navbar">
            <?php
                
                $hasMenu = ($_SEFF->_getMenu("frontent-menu")->where("role_allow","like","%/".@$use->role_id."/%")->get());
            ?>
            @if(!$hasMenu->isEmpty())
                @foreach ($hasMenu AS $key => $value)
                    <li class="{{(trim($value->route_name) == trim(Route::currentRouteName())) ? 'active' : ''}}"><a href="{{route($value->route_name)}}">{{$value->name}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
