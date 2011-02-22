<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->tag('title', String::insert(Configure::read('App.Settings.title'), Set::flatten(array_merge(Configure::read('App.Settings'), array('title' => $title_for_layout)))));
	echo $this->Html->meta('keywords', Configure::read('App.Settings.keywords'));
	echo $this->Html->meta('description', Configure::read('App.Settings.description'));
	echo $this->Html->css(Configure::read('App.Settings.styles'));
	echo $this->Html->script(Configure::read('App.Settings.scripts'));
	echo $scripts_for_layout;
	?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
	<script type="text/javascript" src="http://use.typekit.com/rxy1ksg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<div id="page">
		<header id="header">
			<?php echo $this->element('header'); ?>
		</header>
		<div id="main">
			<?php
			echo $this->element('flash');
			echo $content_for_layout;
			?>
			<div class="clear"></div>
		</div>
		<footer id="footer">
			<?php echo $this->element('footer'); ?>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>