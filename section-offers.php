<section class="offers">
	<div class="container">
		<?php
			$title_offers   = get_sub_field('title_offers');
			$content_offers = get_sub_field('content_offers');
			$style          = get_sub_field('style');
			$moreBtnTxt     = get_sub_field('section_btn_txt');
			$moreBtnLnk     = get_sub_field('section_btn_lnk');
		?>
		
		
		<?php if ($offers = get_sub_field('offers')) :  ?>
		<div class="offers-holder">
			
				
				<ul class="offers-list">
                    <li>
	                    <?php if ($title_offers || $content_offers): ?>
                            <div class="heading">
			                    <?php if ($title_offers): ?>
                                    <h2><?php echo $title_offers ?></h2>
			                    <?php endif; ?>
			                    <?php if($content_offers) : ?>
				                    <?php echo $content_offers ?>
                                    <strong>Offers Expire: <?php
						                    $format = 'F jS, Y';
						                    $date = new DateTime('now');
						                    $date->modify('last day of this month');
						                    echo $date->format($format); ?></strong>
			                    <?php endif; ?>
                                <?php if( $moreBtnTxt && $moreBtnLnk ) : ?>
                                    <a class="btn btn-orange moreOff" href="<?php echo $moreBtnLnk; ?>"><?php echo $moreBtnTxt; ?></a>
                                <?php endif; ?>
                            </div>
	                    <?php endif; ?>
                    </li>
					<?php $i = 0;
							foreach ($offers as $post): $i++;
							setup_postdata($post);
							$bgImg          = get_field('bg_image');
							$oCol           = get_field('overlay_color');
							$image_offer    = get_field('special_icon');
							$title_line_1   = get_field('heading');
							$title_line_2   = get_field('sub_heading');
							$title_line_3   = get_field('box_summary');
							$offer_info     = get_field('content');
							$offer_form     = get_field('box_form_shortcode');

							$cta_link       = get_field('cta_link');
							?>
							
							<li>
								<?php if($style === '1') : ?>
									<div class="box-offers content-right match-me">
										<div class="box-holder inner-match" <?php if($oCol) : ?>style="background-color:<?php echo $oCol; ?>" <?php endif; ?>>
           
											<div class="col-xs-10 col-xs-offset-1 description alpha-match">
												<?php if ($title_line_1): ?>
													<h4><?php echo $title_line_1 ?></h4>
												<?php endif; ?>
												<?php if ($title_line_2): ?>
													<p><?php echo $title_line_2 ?></p>
												<?php endif; ?>
											</div>
											<div class="offers-info col-xs-12">
												<?php if ($image_offer): ?>
													<div class="left col-xs-5 beta-match">
														<span class="alignHelp"></span><img src="<?php echo $image_offer['url'] ?>" srcset="<?php echo am_get_retina($image_offer['url']) ?> 2x" alt="" width="<?php echo $image_offer['width'] ?>" height="<?php echo $image_offer['height'] ?>">
													</div>
												<?php endif; ?>
												<div class="col-xs-7 table-block text-center beta-match">
													<?php if ($title_line_3): ?>
													<p><?php echo $title_line_3 ?></p>
												</div>
											</div>
											<?php endif; ?>
											<?php if($offer_form) :?>
												<div class="specFormWrapper-<?php echo $i;?> specWrap">
													<a class="btn btn-orange specOpener-<?php echo $i;?>" href="#specOffer-<?php echo $i;?>" data-effect="mfp-3d-unfold">Learn More</a>
													<div id="specOffer-<?php echo $i;?>" class="specInfoWrapper-<?php echo $i;?> hide-me mfp-hide mfp-with-anim">
														<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
															<h3><?php echo $title_line_1 ?></h3>
															<p><?php echo $title_line_2 ?></p>
															<?php echo $offer_info; ?>
														</div>
														<div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 text-center">
															<?php echo do_shortcode($offer_form); ?>
														</div>
													</div>
												</div>
											<?php endif; ?>
                                            <?php if ($cta_link): ?>
                                                <div class="offer_cta">
                                                    <a href="<?php echo $cta_link ?>">Learn More <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            <?php endif; ?>
										</div>
									</div>
								<?php elseif($style === '2') : ?>
									<div class="box-offers content-center match-me">
										<div class="box-holder inner-match"<?php if($oCol) : ?>style="background-color:<?php echo $oCol; ?>" <?php endif; ?>>
											
											<?php if ($image_offer): ?>
												<div class="left col-xs-5 alpha-match">
													<span class="alignHelp"></span><img src="<?php echo $image_offer['url'] ?>" srcset="<?php echo am_get_retina($image_offer['url']) ?> 2x" alt="" width="<?php echo $image_offer['width'] ?>" height="<?php echo $image_offer['height'] ?>">
												</div>
											<?php endif; ?>
											<div class="description col-xs-12 beta-match">
												<?php if ($title_line_1): ?>
													<h4><?php echo $title_line_1 ?></h4>
												<?php endif; ?>
												<?php if ($title_line_2): ?>
													<p><?php echo $title_line_2 ?></p>
												<?php endif; ?>
											</div>
											<?php if ($title_line_3): ?>
												<div class="offers-info col-xs-12">
													<p><?php echo $title_line_3 ?></p>
												</div>
											<?php endif; ?>
											<?php if($offer_form) :?>
												<div class="specFormWrapper-<?php echo $i;?> specWrap">
													<a class="btn btn-orange specOpener-<?php echo $i;?>" href="#specOffer-<?php echo $i;?>" data-effect="mfp-3d-unfold">Learn More</a>
													<div id="specOffer-<?php echo $i;?>" class="specInfoWrapper-<?php echo $i;?> hide-me mfp-hide mfp-with-anim">
														<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
															<h3><?php echo $title_line_1 ?></h3>
															<p><?php echo $title_line_2 ?></p>
															<?php echo $offer_info; ?>
														</div>
														<div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 text-center">
															<?php echo do_shortcode($offer_form); ?>
														</div>
													</div>
												</div>
											<?php endif; ?>
                                            <?php if ($cta_link): ?>
                                                <div class="offer_cta">
                                                    <a href="<?php echo $cta_link ?>">Learn More <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            <?php endif; ?>
										</div>
									</div>
								<?php elseif($style === '3') : ?>
									<div class="box-offers image-center match-me">
										<div class="box-holder inner-match"<?php if($oCol) : ?>style="background-color:<?php echo $oCol; ?>" <?php endif; ?>>
											<?php if ($image_offer): ?>
												<div class="col-xs-10 col-xs-offset-1 alpha-match">
													<span class="alignHelp"></span><img src="<?php echo $image_offer['url'] ?>" srcset="<?php echo am_get_retina($image_offer['url']) ?> 2x" alt="" width="<?php echo $image_offer['width'] ?>" height="<?php echo $image_offer['height'] ?>">
												</div>
											<?php endif; ?>
											<div class="description col-xs-10 col-xs-offset-1 beta-match">
												<?php if ($title_line_1): ?>
													<h4><?php echo $title_line_1 ?></h4>
												<?php endif; ?>
												<?php if ($title_line_2): ?>
													<p><?php echo $title_line_2 ?></p>
												<?php endif; ?>
											</div>
											<?php if ($title_line_3): ?>
												<div class="offers-info col-xs-10 col-xs-offset-1">
													<p><?php echo $title_line_3 ?></p>
												</div>
											<?php endif; ?>
											<?php if($offer_form) :?>
												<div class="specFormWrapper-<?php echo $i;?> specWrap">
													<a class="btn btn-orange specOpener-<?php echo $i;?>" href="#specOffer-<?php echo $i;?>" data-effect="mfp-3d-unfold">Learn More</a>
													<div id="specOffer-<?php echo $i;?>" class="specInfoWrapper-<?php echo $i;?> hide-me mfp-hide mfp-with-anim">
														<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
															<h3><?php echo $title_line_1 ?></h3>
															<p><?php echo $title_line_2 ?></p>
															<?php echo $offer_info; ?>
														</div>
														<div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 text-center">
															<?php echo do_shortcode($offer_form); ?>
														</div>
													</div>
												</div>
											<?php endif; ?>
                                            <?php if ($cta_link): ?>
                                                <div class="offer_cta">
                                                    <a href="<?php echo $cta_link ?>">Learn More <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            <?php endif; ?>
										</div>
									</div>
								<?php endif; ?>
							
							</li>
					
						<?php endforeach;
						wp_reset_postdata();
					?>
				</ul>
			
		</div>
		<?php
		endif;
		?>
	</div>
</section>