<?php

/*
Template Name: Главная страница
*/

get_header();
?>

	<main>
		<div class="background"></div>
		<div class="screen-title">
			<div class="screen-title__container">
				<div class="screen-title__h1-container _anim-items">
					<h1><?php the_field ('screen-title__h1-container'); ?></h1>
				</div>
				<div class="screen-title__img-container _anim-items">
					<img src="<?php the_field ('screen-title__img-container'); ?>" alt="" class="screen-title__img">
				</div>			
			</div>
			<div class="screen-button _anim-items">
				<div class="screen-button__container">
					<div class="screen-button__desc">
						<p><?php the_field ('screen-button__desc'); ?></p>
					</div>
					<div class="screen-button__buttons">
						<a href="<?php the_field ('button-1_url'); ?>" class="screen-button__button-1"><?php the_field ('button-1_text'); ?></a>
						<a href="<?php the_field ('button-2_url'); ?>" class="screen-button__button-2"><?php the_field ('button-2_text'); ?></a>					
					</div>
				</div>
			</div>
		</div>
		<div class="screen-minting-box _anim-items">
			<h2>Minting box</h2>
			<div class="screen-minting-box__container">
				<div class="screen-minting-box__text-container">
					<p>To be a member of the community you need to hold at least one NFT from our main collection "NFT Cartel Pass Card". This NFT will be available for minting on June 6th. To be whitelisted for this mint on June 5th and receive 80% discount you have to own NFT from "Invite to NFT Cartel Mint" collection, this collection is currently sold out and is available only on secondary marketplaces</p>
					<p>Public price for "NFT Cartel Pass Card" on June 6th will be 500ADA, whitelisted price for holders of "Invite to NFT Cartel Mint" collection will be 100ADA.</p>
				</div>
				<div class="screen-minting-box__counter">
					<div class="quantity-counter">
						<div class="quantity-counter__buttons">
						  	<button id="counter-decrement" class="decrement"><span class="decrement-minus">-</span></button>
						  	<button id="counter-increment" class="increment"><span class="decrement-plus">+</span></button>
						</div>	
						<input id="counter-value" class="value" type="text" value="0">
					</div>
					<a href="#" class="screen-minting-box__link-button">mint nft</a>	
				</div>			
			</div>
		</div>
		<div id="rarity" class="screen-tools _anim-items">
			<h2><?php the_field ('screen-tools__h2'); ?></h2>
			<div class="screen-tools__container">
				<img src="<?php the_field ('screen-tools__img'); ?>" alt="" class="screen-tools__img">
				<p class="screen-tools__text"><?php the_field ('screen-tools__text'); ?></p>
			</div>
		</div>''
		<div id="roadmap" class="screen-roadmap _anim-items">
			<h2><?php the_field ('screen-roadmap__h2'); ?></h2>
			<div class="screen-roadmap__container">
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_1'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-1'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-1'); ?></p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_2'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-2'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-2'); ?></p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_3'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-3'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-3'); ?></p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_4'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-4'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-4'); ?></p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_5'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-5'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-5'); ?></p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_6'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-6'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-6'); ?></p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container-buttom">
					<div class="screen-roadmap__block">
						<img src="<?php the_field ('screen-roadmap__block-img_7'); ?>" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3><?php the_field ('screen-roadmap__h3-7'); ?></h3>
							<p><?php the_field ('screen-roadmap__text-7'); ?></p>
						</div>
					</div>
				</div>									
			</div>
		</div>

		  <div id="gallery" class="screen-slider _anim-items">

		  	  <h2><?php the_field ('screen-slider__h2'); ?></h2>
		  	  <div class="screen-slider__container">
			      <div class="slick">
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_1'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_2'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_3'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_4'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_5'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_6'); ?>" alt=""></div>
			         <div class="slick-item"><img src="<?php the_field ('screen-slider__img_7'); ?>" alt=""></div>
			      </div>	  	  	
		  	  </div>
		   </div>

		<div id="team" class="screen-team">
			<h2><?php the_field ('screen-team__h2'); ?></h2>
			<div class="screen-team__container _anim-items">
				<div class="screen-team__members">
					<div class="screen-team__member">
						<img src="<?php the_field ('screen-team__img_1'); ?>" alt="">
						<p class="screen-team__member-name"><a class="screen-team__member-name" href="<?php the_field ('screen-team__member-name-a_1'); ?>"><?php the_field ('screen-team__member-name_1'); ?></a><p>
						<p class="screen-team__member-status"><?php the_field ('screen-team__member-status_1'); ?></p>
						<p class="screen-team__member-name"><a href="<?php the_field ('screen-team__member-contacts_1'); ?>" class="screen-team__member-contacts"><?php the_field ('screen-team__member-contacts-a_1'); ?></a></p>
					</div>
					<div class="screen-team__member">
						<img src="<?php the_field ('screen-team__img_1'); ?>" alt="">
						<p class="screen-team__member-name"><a class="screen-team__member-name" href="<?php the_field ('screen-team__member-name-a_2'); ?>"><?php the_field ('screen-team__member-name_2'); ?></a><p>
						<p class="screen-team__member-status"><?php the_field ('screen-team__member-status_2'); ?></p>
						<p class="screen-team__member-name"><a href="<?php the_field ('screen-team__member-contacts_2'); ?>" class="screen-team__member-contacts"><?php the_field ('screen-team__member-contacts-a_2'); ?></a></p>
					</div>					
				</div>
				<div class="screen-team__members">
					<div class="screen-team__member">
						<img src="<?php the_field ('screen-team__img_3'); ?>" alt="">
						<p class="screen-team__member-name"><a class="screen-team__member-name" href="<?php the_field ('screen-team__member-name-a_3'); ?>"><?php the_field ('screen-team__member-name_3'); ?></a><p>
						<p class="screen-team__member-status"><?php the_field ('screen-team__member-status_3'); ?></p>
						<p class="screen-team__member-name"><a href="<?php the_field ('screen-team__member-contacts_3'); ?>" class="screen-team__member-contacts"><?php the_field ('screen-team__member-contacts-a_3'); ?></a></p>
					</div>
					<div class="screen-team__member">
						<img src="<?php the_field ('screen-team__img_4'); ?>" alt="">
						<p class="screen-team__member-name"><a class="screen-team__member-name" href="<?php the_field ('screen-team__member-name-a_4'); ?>"><?php the_field ('screen-team__member-name_4'); ?></a><p>
						<p class="screen-team__member-status"><?php the_field ('screen-team__member-status_4'); ?></p>
						<p class="screen-team__member-name"><a href="<?php the_field ('screen-team__member-contacts_4'); ?>" class="screen-team__member-contacts"><?php the_field ('screen-team__member-contacts-a_4'); ?></a></p>
					</div>					
				</div>						
			</div>
		</div>
		<div id="faq" class="screen-faq">
			<h2><?php the_field ('screen-faq__h2'); ?></h2>
			<div class="screen-faq__container">
				<div class="screen-faq__info-block-1 _anim-items">
					<h3><?php the_field ('screen-faq__h3_1'); ?></h3>
					<p><?php the_field ('screen-faq__p_1'); ?></p>
				</div>
				<div class="screen-faq__info-block-2 _anim-items">
					<h3><?php the_field ('screen-faq__h3_2'); ?></h3>
					<p><?php the_field ('screen-faq__p_21'); ?></p>
				</div>
				<div class="screen-faq__info-block-3 _anim-items">
					<h3><?php the_field ('screen-faq__h3_3'); ?></h3>
					<p><?php the_field ('screen-faq__p_3'); ?></p>
				</div>						
			</div>
		</div>		
	</main>

	<?php
	get_footer(); ?>	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
	<script>
		$(document) .ready(function() {
		    $('.header__burger').click(function(event) {
		        $('.header__burger,.header__menubar') .toggleClass('active');   
		    });
		   });

		   'use strict';

		$('.slick').slick({
			dots: true,
			 centerMode: true,
			 centerPadding: '10px',
			 slidesToShow: 5,
		});	 

		jQuery("document").ready(function(){
			jQuery(".scroll").click(function (event) {
				event.preventDefault();
				var id  = jQuery(this).attr('href'),
					top = jQuery(id).offset().top;
				jQuery('body,html').animate({
					scrollTop: top
				}, 1500);
			});
		});

	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
