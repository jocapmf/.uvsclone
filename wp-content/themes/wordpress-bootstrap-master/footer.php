			</div> <!-- end #container -->
			<footer class="container" role="contentinfo">
				<div class="row-fluid">
					<div id="inner-footer span12" class="clearfix span12">
			          <hr />
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
						
						<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>
				
						<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
					
					</div> <!-- end #inner-footer -->
				</div>
			</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>