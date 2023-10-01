@extends('home.layout.layout')

@section('content')
<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url(homeassets/images/parallax-background/features-v3-bg.jpg);">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="inner-content">
					<div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
						<ul>
							<li><a href="/">Home</a></li>
							<li class="active">Contact</li>
						</ul>
					</div>

					<div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
						<h2>Contact</h2>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start Google Map Style2 Area-->
<section class="google-map-area">
	<div class="auto-container">
		<div class="contact-page-map-outer">
			<!--Map Canvas-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013.2313509868343!2d7.042160269567847!3d4.892166735912102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d25168b12b23%3A0x9078904bd705994!2sRexon%20Eye%20Clinic!5e1!3m2!1sen!2sng!4v1693609842048!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</section>
<!--End Google Map Style2 Area-->



<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6">
				<div class="contact-info-box">
					<div class="sec-title">
						<div class="sub-title">
							<h3>Get in Tocuh with us</h3>
						</div>
						<h2>Contact with the Team</h2>
					</div>
					<!-- <div class="text">
						<p>Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque <br> free porro
							simply.</p>
					</div> -->

					<div class="contact-info-list">
						<ul>
							<li>
								<div class="icon">
									<span class="icon-telephone"></span>
								</div>

								<div class="text">
									<p>Have any questions?</p>
									<h4>Free:  <a href="tel:2348033132557">+2348033132557</a> | <a href="tel:2349091061931">+2349091061931</a></h4>
								</div>
							</li>

							<li>
								<div class="icon">
									<span class="icon-email-1"></span>
								</div>

								<div class="text">
									<p>Write a email</p>
									<h4><a href="mailto:info@anamabia.com">info@anamabia.com</a></h4>
								</div>
							</li>

							<li>
								<div class="icon">
									<span class="icon-pin-1"></span>
								</div>

								<div class="text">
									<p>Visit our Office</p>
									<h4>Adonai Plaza #5 Airport Road Eneka Port Harcourt, River State,P.O.Box 7747</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>



			<div class="col-xl-6 col-lg-6">
				<div class="contact-form contact-form--style2">
					<div class="sec-title">
						<div class="sub-title">
							<h3>Write Message</h3>
						</div>
						<h2>Send a Message</h2>
					</div>

					<form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
						<div class="row">

							<div class="col-xl-12">
								<div class="form-group">
									<div class="input-box">
										<input type="text" name="form_name" id="formName" placeholder="Full Name" required="">
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="form-group">
									<div class="input-box">
										<input type="email" name="form_email" id="formEmail" placeholder="Email Address" required="">
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="form-group">
									<div class="input-box">
										<input type="text" name="form_phone" value="" id="formPhone" placeholder="Phone">
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="form-group">
									<div class="input-box">
										<input type="text" name="form_subject" value="" id="formSubject" placeholder="Subject">
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="form-group">
									<div class="input-box">
										<textarea name="form_message" id="formMessage" placeholder="Write a Message" required=""></textarea>
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="button-box">
									<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
									<button class="btn-one" type="submit" data-loading-text="Please wait...">
										<span class="txt">send a message<i class="icon-refresh arrow"></i></span>
									</button>
								</div>
							</div>

						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>
<!--End Main Contact Form Area-->
@endsection