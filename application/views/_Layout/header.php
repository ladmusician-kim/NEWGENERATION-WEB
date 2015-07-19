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
<!-- LEFT NAV -->
<nav class="menu" id="menu">
	<div class="menu-scroll">
		<div class="menu-wrap">
			<div class="menu-content">
				<a class="menu-logo" href="index.html">Material</a>
				<ul class="nav">
					<li>
						<a href="ui-card.html">Cards</a>
					</li>
					<li>
						<a href="ui-collapse.html">Collapsible Regions</a>
					</li>
					<li>
						<a href="ui-dropdown.html">Dropdowns</a>
					</li>
					<li>
						<a href="ui-modal.html">Modals &amp; Toasts</a>
					</li>
					<li>
						<a href="ui-nav.html">Navs</a>
					</li>
					<li>
						<a href="ui-progress.html">Progress Bars</a>
					</li>
					<li>
						<a href="ui-tab.html">Tabs</a>
					</li>
					<li>
						<a href="ui-tile.html">Tiles</a>
					</li>
				</ul>
				<hr>
				<ul class="nav">
					<li>
						<a href="ui-button.html">Buttons</a>
					</li>
					<li>
						<a href="ui-form.html">Form Elements</a>
						<span class="menu-collapse-toggle collapsed" data-target="#form-elements" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
						<ul class="menu-collapse collapse" id="form-elements">
							<li>
								<a href="ui-form-adv.html">Form Elements <small>(materialised)</small></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-icon.html">Icons</a>
					</li>
					<li>
						<a href="ui-table.html">Tables</a>
					</li>
				</ul>
				<hr>
				<ul class="nav">
					<li>
						<a href="page-affix.html">Full-Width Page <small>(with fixed LHC/RHC)</small></a>
					</li>
					<li>
						<a href="page-palette.html">Page Palettes</a>
						<span class="menu-collapse-toggle collapsed" data-target="#page-palettes" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
						<ul class="menu-collapse collapse" id="page-palettes">
							<li>
								<a href="page-palette-blue.html">Blue Palette</a>
							</li>
							<li>
								<a href="page-palette-green.html">Green Palette</a>
							</li>
							<li>
								<a href="page-palette-purple.html">Purple Palette</a>
							</li>
							<li>
								<a href="page-palette-red.html">Red Palette</a>
							</li>
							<li>
								<a href="page-palette-yellow.html">Yellow Palette</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- PROFILE NAV -->
<nav class="menu menu-right" id="profile">
	<div class="menu-scroll">
		<div class="menu-wrap">
			<div class="menu-top">
				<div class="menu-top-img">
					<img alt="John Smith" src="/NEWGENERATION/library/img/landscape.jpg">
				</div>
				<div class="menu-top-info">
					<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="/NEWGENERATION/library/img/avatar-001.jpg"></span>John Smith</a>
				</div>
				<div class="menu-top-info-sub">
					<small>Some additional information about John Smith</small>
				</div>
			</div>
			<div class="menu-content">
				<ul class="nav">
					<li>
						<a href="javascript:void(0)"><span class="icon icon-lg">account_box</span>Profile Settings</a>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon icon-lg">add_to_photos</span>Upload Photo</a>
					</li>
					<li>
						<a href="page-login.html"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
