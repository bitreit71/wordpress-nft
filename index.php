<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package redhat
 */

get_header();
?>

	<main>
		<div class="background"></div>
		<div class="screen-title">
			<div class="screen-title__container">
				<div class="screen-title__h1-container _anim-items">
					<h1><?php the_field ('screen-title__h1-container', 'options'); ?></h1>
				</div>
				<div class="screen-title__img-container _anim-items">
					<img src="<?php the_field ('screen-title__img-container', 'options'); ?>" alt="" class="screen-title__img">
				</div>			
			</div>
			<div class="screen-button _anim-items">
				<div class="screen-button__container">
					<div class="screen-button__desc">
						<p><?php the_field ('screen-button__desc', 'options'); ?></p>
					</div>
					<div class="screen-button__buttons">
						<a href="<?php the_field ('button-1_url', 'options'); ?>" class="screen-button__button-1"><?php the_field ('button-1_text', 'options'); ?></a>
						<a href="<?php the_field ('button-2_url', 'options'); ?>" class="screen-button__button-2"><?php the_field ('button-2_text', 'options'); ?></a>					
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
			<h2>CNFT tools</h2>
			<div class="screen-tools__container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiger.png" alt="" class="screen-tools__img">
				<p class="screen-tools__text">We have partnered with CNFT.tools to bring you the official Happy Tigers Club Rarity.</p>
			</div>
		</div>''
		<div id="roadmap" class="screen-roadmap _anim-items">
			<h2>Roadmap</h2>
			<div class="screen-roadmap__container">
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Minting</h3>
							<p>Start of minting of 3333 happy tigers on Blockchain cardan that will bring joy everywhere!After this you will be able to see the rarities on cnft.tools. </p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Airdrop</h3>
							<p>Аt the end of the minting shortly after we will start the airdrop of 50 to each 100 tigers chosen at random! Obviously good luck!</p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/03.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text-roy">
							<h3>Royalties</h3>
							<p>When the project will mint, as soon as a nft will be listed and sold that is the beginning of the 50% monthly royalties shares that will go to the top 333 tigers! Remember the more tigers you have the better it is  !!</p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/04.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Second Generation Collection</h3>
							<p>We will get in touch with the best artists in the field to have a great collection of fantastic tigers! They will also have amazing utilities!</p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container">
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/05.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Staking</h3>
							<p>In this phase we will begin the development of tiger staking, in the game there will be a currency that you will get for each tiger you stake.</p>
						</div>
					</div>
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/06.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Collaboration</h3>
							<p>We will get in touch with a famous project to start developing a project that represents the projects!</p>
						</div>
					</div>
				</div>
				<div class="screen-roadmap__info-container-buttom">
					<div class="screen-roadmap__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/07.png" alt="" class="screen-roadmap__number">
						<div class="screen-roadmap__text">
							<h3>Roadmap 2.0</h3>
							<p>After all the steps have been completed we will begin to release the second and final version of the project!</p>
						</div>
					</div>
				</div>									
			</div>
		</div>

		  <div id="gallery" class="screen-slider _anim-items">

		  	  <h2>Gallery</h2>
		  	  <div class="screen-slider__container">
			      <div class="slick">
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-1.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-2.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-3.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-4.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiger-read.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-1.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-2.png" alt=""></div>
			         <div class="slick-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-3.png" alt=""></div>
			      </div>	  	  	
		  	  </div>
		   </div>

		<div id="team" class="screen-team">
			<h2>Team</h2>
			<div class="screen-team__container _anim-items">
				<div class="screen-team__members">
					<div class="screen-team__member">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-1.png" alt="">
						<p class="screen-team__member-name"><a class="screen-team__member-name" href="https://twitter.com/chandllion_jpg">@chandllion_jpg</a><p>
						<p class="screen-team__member-status">Founder</p>
						<p class="screen-team__member-name"><a href="https://twitter.com/chandllion_jpg" class="screen-team__member-contacts">twitter.com/chandllion_jpg</a></p>
					</div>
					<div class="screen-team__member">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-2.png" alt="">
						<p class="screen-team__member-name"><a href="https://twitter.com/Robbo_NFT" class="screen-team__member-name">@Robbo_NFT</a></p>
						<p class="screen-team__member-status">Finances</p>
						<p class="screen-team__member-name"><a href="https://twitter.com/Robbo_NFT" class="screen-team__member-contacts">twitter.com/Robbo_NFT</a></p>
					</div>					
				</div>
				<div class="screen-team__members">
					<div class="screen-team__member">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-3.png" alt="">
						<p class="screen-team__member-name"><a href="https://twitter.com/SeekerOfcosmos" class="screen-team__member-name">@SeekerOfcosmos</a><p>
						<p class="screen-team__member-status">Headmod</p>
						<p class="screen-team__member-name"><a href="https://twitter.com/SeekerOfcosmos" class="screen-team__member-contacts">twitter.com/SeekerOfcosmos</a></p>
					</div>
					<div class="screen-team__member">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-tiger-4.png" alt="">
						<p class="screen-team__member-name"><a href="https://twitter.com/bofke1992" class="screen-team__member-name">@bofke1992</a></p>
						<p class="screen-team__member-status">Advisor</p>
						<p class="screen-team__member-name"><a href="https://twitter.com/bofke1992" class="screen-team__member-contacts">twitter.com/bofke1992</a></p>
				</div>					
				</div>						
			</div>
		</div>
		<div id="faq" class="screen-faq">
			<h2>Faq</h2>
			<div class="screen-faq__container">
				<div class="screen-faq__info-block-1 _anim-items">
					<h3>What is Happy Tigers Club?</h3>
					<p>Happy Tigers Club is a collection of 3333 tigers that will love in the Cardano Blockchain!</p>
				</div>
				<div class="screen-faq__info-block-2 _anim-items">
					<h3>What is the mint price?</h3>
					<p>The mint price will be of 30 ada!</p>
				</div>
				<div class="screen-faq__info-block-3 _anim-items">
					<h3>When is the mint date?</h3>
					<p>The mint date will be the  2nd June, the exact time will be updated.</p>
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
