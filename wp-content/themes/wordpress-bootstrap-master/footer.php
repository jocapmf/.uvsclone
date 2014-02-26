					</div> <!-- end content-wrapper (header.php line 96) -->
				</div><!-- end inner-content-wrapper (header.php line 97) -->
			</div><!-- end container wrapper (header.php line 98) -->
			<footer class="footer" role="contentinfo">
				<div id="inner-footer">
					<div class="container">
						<div class="row-fluid">
							<div class="span12" class="clearfix span12">
					          <div id="widget-footer" class="clearfix row-fluid">
					            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
					            <?php endif; ?>
					            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
					            <?php endif; ?>
					            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
					            <?php endif; ?>
					          </div>
								
								<nav class="clearfix">
									<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
								</nav>

								<p class="attribution">&copy; 2014 <?php bloginfo('name'); ?></p>
								<p class="pull-right socials">
									<a class="twitter" href="#">&nbsp;</a>
									<a class="facebook" href="#">&nbsp;</a>
								</p>
						
								
							
							</div> <!-- end #inner-footer -->
						</div>
					</div>
				</div>
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>