@extends($_SEFF->_VIEWFOLDER.'.layouts.app')
@section('content')
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="content-top clearfix">
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>
        </div>
        <div class="content-title">
            <h2 class="section-heading"><span class="icon icon-jail"></span> HMP Wandsworth - bed watch</h2>
        </div>
        <div class="content-entry">
            <a href="{{route("frontend.getlogin")}}">Login Now</a>
        </div>
    </main>
</div>
@endsection
