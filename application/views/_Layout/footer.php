<footer class="footer">
	<div class="container">
		<p>NEWGENERATION</p>
	</div>
</footer>
<div class="fbtn-container">
	<div class="fbtn-inner">
		<a class="fbtn fbtn-red fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
		<div class="fbtn-dropdown">
			<a class="fbtn" href="https://github.com/Daemonite/material" target="_blank"><span class="fbtn-text">Fork me on GitHub</span><span class="fa fa-github"></span></a>
			<a class="fbtn fbtn-blue" href="https://twitter.com/daemonites" target="_blank"><span class="fbtn-text">Follow Daemon on Twitter</span><span class="fa fa-twitter"></span></a>
			<a class="fbtn fbtn-alt" href="http://www.daemon.com.au/" target="_blank"><span class="fbtn-text">Visit Daemon Website</span><span class="icon">link</span></a>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/NEWGENERATION/library/js/ajaxBody.js"></script>
<!--<script src="/NEWGENERATION/library/package/smarteditor/js/HuskyEZCreator.js"></script>-->
<script src="/NEWGENERATION/library/js/app.js"></script>

<?php
	$total_url = $_SERVER['PHP_SELF'];
	$arr_splitted_url = explode('/', $total_url);

	$ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
	$view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
	$filename = "";
	
	if ($ctrl_name == 'index.php') {
		$filename = 'library/js/'.strtolower($view_name).'/index.js';
	} else {
		$filename = 'library/js/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.js';		
	}

	if(file_exists($filename)) {
	?>
		<script src="/NEWGENERATION/<?php echo $filename; ?>"></script>
<?php
	}


	if(strpos($filename, 'create')) {
?>
		<script src="/NEWGENERATION/library/package/smarteditor/js/HuskyEZCreator.js"></script>
<?php
	} 
?>
</body>