$(document).ready (function(){
	tinyMCE.init({
		selector: 'textarea:not(.not-editor)',
		height: 300,
		menubar: false,
		theme: 'modern',
		plugins: [
			'textcolor',
			'colorpicker',
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table paste code'
		],   
		contextmenu : false,
		toolbar: 'styleselect | bold italic | forecolor alignleft aligncenter alignright alignjustify | outdent indent  | insert | code',
		content_css: [
			'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'https://www.tinymce.com/css/codepen.min.css'
		]
	});

	$('.m_datetimepicker_6').datetimepicker({
        format: "yyyy-mm-dd",
        todayHighlight: true,
        autoclose: true,
        startView: 2,
        minView: 2,
        forceParse: 0,
        pickerPosition: 'bottom-left'
    });
    $('.m_datetimepicker_3').datetimepicker({
        todayHighlight: true,
        autoclose: true,
        pickerPosition: 'bottom-left',
        todayBtn: true,
        format: 'yyyy-mm-dd hh:ii'
    });
    $('.m_datetimepicker_7').datetimepicker({
        format: "hh:ii",
        showMeridian: true,
        todayHighlight: true,
        autoclose: true,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0,
        pickerPosition: 'bottom-left'
    });
})
