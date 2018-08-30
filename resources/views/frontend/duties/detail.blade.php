@extends($_SEFF->_VIEWFOLDER.'.layouts.app')
@section('content')
<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="content-top clearfix">
                        <ol class="breadcrumb">
                            <li><a href="#">My duties</a></li>
                            <li><a href="#">Duty detail</a></li>
                            <li class="active">HMP Wandsworth - bed watch</li>
                        </ol>
                    </div>
                    <div class="content-title">
                        <h2 class="section-heading"><span class="icon icon-jail"></span> HMP Wandsworth - bed watch</h2>
                    </div>
                    <div class="content-entry">

                        <div class="row flex-md">
                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-tiny">Duty ID: <span class="text-light">WAN-bw13-1293</span></h3>
                                    </div>
                                    <div class="panel-body text-uppercase">
                                        <div class="row gutter-8 duty-detail">
                                            <div class="col-xs-12 col-sm-5 pb-5-xs pb-0-sm">
                                                <span class="icc icc-calendar"></span>
                                                <span class="small">13th march 2018</span>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <span class="icc icc-clock"></span>
                                                <span class="small">8:00 - 17:00</span>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <span class="icc icc-bed"></span>
                                                <span class="small">bed watch</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-tiny"><span class="icc icc-map align-bottom"></span>Address</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row gutter-8">
                                            <div class="col-xs-7 col-sm-8">
                                                <p class="text-large"><span class="text-dark">St Georges Hospital</span>
                                                    <br> Blackshaw Road
                                                    <br> Tooting
                                                    <br> London SW17 0QT
                                                    <br> United Kingdom</p>
                                            </div>
                                            <div class="col-xs-5 col-sm-4 text-right pt-5-xs">
                                                <img class="img-border" src="{{ asset('skins/frontend/images/img-map.svg')}}">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-tiny pl-25-xs">Inmate</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p class="text-dark mb-0-xs"><i>The inmate details will apear 30 mins before the shift start time</i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 flex-md">
                                <div class="w-100">
                                    <div class="panel panel-info highlight">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"> 
                                                <span class="icc icc-info"></span>
                                                <span class="text-large align-middle">EXTRA INFO</span>
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <p class="text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center btn-with-text col-xs-12 align-self-end mb-30-xs">
                                    
                                    <button type="button" class="btn btn-primary btn-lg btn-block">BOOK DUTY</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </main>
            </div>
@endsection
