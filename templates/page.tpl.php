<div class="wrapper">
	<div class="mastwrap">
		<div class="masthead"> 
			<div class="logowrapper"><a class="logo" href="http://www.humboldt.edu/"><img src="<?php print $base_path . $directory ?>/_/img/wordmark.png" alt="Humboldt State University"></a> 
			</div> 
		</div>
	</div>

	<header class="clearfix">
		
		<h1><a href="<?php print $front_page ?>"><?php print $site_name; ?></a></h1>
		<a href="http://humboldt.edu/associatedstudents"><img src="<?php print $base_path . $directory ?>/_/img/aslogo.png" alt="Funded by Associated Students"></a>
	
	</header>
	

	<div class="mainwrap">
	<div class="main clearfix">
		<a class="skipnav" href="#primary-content"></a>
		<nav id="nav-wrap">
			<?php print render($main_menu_expanded); ?>
		</nav>
		

		<div class="primary-content">
			<?php print $messages; ?>
		
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h2 class="title"><?php print $title; ?></h2><?php endif; ?>
			<?php print render($title_suffix); ?>
		
			<?php if ($tabs): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

			<?php print render($page['sidebar_first']); ?>
		
			<?php print render($page['content']); ?>
			
			<?php print $feed_icons; ?>
		</div>
	</div>
</div>
	

</div>

<div class="footwrap">	
	<footer class="clearfix">
		
		<?php print render($page['footer_firstcolumn']); ?>

		<?php print render($page['footer_secondcolumn']); ?>
		
	</footer>
</div>