				<div class="col-sm-4" id="sidebar">
		          <div class="list-group">
		            <a href="#" class="list-group-item active">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		            <a href="#" class="list-group-item">Link</a>
		          </div>
		        </div><!--/span-->
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>