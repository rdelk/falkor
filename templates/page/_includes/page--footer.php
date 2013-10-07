
<footer class="page-footer">
	<nav>
		<div class="l-wrap">
		<?php print drupal_render(menu_tree('main-menu')); ?>
		</div>
	</nav>

  <?php if (!empty($page['footer'])) print render($page['footer']) ?>
</footer>