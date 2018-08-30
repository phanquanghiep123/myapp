</div>
</div>
<footer id="colophon" class="site-footer bg-primary lighter pt-15-xs pb-15-xs" role="contentinfo">
    <div class="container">
    <p class="copyright text-center text-white text-uppercase mb-0-xs">© 2018  all rights reserved My PP</p>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('skins/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('skins/frontend/js/jquery.form.min.js')}}"></script>
    <script type="text/javascript">
        var showErrorMsg = function(form, type, msg) {
            var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
                <span></span>\
            </div>');
            form.find('.alert').remove();
            alert.prependTo(form);
            alert.find('span').html(msg);
        }
        $('#m_login_signin_submit').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');
            btn.attr('disabled', true);
            form.ajaxSubmit({
                url: form.attr("action"),
                dataType : "json",
                success: function(response, status, xhr, $form) {
                    console.log(response);
                    if(response.status == "success"){
                        showErrorMsg(form, 'success', 'Login successfully.');
                        setTimeout(function(){
                            window.location.href = response.data;
                        },1000);
                    }else{
                        showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                    }
                }
            });
        });
    </script>
</body>

</html>