@extends($_SEFF->_VIEWFOLDER.'.layouts.app')
@section('content')
<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="content-top clearfix">
                        <ol class="breadcrumb">
                            
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="content-title">
                        
                    </div>
                    <div class="content-entry">

                        <div class="row flex-md align-items-start">
                            <div class="col-md-6">
                                <h2 class="section-heading border mb-30-xs">
                                    <span class="icon icon-jail"></span> Available Duties <small>search duties</small>
                                </h2>
                                <div class="duties">
                                    <div class="dutie-item avaibale">
                                        <div class="date-time-holder">
                                            <div class="date-time">
                                                <span class="day">13</span>
                                                <span class="month">March</span>
                                            </div>
                                        </div>
                                        <div class="detail-holder">
                                            <div class="detail-title">
                                                <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                            </div>
                                            <div class="detail-meta text-tiny">
                                                <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                                <span class="sep">|</span>
                                                <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            </div>
                                        </div>
                                        <div class="action-holder">
                                            <button class="btn-sqr action-search"><i class="icon-magnifying-glass"></i></button>
                                            <button class="btn-sqr action-menu"><i class="icon-list"></i></button>
                                        </div>
                                    </div>
                                    <div class="dutie-item avaibale">
                                        <div class="date-time-holder">
                                            <div class="date-time">
                                                <span class="day">13</span>
                                                <span class="month">March</span>
                                            </div>
                                        </div>
                                        <div class="detail-holder">
                                            <div class="detail-title">
                                                <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                            </div>
                                            <div class="detail-meta text-tiny">
                                                <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                                <span class="sep">|</span>
                                                <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            </div>
                                        </div>
                                        <div class="action-holder">
                                            <button class="btn-sqr action-search"><i class="icon-magnifying-glass"></i></button>
                                            <button class="btn-sqr action-menu"><i class="icon-list"></i></button>
                                        </div>
                                    </div>
                                    <div class="dutie-item avaibale">
                                        <div class="date-time-holder">
                                            <div class="date-time">
                                                <span class="day">13</span>
                                                <span class="month">March</span>
                                            </div>
                                        </div>
                                        <div class="detail-holder">
                                            <div class="detail-title">
                                                <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                            </div>
                                            <div class="detail-meta text-tiny">
                                                <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                                <span class="sep">|</span>
                                                <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            </div>
                                        </div>
                                        <div class="action-holder">
                                            <button class="btn-sqr action-search"><i class="icon-magnifying-glass"></i></button>
                                            <button class="btn-sqr action-menu"><i class="icon-list"></i></button>
                                        </div>
                                    </div>
                                    <div class="dutie-item avaibale">
                                        <div class="date-time-holder">
                                            <div class="date-time">
                                                <span class="day">13</span>
                                                <span class="month">March</span>
                                            </div>
                                        </div>
                                        <div class="detail-holder">
                                            <div class="detail-title">
                                                <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                            </div>
                                            <div class="detail-meta text-tiny">
                                                <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                                <span class="sep">|</span>
                                                <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            </div>
                                        </div>
                                        <div class="action-holder">
                                            <button class="btn-sqr action-search"><i class="icon-magnifying-glass"></i></button>
                                            <button class="btn-sqr action-menu"><i class="fa fa-circle text-success"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 flex-md">
                                <h2 class="section-heading border mb-30-xs">
                                    <span class="icon icon-jail dark"></span> My next 3 Duties <small>manage duties</small>
                                </h2>
                                <div class="dutie-item next">
                                    <div class="date-time-holder">
                                        <div class="date-time">
                                            <span class="day">13</span>
                                            <span class="month">March</span>
                                        </div>
                                    </div>
                                    <div class="detail-holder">
                                        <div class="detail-title">
                                            <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                        </div>
                                        <div class="detail-meta text-tiny">
                                            <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                            <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            <span class="meta-id"><span>ID:</span> WAN-bw13-1293</span>
                                        </div>
                                    </div>
                                    <div class="action-holder">
                                        <img class="img-border" src="{{asset('skins/frontend/images/img-map.svg')}}">
                                        <button class="btn btn-danger btn-sm">Cancel Duty</button>
                                    </div>
                                </div>
                                <div class="dutie-item next">
                                    <div class="date-time-holder">
                                        <div class="date-time">
                                            <span class="day">13</span>
                                            <span class="month">March</span>
                                        </div>
                                    </div>
                                    <div class="detail-holder">
                                        <div class="detail-title">
                                            <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                        </div>
                                        <div class="detail-meta text-tiny">
                                            <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                            <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            <span class="meta-id"><span>ID:</span> WAN-bw13-1293</span>
                                        </div>
                                    </div>
                                    <div class="action-holder">
                                        <img class="img-border" src="{{asset('skins/frontend/images/img-map.svg')}}">
                                        <button class="btn btn-default btn-sm">Cancel Duty</button>
                                    </div>
                                </div>
                                <div class="dutie-item next">
                                    <div class="date-time-holder">
                                        <div class="date-time">
                                            <span class="day">13</span>
                                            <span class="month">March</span>
                                        </div>
                                    </div>
                                    <div class="detail-holder">
                                        <div class="detail-title">
                                            <a href="{{route('frontend.duties.detail',['id' => 1])}}"><i class="icon icon-jail"></i> HMP Pentenville</a>
                                        </div>
                                        <div class="detail-meta text-tiny">
                                            <span class="meta-time"><i class="icc icc-clock x1"></i> 8:00 - 17:00</span>
                                            <span class="meta-type"><i class="icc icc-bed x1"></i> Bed Watch</span>
                                            <span class="meta-id"><span>ID:</span> WAN-bw13-1293</span>
                                        </div>
                                    </div>
                                    <div class="action-holder">
                                        <img class="img-border" src="{{asset('skins/frontend/images/img-map.svg')}}">
                                        <button class="btn btn-danger btn-sm">Cancel Duty</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </main>
            </div>
@endsection
