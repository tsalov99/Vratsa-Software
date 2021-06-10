    $(function() {
        $('#one').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
	
	    $(function() {
        $('#two').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });