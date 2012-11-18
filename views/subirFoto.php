<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Jquery Uploader Plugin</title>
	<script type="text/javascript" src="../JavaScripts/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="../JavaScripts/jquery.uploadify.v2.1.0.min.js"></script>
	<script type="text/javascript" src="../JavaScripts/swfobject.js"></script>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
	$('#fileInput').uploadify({
		'uploader'  : '../uploader/uploadify.swf',
		'script'    : '../uploader/uploader.php',
		'auto'      : true,
		'folder'    : '../uploads',
		'onComplete': function(event, queueID, fileObj, response, data) {
			$('#Imagen').prepend(response);
			$('#fileInput').unbind();
			$('#fileInput').uploadify({
				'uploader'  : '../uploader/uploadify.swf',
				'script'    : '../uploader/uploader.php',
				'auto'      : true,
				'folder'    : '../uploads',
				'onComplete': function(event, queueID, fileObj, response, data) {
					$('#theImg').remove();
					$('#Imagen').prepend(response);
				}
			});
		}
	});
});
// ]]>
</script>
</head>

<body>
	<input type="file" name="fileInput" id="fileInput" />
	<div id="fotosWrapper">Aquí va el mensaje de respuesta:&nbsp;</div>
	<div id="Imagen">
	</div>
</body>
</html>
