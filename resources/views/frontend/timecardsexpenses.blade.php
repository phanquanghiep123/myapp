@extends($_SEFF->_VIEWFOLDER.'.layouts.app')
@section('content')
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="content-top clearfix">

            <ol class="breadcrumb">
                <li class="active">TIMECARDS & EXPENSES</li>
            </ol>
            <div class="part-right">
                <select class="selectpicker" data-style="btn-control" data-width="100%">
                    <option>1 Mar - 12 Mar</option>
                    <option>13 Mar - 25 Mar</option>
                    <option>26 Mar - 14 Apr</option>
                </select>
            </div>
        </div>
        <div class="content-title">
            
        </div>
        <div class="content-entry">
            <div class="table-holder">
                <div class="search-nav">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter search term...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="icon-magnifying-glass"></i></button>
                         </span>
                    </div>

                </div>

                <table id="table-time" class="table table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th class="no-sort text-center" data-priority="1">#</th>
                            <th><span class="sort">DATE</span></th>
                            <th><span class="sort">DUTY ID</span></th>
                            <th><span class="sort">DUTY</span></th>
                            <th><span class="sort">LOCATION</span></th>
                            <th><span class="sort">START</span></th>
                            <th><span class="sort">END</span></th>
                            <th class="no-sort text-center">COMS</th>
                            <th class="no-sort text-center">EXPENSES</th>
                            <th><span class="sort">TIME CARD</span></th>
                            <th class="no-sort" data-priority="1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>10 Mar 2018</td>
                            <td>WAN-BW-120318-938</td>
                            <td>BW</td>
                            <td>St George’s Hospital</td>
                            <td>14:00</td>
                            <td>24:00</td>
                            <td class="text-center">Confirmed</td>
                            <td class="text-center">Claimed</td>
                            <td>Generated</td>
                            <td><a href="" class="btn-config"><i class="icon-settings h3"></i></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>11 Mar 2018</td>
                            <td>WAN-BW-120318-938</td>
                            <td>RD</td>
                            <td>HMP Pentenville</td>
                            <td>01:00</td>
                            <td>12:00</td>
                            <td class="text-center">Confirmed</td>
                            <td class="text-center">n/a</td>
                            <td>Generated</td>
                            <td><a href="" class="btn-config"><i class="icon-settings h3"></i></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>12 Mar 2018</td>
                            <td>WAN-BW-120318-938</td>
                            <td>RD</td>
                            <td>HMP Wormworth Scrubs</td>
                            <td>09:00</td>
                            <td>21:00</td>
                            <td class="text-center">Confirmed</td>
                            <td class="text-center">n/a</td>
                            <td>Generated</td>
                            <td><a href="" class="btn-config"><i class="icon-settings h3"></i></a></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </main>
</div>
@endsection
