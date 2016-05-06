<?php

	$this->load->view('template/header', $data = array('title' => $title));

?>

<?php

	$this->load->view('template/sidebar', $data = array('title' => $title));

?>

<div class="col-md-9 center-block">

	<div id="slider-wrap" class="no-picture">

		<div id="slider" class="services">

			<div class="img-wrap" style="width:340px">

				<h4>CELEBRITY</h4>

				<h5>MAKEUP</h5>

				<p>bride &bull; 150 <em>[lashes are included]</em><br/>

				bridal party &bull; 100 <em>[lashes are included]</em><br/>

				aibrush &bull; +25<br/>

				trial &bull; same as wedding day prices</p>

				<h5>HAIR</h4>

				<p>bride &bull; 100<br/>

				bridal party &bull; 85<br/>

				flower girl &bull; 60<br/>

				trial &bull; same as wedding day prices</p><br/>

				<h4>PAGEANTS/COMPEITIONS</h4>

				<p>makeup &bull; starting at 150 <em>[lashes are included]</em><br/>

				hair &bull; starting at 50</p><br/>

                <h4>SPECIAL OCCASIONS</h4>

				<p>makeup &bull; starting at 150 <em>[lashes are included]</em><br/>

				hair &bull; starting at 50</p><br/><br/>

			</div>

			<div class="img-wrap" style="width: 350px;">

				<h6>For all media inquiries [print, film, tv, events], please contact <a href="http://www.wehmann.com" class="link" target="new">Wehmann Models + Talent</a>.</h6>

				<h6>They can be contacted at <span class="highlight">612-333-6393</span> or by visiting their website at <a href="http://www.wehmann.com" class="link" target="new">www.wehmann.com</a>.</h6>

			</div>

		</div>

	</div>

</div>

<?php

	$this->load->view('template/footer');
