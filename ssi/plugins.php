 <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<style type="text/css">
#slider01 img{
	 width:100%;
	 height:90%;
	}
	body{
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#feffff+0,ddf1f9+100,a0d8ef+100,ddf1f9+100 */
background: rgb(254,255,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(254,255,255,1) 0%, rgba(221,241,249,1) 100%, rgba(160,216,239,1) 100%, rgba(221,241,249,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(254,255,255,1) 0%,rgba(221,241,249,1) 100%,rgba(160,216,239,1) 100%,rgba(221,241,249,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(254,255,255,1) 0%,rgba(221,241,249,1) 100%,rgba(160,216,239,1) 100%,rgba(221,241,249,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#ddf1f9',GradientType=0 ); /* IE6-9 */




		}
</style>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#slider01').cycle('all'); /*Image Slider code */
	$('#link01').mouseover(function(e) {
     $(this).removeClass('w3-spin');    
    });
	
	$('#link01').mouseout(function(e) {
        $(this).addClass('w3-spin');
    });
	
	
});
</script>