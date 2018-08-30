<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					{{@$_PAGETILE}}
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right" id="form_validation" action="{{$_ROUTE}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
		<div class="m-portlet__body">
			<div class="m-form__content">
				<div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
					<div class="m-alert__icon">
						<i class="la la-warning"></i>
					</div>
					<div class="m-alert__text">
						Oh snap! Change a few things up and try submitting again.
					</div>
					<div class="m-alert__close">
						<button type="button" class="close" data-close="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>	
			{{ csrf_field() }}
			<?php foreach ($form as $key => $item){
				echo $_SEFF->_GeneratorHTML($key,$item);
			}
			?>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<div class="row">
					<div class="col-12" style="text-align: right;">
						<button type="submit" class="btn btn-success">
							Save
						</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="{{ asset('skins/backend/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('skins/backend/js/tinymce/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('skins/backend/js/common-form.js')}}"></script>
<script src="{{ asset("skins/backend/plugins/jquery-validation/jquery.validate.js")}}"></script>
<script src="{{ asset("skins/backend/js/form-validation.js")}}"></script>