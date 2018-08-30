$(function () {
    $('#form_validation').submit(function(){
        tinyMCE.triggerSave();
    })
    $('#form_validation').validate({
        rules: {
            'checkbox': {
                required: true
            },
            'gender': {
                required: true
            },
            'date': {
                customdate: true
            },
            'creditcard': {
                creditcard: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('form-control-feedback');
            var alert = $('#m_form_1_msg');
            alert.removeClass('m--hide').show();
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('form-control-feedback');
           
        },
        errorPlacement: function (error, element) {
            $(element).closest('.col-md-8').append(error);
        },
        submitHandler: function (form) {
            var url = $(form).attr("action");
            $(form).ajaxSubmit({
                url      : url,
                type     : "post",
                dataType : "json",
                success  : function(r){
                    if(r.status == "success"){
                        if(typeof r._redirect  != undefined && r._redirect != null) 
                            window.location.href = r._redirect;
                        else
                            location.reload();
                    }else{
                        if(r.message){
                            $.each(r.message,function(k,v){
                                $("#server-"+k).text(v).addClass("block");
                            });
                        }
                        var alert = $('#m_form_1_msg');
                        alert.removeClass('m--hide').show();
                    }
                }
            });
            return false;
        }
    });
    //Custom Validations ===============================================================================
    //Date
    $.validator.addMethod('customdate', function (value, element) {
        return value.match(/^\d\d\d\d?-\d\d?-\d\d$/);
    },
        'Please enter a date in the format YYYY-MM-DD.'
    );

    //Credit card
    $.validator.addMethod('creditcard', function (value, element) {
        return value.match(/^\d\d\d\d?-\d\d\d\d?-\d\d\d\d?-\d\d\d\d$/);
    },
        'Please enter a credit card in the format XXXX-XXXX-XXXX-XXXX.'
    );
    //==================================================================================================
});