<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redhat
 */

?>
<footer>
	<div class="footer">
		<div class="footer__container _anim-items">
			<div class="footer__container-title-menu">
				<div class="footer__title">
					<h2><?php the_field ('footer__container-title-menu__h2'); ?></h2>
					<p><?php the_field ('footer__container-title-menu__p'); ?></p>				
				</div>
				<div class="footer__menubar">
					<ul class="footer__menu">
						<li><a href="#rarity"class="scroll"><?php the_field ('footer__menu_a-text_1'); ?></a></li>
						<li><a href="#gallery" class="scroll"><?php the_field ('footer__menu_a-text_2'); ?></a></li>
						<li><a href="#roadmap" class="scroll"><?php the_field ('footer__menu_a-text_3'); ?></a></li>
						<li><a href="#team" class="scroll"><?php the_field ('footer__menu_a-text_4'); ?></a></li>
						<li><a href="#faq" class="scroll"><?php the_field ('footer__menu_a-text_5'); ?></a></li>
					</ul>
				</div>				
			</div>
			<div class="footer__buttons-text">
				<div class="footer__buttons">
					<a href="<?php the_field ('footer__button-link_1'); ?>" class="footer__button-1"><?php the_field ('footer__button-text_1'); ?></a>
					<a href="<?php the_field ('footer__button-link_2'); ?>" class="footer__button-2"><?php the_field ('footer__button-text_2'); ?></a>	
				</div>
				<p><?php the_field ('footer__buttons-text_p'); ?><a href="<?php the_field ('footer__link-text'); ?>" class="footer__link"><?php the_field ('footer__link'); ?></a></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</html>
