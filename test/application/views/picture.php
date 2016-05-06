<?php 
	$this->load->view('template/header', $data = array('title' => $title));

?>

<?php 

	$this->load->view('template/sidebar', $data = array('title' => $title));

?>

<div class="col-md-9 center-block hidden-xs hidden-sm">

	<div id="slider-wrap" class="picture">

		<div class="loader">
			
			<img src="<?php echo base_url();?>img/loading.gif" alt="loading icon"/>

		</div>

		<div class="left"></div>

		<div class="right"></div>

		<div id="slider">

			<?php 

			$count = count($pictures);

			foreach($pictures as $index => $picture): 

			$firstOrLast = '';

			if ($index == 0) {

				$firstOrLast = 'first';

			}

			if ($index == ($count - 1)) {

				$firstOrLast = 'last';

			}

			?>

			<div class="img-wrap <?php echo $firstOrLast;?>">

				<img src="<?php echo $picture; ?>" alt="<?php echo $title . ' picture ' . $index; ?>" />

			</div> 

			<?php endforeach; ?>

		</div>

	</div>

</div>

<div class="col-md-9 center-block hidden-md hidden-lg" style="position:relative; z-index:-1;padding:0">
			<?php 
			foreach($pictures as $index => $picture): 
			?>
				<img src="<?php echo $picture; ?>" class="small-picture" alt="<?php echo $title . ' mobile picture ' . $index; ?>"/>

			<?php endforeach; ?>

</div>


<!-- <div class="col-xs-12 picture-nav visible-xs">

	<button type="button" class="btn btn-default button-prev">prev</button>

	<button type="button" class="btn btn-default pull-right button-next">next</button>

</div> -->
<?php 

	$this->load->view('template/footer');