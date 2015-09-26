<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
//$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/mystyle.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
//if ($this->countModules('position-14'))
//{
//	$span = "blocks2";
//}
//
//else
//{
//	$span = "blocks";
//}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />

</head>

<body>
	<div id="wrap">

		<!-- Header -->

		<header>
            <div id="left">
                <jdoc:include type="modules" name="position-3" style="none" />
            </div>
            <div id="middle">
                <jdoc:include type="modules" name="position-4" style="none" />
            </div>
            <div id="right">
                <jdoc:include type="modules" name="position-5" style="none" />
            </div>
		</header>

            <!--menu-->

        <div id="mainmenu">
            <jdoc:include type="modules" name="position-1" style="none" />
        </div>

        <!--Banner-->

        <div id="banner">
            <jdoc:include type="modules" name="position-2" style="none" />
        </div>

        <!--services-->
        <?php if ($this->countModules('position-6')) : ?>
        <h1 id="h1serv"> Наши услуги</h1>
        <hr class="separator">
        <div id="blocks">
            <div>
                <jdoc:include type="modules" name="position-6" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-7" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-8" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-9" style="none" />
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('position-16')) : ?>
        <div id="blocks2">
            <div>
                <jdoc:include type="modules" name="position-16" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-17" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-18" style="none" />
            </div>
            <div>
                <jdoc:include type="modules" name="position-19" style="none" />
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('position-14')) : ?>
        <div id="onlinecall">
            <jdoc:include type="modules" name="position-14" style="none" />
        </div>


        <?php endif; ?>
        <!--content-->

        <div id="content">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </div>

        <div class="clear"></div>




        <!--bottom-->
        <?php if ($this->countModules('position-10')) : ?>
            <hr class="separator">
        <div id="bottom">
            <div id="leftbar">
                <jdoc:include type="modules" name="position-10" style="none" />
            </div>
            <div id="middlebar">
                <jdoc:include type="modules" name="position-11" style="none" />
            </div>
            <div id="rightbar">
                <jdoc:include type="modules" name="position-12" style="none" />
                <jdoc:include type="modules" name="position-13" style="none" />
            </div>
        </div>

        <div class="clear"></div>
        <?php endif; ?>



	</div> <!--end div id="wrap"-->

        <!-- Footer -->

        <footer>
                <div id="lfooter"> &copy; Главэксперт 2015</div>
                <div id="rfooter"> Разработка сайта: </div>
        </footer>

</body>
</html>
