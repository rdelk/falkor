<header class="page-header">
	<div class="l-wrap gw">

    <h1 class="site-name g eigth-twelfths">
      <a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>">
        <span class="element-invisible"><?php print render($site_name); ?></span>
        <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?> Logo"/>
      </a>
    </h1>

	  <?php if (!empty($page['header'])) print render($page['header']); ?>
		
		<?php if(!$is_front) { ?>
		<div class="page-title-wrap g one-whole">
	    <?php print render($title_prefix); ?>
	    <h1 class="page-title"><?php print $title; ?></h1>
	    <?php print render($title_suffix); ?>

	    <?php if (!$is_front) { ?>
	      <?php if (!empty($tabs) || !empty($tabs2)): ?>
	        <div class="tabs-wrapper">
	          <?php print render($tabs); ?>
	          <?php print render($tabs2); ?>
	        </div>
	      <?php endif; ?>
	    <?php } ?>
    </div>
    <?php } ?>

	</div>

	<nav>
		<div class="l-wrap">
		<?php print drupal_render(menu_tree('main-menu')); ?>
		</div>
	</nav>
</header>