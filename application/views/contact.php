<?php 

	$this->load->view('template/header', $data = array('title' => $title));

?>

<?php 

	$this->load->view('template/sidebar', $data = array('title' => $title));

?>

<div class="col-md-9 center-block" style="padding-left:0">

	<div id="slider-wrap" class="no-picture">

		<div id="slider" class="contact">

			<div class="img-wrap form-area">

				<div class="asdf">

					<h4>GET IN TOUCH</h4>

					<p>If you have a question or just want to chat, I would love to hear from you!</p>

				</div>

				<div id="msg"></div>

				<form method="post" id="contact-form">

					<input name="name" placeholder="name" /><input type="tel" name="phone" placeholder="phone number"/><br/>

					<input type="email" name="email" placeholder="e-mail address"/>

					<div style="position:relative">

						<input name="interested" id="contactDatePicker" placeholder="date of event/project"/>

					</div>

					

					<textarea placeholder="message" name="message"></textarea>

					<input type="submit" name="submit" value="" class="submit"/>

				</form>

			</div> 

			<div class="img-wrap contact-social">

				<p class="asdf">Please fill out the form to discuss a project or contact me using the methods below -</p>

				<p class="social-icon"><a href="mailto:hello@jlamartistry.com" class="email"></a>hello@jlamartistry.com</p>

				<hr style='width:275px;'/>

				<p class="social-icon"><a href="//facebook.com/jlamartistry" class="facebook"></a>friend me on facebook</p>

				<p class="social-icon"><a href="//twitter.com/jlammie" class="twitter"></a>tweet me on twitter</p>

				<p class="social-icon"><a href="//www.linkedin.com/in/jlamartistry/" class="linkedin"></a>connect w/ me on linkedin</p>

				<p class="social-icon"><a href="//instagram.com/jlammie" class="instagram"></a>follow me on instagram</p>

				<p class="social-icon"><a href="//pinterest.com/jlammie" class="pintrest"></a>pin me on pintrest</p>

			</div> 

		</div>

	</div>

</div>

<?php 

	$this->load->view('template/footer');