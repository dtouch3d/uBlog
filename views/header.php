<?php
    echo '<?xml version="1.0" encoding="utf8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
    <head>
        <title>uBlog</title>
        <link rel="stylesheet" type="text/css" href="css/global.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

//Edit link action
$('.edit_link').click(function()
{
$('.text_wrapper').hide();
var data=$('.text_wrapper').html();
$('.edit').show();
$('.editbox').html(data);
$('.editbox').focus();
});

//Mouseup textarea false
$(".editbox").mouseup(function()
{
return false
});

//Textarea content editing
$(".editbox").change(function()
{
$('.edit').hide();
var boxval = $(".editbox").val();
var dataString = '$input='+ boxval;
$.ajax({
type: "POST",
url: "controllers/update_profile.php",
data: dataString,
cache: false,
success: function(html)
{
$('.text_wrapper').html(boxval);
$('.text_wrapper').show();
}
});
});

//Textarea without editing.
$(document).mouseup(function()
{
$('.edit').hide();
$('.text_wrapper').show();
});

});
</script>
    </head>
    <body>
        <div class="container">
            <h1>UBlog</h1>