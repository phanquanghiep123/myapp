@extends($_SEFF->_FOLDER_FIX.'.layouts.wrapper')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            {{@$_PAGETILE}} 
                            <a id="add-menu-item" class="btn m-btn--square  btn-success" href="javascript:;">Add New Item</a>
                        </h3>
                    </div>
                </div>
            </div>        
        	<form id="tree-menu-form" action="{{route($_SEFF->_ROUTE_FIX.'.menus.updatesort',["id" => $_ID])}}"> 
                {{ csrf_field() }}
                <div class="m-portlet__body">
	                <div class="m-section">
	                    <div class="m-section__content">  	                               
							<?php
								if($_TREES): 
									echo $_SEFF->_TREEMENUS($_TREES,0);
								endif;	
							?>
			 			</div>	
			        </div>
			    </div>
		        <div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-portlet__body">
						<div class="m-form__actions">
							<div class="row">
								<div class="col-12" style="text-align: right;">
									<button type="submit" class="btn btn-success">
										Update
									</button>
									<a href="{{$_BACKURL}}">
										Back
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	        </form> 
       	</div>
    </div>
</div>
@endsection
@section("modals")
	@include($_SEFF->_FOLDER_FIX.".modals.models-add-item")
@endsection
@section("css_add")
	 <link rel="stylesheet" type="text/css" href="{{asset('skins/backend/css/menu.css')}}">
@stop
@section("js_add")
	<script src="{{asset('skins/backend/js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('skins/backend/js/nestedSortable/jquery.mjs.nestedSortable.js')}}"></script>
	<script>
	 $(document).ready(function(){
        $('ol.sortable').nestedSortable({
            forcePlaceholderSize: true,
            handle: 'div',
            helper: 'clone',
            items: 'li',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            tabSize: 25,
            tolerance: 'pointer',
            toleranceElement: '> div',
            maxLevels: 3,
            isTree: true,
            expandOnHover: 700,
            startCollapsed: true
        });
        
		$("#tree-menu-form").submit(function(){
			var trees = $('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});
			var url = $(this).attr("action");
			$.ajax({
				url  : url,
				type : "post",
				data : {
					_token : "{{csrf_token()}}",
					_data  : trees
				},
				success : function(r){
					if(r.status == 'success'){
						if(typeof r._redirect !== undefined && r._redirect){
							setTimeout(function(){
								document.location = r._redirect
							},100);
						}
					}else{
						if(typeof r.message !== undefined && r.message){
							alert(r.message);
						}
					}	
				}
			})
			return false;
		})
		$("body #add-menu-item").click(function(){
			$.ajax({
				type : "get",
				dataType:'json',
				url :"{{ $_ROUTE }}",
				success : function (r){
					if(r.status == "success"){
						$("#m_modal_2 .modal-body").html(r.data);
						$("#m_modal_2").modal(); 
					}else{
						if(typeof r.message !== undefined && r.message){
							alert(r.message);
						}
						if(typeof r._redirect !== undefined && r._redirect){
							setTimeout(function(){
								document.location = r._redirect
							},100);
						}
					}	
				}
			});
			return false;
		});

		$("body #tree-menu-form .ns-actions #edit-action").click(function(){
			var url = $(this).attr("data-href");
			$.ajax({
				type     : "get",
				dataType : 'json',
				url      : url,
				success  : function (r){
					if(r.status == "success"){
						$("#m_modal_2 .modal-body").html(r.data);
						$("#m_modal_2").modal(); 
					}else{
						if(typeof r.message !== undefined && r.message){
							alert(r.message);
						}
						if(typeof r._redirect !== undefined && r._redirect){
							setTimeout(function(){
								document.location = r._redirect
							},100);
						}
					}	
				}
			});
			return false;
		});

		$("body #tree-menu-form .ns-actions #delete-action").click(function(){
			var url = $(this).attr("data-href");
			$.ajax({
				type     : "get",
				dataType : 'json',
				url      : url,
				success  : function (r){
					if(typeof r.message !== undefined && r.message){
						alert(r.message);
					}
					if(typeof r._redirect !== undefined && r._redirect){
						setTimeout(function(){
							document.location = r._redirect
						},100);
					}	
				}
			});
			return false;
		});
    });			
       
</script>
@stop