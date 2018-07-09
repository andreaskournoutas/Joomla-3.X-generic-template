<?php defined('_JEXEC') or die; ?>
<?php
	$app = JFactory::getApplication();
  	$menu = $app->getMenu()->getActive();
  	$pageclass = '';
  	if (is_object($menu)) $pageclass = $menu->params->get('pageclass_sfx');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      	<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" />
      	<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/gradients.css" />-->
      	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mediaqueries.css" />
		<!-- ***Addons css files*** -->
      	<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/slicknav/slicknav.css" />-->
		<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/superfish/superfish.css" />-->
		<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/responsiveslides/responsiveslides.css" />-->
		<!---->
      	<!-- ***Google font(s) placeholder*** -->
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- ***Addons css files*** -->
		<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/5colbs.css" />-->
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.min.css">-->
		<!--<link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/9.2.0/css/fabric.min.css">-->
		<!---->
	</head>
	<body class="<?php echo $pageclass ? htmlspecialchars($pageclass): 'default'; ?>">
		<div id="visible-lg" class="visible-lg"></div>
		<div id="visible-md" class="visible-md"></div>
		<div id="visible-sm" class="visible-sm"></div>
		<div id="visible-xs" class="visible-xs"></div>
		<div id="mobile-menu-button-wrapper" class="visible-xs"><button id="mobile-menu-button" class="btn btn-default" type="button"><i class="fas fa-bars"></i></button></div>
		<header id="header-wrapper">
			
		</header>
		<main id="content-wrapper">
			<jdoc:include type="component"/>
		</main>
		<footer id="footer-wrapper">
			
		</footer>
		<div id="dark-layer" class="inactive"></div>
		<div id="off-canvas" class="closed">
			<div id="mobile-menu-close-wrapper"><div id="mobile-menu-close"><i class="fas fa-times"></i></div></div>
			<jdoc:include type="modules" name="off-canvas" style="xhtml"/>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<!-- ***Addons js files*** -->
		<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.es.js"></script>-->
		<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.iife.min.js"></script>-->
		<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.umd.min.js"></script>-->
		<!--<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/smooth-scroll/smooth-scroll.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/slicknav/jquery.slicknav.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/superfish/hoverIntent.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/superfish/superfish.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/responsiveslides/responsiveslides.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/slideshowify/jquery.transit.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/addons/slideshowify/jquery.slideshowify.min.js"></script>-->
		<!---->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
	</body>
</html>