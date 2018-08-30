;
(function ($) {
    var carousel = [];
    var carousel_setting = [];
    var MAIN_UI = {
		//INIT
        init: function () {
            this.init_table();
			
			
        },
		init_table: function(){
			$('#table-time').DataTable( {
				"responsive": true,
				"bFilter" : false,               
				"bLengthChange": false,
				"bPaginate": false,
				"info":     false,
				"columnDefs": [ {
					"targets": 'no-sort',
					"orderable": false,
				} ]
			} );
		},
		
		
    };
    $(document).ready(function () {
        MAIN_UI.init();
    });
    $(window).resize(function () {
        MAIN_UI.resize();
    });
    $(window).load(function () {

    });

})(jQuery);