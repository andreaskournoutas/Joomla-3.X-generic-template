<?php defined('_JEXEC') or die; ?>
<?php
	$cache = 0;
	//***************************************
	$app = JFactory::getApplication();
  	$menu = $app->getMenu()->getActive();
  	$pageclass = '';
  	if (is_object($menu)) $pageclass = $menu->params->get('pageclass_sfx');
	//***************************************
	$input = JFactory::getApplication()->input;
	$view = $input->get('view');
	//***************************************
	/*jimport('joomla.language.helper');
    $languages = JLanguageHelper::getLanguages('lang_code');
    $lang_code = JFactory::getLanguage()->getTag();
    $sef = $languages[$lang_code]->sef;*/
	//***************************************
	$class = $pageclass ? htmlspecialchars($pageclass): "default";
	$class .= " " . $view;
	//***************************************
	unset($this->_scripts['/media/jui/js/jquery.min.js']);
	unset($this->_scripts['/media/jui/js/jquery-noconflict.js']);
	unset($this->_scripts['/media/jui/js/jquery-migrate.min.js']);
?>
<!DOCTYPE html>
<html lang="el" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<jdoc:include type="head"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/andreaskournoutas/utilities.css/utilities.min.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css?v=<?php echo $cache; ?>"/>
		<script src="https://kit.fontawesome.com/37e9037a2d.js"></script>
	</head>
	<body class="<?php echo $class ?>">
		<div class="visible-xl d-none d-xl-block"></div>
		<div class="visible-lg d-none d-lg-block d-xl-none"></div>
		<div class="visible-md d-none d-md-block d-lg-none"></div>
		<div class="visible-sm d-none d-sm-block d-md-none"></div>
		<div class="visible-xs d-block d-sm-none"></div>
		<header>
			<jdoc:include type="modules" name="header" style="xhtml"/>
		</header>
		<main>			
			<jdoc:include type="modules" name="above-content" style="xhtml"/>
			<?php if ($this->countModules('sidebar')): ?>
				<?php if ($pageclass != ""): ?>
					<div>
						<jdoc:include type="component"/>
					</div>
					<aside>
						<jdoc:include type="modules" name="sidebar" style="xhtml"/>
					</aside>
				<?php endif; ?>
			<?php else: ?>
				<?php if ($pageclass != ""): ?>
					<div>
						<jdoc:include type="component"/>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<jdoc:include type="modules" name="below-content" style="xhtml"/>
		</main>
		<footer>
			<jdoc:include type="modules" name="footer" style="xhtml"/>
		</footer>
		<div id="off-canvas">
			<jdoc:include type="modules" name="off-canvas" style="xhtml"/>
		</div>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js?v=<?php echo $cache; ?>"></script>
	</body>
</html>