<!DOCTYPE html>

<html>
<head>
<script src="js/jquery-1.9.1.js"></script>

<script src="js/jquery-ui.js"></script>

</head>
<body>
<div id="test">gdskpoj sjgd gdæljg dlkgjlg ælkjsgj gdjkgsdl</div>

<script>

$('#test').bind("contextmenu", function(e) {

    $('#editmenu').css({
        top: e.pageY+'px',
        left: e.pageX+'px'
    }).show();

    return false;

});

$(document).ready(function() {

    $('#editmenu').click(function() {
        $('#editmenu').hide();
    });
	
    $(document).click(function() {
        $('#editmenu').hide();
    });

});
</script>
</body>
</html>
