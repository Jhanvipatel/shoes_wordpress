<?php get_header(); ?>





<section class="main_content">

		<div class="container">

			<div class="row">
				<div class="col-md-3">
					<aside class="sidebar-left">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</aside>
				</div>


				<div class="col-md-9">

<aside class="sidebar-right1">
<?php woocommerce_content(); ?>
	</aside>




				

				</div>



			</div>

		</div>

	</section>







































<?php

get_footer();
