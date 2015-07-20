<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>NEWGENERATION</title>

	<!-- css -->
	<link href="/NEWGENERATION/library/css/common.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="avoid-fout">
	<?php
	$flashdata = $this->session->flashdata('message');
	if ($flashdata != null) {
	?>

	<script type="text/javascript">
		alert('<?=$this->session->flashdata('message')?>');
	</script>             
	<?php
	}
	?>
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-alt progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo" href="index.html">NEWGENERATION</a>
		<ul class="nav nav-list pull-right">
			<li>
				<a>가입하기</a>
			</li>
			<li>
				<a>로그인</a>
			</li>
			<!--
			<li>
				<a data-toggle="menu" href="#profile">
					<span class="access-hide">John Smith</span>
					<span class="avatar"><img alt="alt text for John Smith avatar" src="/NEWGENERATION/library/img/avatar-001.jpg"></span>
				</a>
			</li>
		-->
	</ul>
</header>

