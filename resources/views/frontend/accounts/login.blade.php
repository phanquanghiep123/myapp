<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <form method="post" action="{{route("frontend.postlogin")}}">
                       <?php
                        $messege = \Session::get('messege');
    
                       ?>
                        {{ csrf_field() }}
                        <div class="form-group {{ (@$messege['id']) ? 'has-error' : ''}}">
                            <label class="text-primary" for="user-id">STAFF ID</label>
                            <input type="text" class="form-control dark" id="user-id" value="{{old('id')}}" name="id" required="">
                            @if($messege && @$messege['id'])    
                                @foreach ($messege['id'] AS $key => $value)   
                                    <span class="help-block">{{@$value}}</span>
                                @endforeach
                            @endif
                            
                        </div>
                        <div class="form-group {{ (@$messege['pwd']) ? 'has-error' : ''}}">
                            <label class="text-primary" for="user-pw">PASSWORD</label>
                            <input type="password" class="form-control dark" id="user-pw" value="{{old('pwd')}}" name="pwd" required="">
                            @if($messege && @$messege['pwd']) 
                                @foreach ($messege['pwd'] AS $key => $value)   
                                    <span class="help-block">{{@$value}}</span>
                                @endforeach
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-20-xs">LOGIN</button>
                        <a href="" class="small text-uppercase">Forgotten Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>