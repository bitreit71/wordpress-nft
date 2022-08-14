<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redhat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
	<title>Tigers NFT</title>
</head>z

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<header>
	<div class="header">
		<div class="header__burger">
			<span></span>
		</div>
		<div class="header__menubar">
			<ul class="header__menu">
				<li><a href="#rarity" class="scroll"><?php the_field ('header__menu-rarity'); ?></a></li>
				<li><a href="#gallery" class="scroll"><?php the_field ('header__menu-gallery'); ?></a></li>
				<li><a href="#roadmap" class="scroll"><?php the_field ('header__menu-roadmap'); ?></a></li>
				<li><a href="#team" class="scroll"><?php the_field ('header__menu-team'); ?></a></li>
				<li><a href="#faq" class="scroll"><?php the_field ('header__menu-faq'); ?></a></li>
			</ul>
		</div>
	</div>		
</header>

