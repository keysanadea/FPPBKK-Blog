<div class="container-fluid top-margin" style="background-color: #ffffff; min-height: 160vh; font-family: 'Garamond', serif; ">
	<?php
	$this->load->helper('text');
	if ($this->session->userdata('blog_error')) : ?>
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo $this->session->flashdata('blog_error'); ?>
		</div>
	<?php endif;
	if (empty($blogs)) : ?>
		<div class="container card" style="background-color: black; color: white; box-shadow: rgba(0, 0, 0, 0.3) 12px 12px 5px 1px;">
			<div class="row text-white bg-dark">
				<div class="col-md-9 card-body">
					<div class="card-text">
						<p>No Records found....</p>
					</div>
				</div>
			</div>
		</div>
		<?php else :
		foreach ($blogs as $blog) : ?>
			<div class="container card" style="background-color: rgba(192, 192, 192, 0.5); color: black; box-shadow: rgba(0, 0, 0, 0.3) 12px 12px 5px 1px;">
				<h3 class="card-header" style="background-color: rgba(192, 192, 192, 0); color: black; font-family: 'Garamond', serif; font-weight: bold;"><?php echo $blog['title']; ?></h3>
				<div class="row text-black bg-white">
					<div class="col-md-3 mb-2">
						<?php if (!empty($blog['blog_image'])) : ?>
							<img class="img-border" src="<?php echo str_replace('index.php', '', site_url()); ?>application/assets/images/blogs/<?php echo $blog['blog_image']; ?>" width="100%" height="100%">
						<?php else : ?>
							<!-- Display a default image from assets when no blog image is available -->
							<img class="img-border" src="<?php echo base_url('application/assets/images/blogs/noimage.jpg'); ?>" width="100%" height="100%">
						<?php endif; ?>
					</div>
					<div class="col-md-9 card-body" style=" background-color: white; color: black;">
						<span class="badge badge-pill badge-primary" style="color: white; background-color: rgba(0, 0, 0, 0.5);"> Posted on: <?php echo $blog['created_on']; ?></span>
						in <strong class="card-title" style="color: orange;"><?php echo $blog['category_title']; ?></strong>
						<br>
						<div class="card-text">
							<?php echo word_limiter($blog['description'], 30); ?>
						</div>
						<p>
							<a class="btn btn-primary btn-lg" href="<?php echo site_url('/blogs/' . $blog['slug']); ?>" style="background-color: rgba(192, 192, 192, 0.5); color: black; font-weight: bold;">Read More >></a>
						</p>
					</div>
				</div>
			</div>
			<br>
	<?php
		endforeach;
	endif;
	?>
	<div>
		<?php
		echo '<ul class="pagination">';
		echo $this->pagination->create_links();
		echo '</ul>';
		?>
	</div>
</div>