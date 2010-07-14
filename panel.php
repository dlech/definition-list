<?php
define('WP_USE_THEMES', false);
require ('../../../wp-blog-header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Definition List<title>
<script type="text/javascript"
    src="../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>

<script language="javascript">

function dd_insert() {
    var ed = tinyMCEPopup.editor;
    var term = document.getElementById('dd_term').value;
    var desc = document.getElementById('dd_desc').value;
    ed.selection.setContent('<dl><dt>' + term + '</dt><dd>' + desc + '</dd></dl>');
    tinyMCEPopup.close();
}

</script>
</head>

<body>
<form>
    <p>Term<br/><input name="Term" id="dd_term" type="text" size="91"/></p>
    <p>Description<br/><textarea name="Description" id="dd_desc" cols="90" rows="20"></textarea></p>
    <p><input type="button" value="insert" onclick="dd_insert();" style="width: 120" /></p>
</form>
</body>
</html>
