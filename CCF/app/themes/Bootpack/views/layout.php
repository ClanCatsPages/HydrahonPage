<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo ClanCats::$config->charset; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	
	<!-- styling -->
	<?php echo CCAsset::code( 'css', 'vendor' ); ?>
	<?php echo CCAsset::code( 'css', 'theme' ); ?>
	<?php echo CCAsset::code( 'css' ); ?>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<!-- header scripts -->
	<?php echo CCAsset::code( 'js', 'header' ); ?>
</head>
<body>
<div id="header">
	<nav class="navbar navbar-white navbar-static-top" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ccf-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo to('/'); ?>"><img width="40px" src="<?php echo CCAsset::uri('images/hydrahon-logo-small.png'); ?>" /></a>
			</div>
			
			<div class="collapse navbar-collapse" id="ccf-navbar">
				<ul class="nav navbar-nav">
					<li>
						<a href="/docs/">Documentation</a>
					</li>

					<li>
						<a href="https://github.com/ClanCats/Hydrahon">Github</a>
					</li>
					
					<?php if ( ClanCats::in_development() ) : ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dev Toolbox <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo to('dev/session/'); ?>">Session Sandbox</a></li>
							<li><a href="<?php echo to('dev/mail/'); ?>">Mail Sandbox</a></li>
							<li><a href="<?php echo to('dev/common/phpinfo'); ?>">PHP Info</a></li>
						</ul>
					</li>
					<?php endif; ?>
				</ul>
			</div><!-- /.navbar-collapse -->
			
		</div><!-- /.container-fluid -->
	</nav>
</div><!-- /#header -->

<div id="main-container" class="container">
	<?php echo UI\Alert::render(); ?>
	<div>
		<?php if ( $sidebar !== false ) : ?>
		<div class="row">
			<div class="col-md-3">
				<?php echo $sidebar; ?>
			</div>
			<div class="col-md-9">
				<?php echo $content; ?>
			</div>
		</div>
		<?php else : ?>
		<?php echo $content; ?>
		<?php endif; ?>
	</div>
</div>

<!-- footer scripts -->
<?php echo CCAsset::code( 'js', 'vendor' ); ?>
<?php echo CCAsset::code( 'js', 'theme' ); ?>
<?php echo CCAsset::code( 'js' ); ?>
<?php echo $js; ?>
</body>

</html>