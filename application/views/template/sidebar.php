<div class="col-md-3 col-xs-12 side-bar">
	<img src="<?php echo base_url(); ?>img/logo.png" class="img-responsive logo hidden-xs hidden-sm" alt="jlamartistry logo"/>

	<nav class="navbar navbar-default visible-xs visible-sm mobile-nav navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header mobile-header hidden-sm">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="<?php echo base_url(); ?>img/mobile-logo.png" class="img-responsive logo" alt="jlamartistry mobile logo"/>
			<!-- <a class="navbar-brand" href="#"></a> -->
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<li<?php if ($title == 'celebrity') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>celebrity">celebrity</a></li>

        <li<?php if ($title == 'beauty') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>beauty">beauty</a></li>

        <li<?php if ($title == 'fashion') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>fashion">fashion</a></li>

        <li<?php if ($title == 'lifestyle') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>lifestyle">lifestyle</a></li>

			</ul>
			<ul class="nav navbar-nav">
				<li<?php if ($title == 'bio') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>bio">bio</a></li>

				<li<?php if ($title == 'services') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>services">services</a></li>

				<li<?php if ($title == 'contact') : ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>contact">contact</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	<ul class="nav nav-pills nav-stacked nav-picture hidden-xs hidden-sm">

		<li<?php if ($title == 'celebrity') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>celebrity">celebrity</a></li>

    <li<?php if ($title == 'beauty') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>beauty">beauty</a></li>

    <li<?php if ($title == 'fashion') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>fashion">fashion</a></li>

    <li<?php if ($title == 'lifestyle') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>lifestyle">lifestyle</a></li>


	</ul>

	<ul class="nav nav-pills nav-stacked nav-info hidden-xs  hidden-sm">

		<li<?php if ($title == 'bio') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>bio">bio</a></li>

		<li<?php if ($title == 'services') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>services">services</a></li>

		<li<?php if ($title == 'contact') : ?> class="active "<?php endif; ?>><a href="<?php echo base_url(); ?>contact">contact</a></li>

	</ul>

	<div class="social-icon hidden-xs  hidden-sm">

		<a href="//facebook.com/jlamartistry" class="fb" target="new"></a>

		<a href="//web.stagram.com/n/jlammie" class="stagram" target="new"></a>

		<a href="//twitter.com/jlammie" class="twitter" target="new"></a>

		<a href="//pinterest.com/jlammie" class="pintrest" target="new"></a>

	</div>

</div>
