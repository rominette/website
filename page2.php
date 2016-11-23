<?php
	ob_start();
?>
<h2> page2 </h2>
<input type="text" name="toto">
<?php

$content = ob_get_contents();
ob_end_clean();

include('layout.php');

?>