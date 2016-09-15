<?php
global $page,$langmessage;
$path = $page->theme_dir.'/drop_down_menu.php';
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		common::LoadComponents( 'uikit-js' );
		gpOutput::GetHead();
	?>
<body>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		<nav class="uk-navbar uk-margin-large-bottom">
			<?php global $config; echo common::Link('',$config['title'],'','class="uk-navbar-brand uk-hidden-small"'); ?>
			<?php
				$GP_ARRANGE = false;
				$GP_MENU_CLASSES = array(
						'menu_top'			=> 'uk-navbar-nav uk-hidden-small',
						'selected'			=> '',
						'selected_li'		=> 'uk-active',
						'childselected'		=> '',
						'childselected_li'	=> 'uk-active',
						'li_'				=> '',
						'li_title'			=> '',
						'haschildren'		=> 'uk-parent',
						'haschildren_li'	=> '',
						'child_ul'			=> 'uk-nav uk-nav-navbar'
						);
				gpOutput::Get('FullMenu');
			?>
			<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			<div class="uk-navbar-brand uk-navbar-center uk-visible-small"><?php echo $config['title']; ?></div>
		</nav>
		<div class="uk-grid uk-grid-large">
			<div class="uk-width-medium-7-10">
				<div class="uk-width-1-1">
					<?php gpOutput::Content(); ?>
				</div>
				<div class="uk-width-1-1">
					<?php gpOutput::Get('Extra','Content_After'); ?>
				</div>
			</div>
			<div class="uk-width-medium-3-10">
				<div class="uk-visible-small"><hr class="style-eight"></div>
				<div class="uk-panel uk-panel-box uk-text-center">
					<form class="uk-form">
						<input type="text" class="uk-form-width-medium" name="search" value="" placeholder="<?php echo $langmessage['Search']; ?>"><button class="uk-button"><i class="uk-icon-search"></i></button>
					</form>
				</div>
				<div class="uk-panel uk-panel-box uk-panel-box-secondary gadgets">
					<?php gpOutput::GetAllGadgets(); ?>
				</div>
			</div>
		</div>
		<footer class="uk-width-10-10">
		    <div class="uk-panel uk-panel-box uk-panel-primary">
				<?php gpOutput::Get('Extra','Footer'); gpOutput::GetAdminLink(); ?>
		    </div>
		</footer>
	</div>
	<!-- end of uk-container -->
	<!-- offcanvas -->
	<div id="offcanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar" data-uk-nav="{multiple:false}">
			<?php
				$GP_MENU_ELEMENTS = 'UIkitOffcanvasMenu';
				$GP_MENU_CLASSES = array(
						'menu_top'			=> 'uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}',
						'selected'			=> '',
						'selected_li'		=> '',
						'childselected'		=> '',
						'childselected_li'	=> 'uk-active',
						'li_'				=> '',
						'li_title'			=> '',
						'haschildren'		=> 'uk-parent',
						'haschildren_li'	=> '',
						'child_ul'			=> 'uk-nav-sub'
						);
			gpOutput::Get('FullMenu');
			?>
		</div>
	</div>
</body>
</html>
