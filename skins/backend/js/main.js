$(document).ready(function(){
	$("#view-file").click(function(){
		var img = $(this).attr("data-src");
		$("#m_modal_1 #detail-photo").attr("src",img);
		$("#m_modal_1").modal();
		return false;
	})
});