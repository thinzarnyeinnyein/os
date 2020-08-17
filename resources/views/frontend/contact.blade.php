@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2 class="text-center my-3">Contact Us</h2>
	<div class="container my-2">

		<div class="row my-2">
			<div class="col-lg-6 col-md-12 col-sm-12 text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236854.42785582345!2d95.93573313517453!3d21.94030054313274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d23f0d27411%3A0x24146be01e4e5646!2sMandalay!5e0!3m2!1sen!2smm!4v1595165839819!5m2!1sen!2smm" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 my-3">
				<div class="row">
					<form name="send_form" class="w-100">
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<input type="text" placeholder="Your Name" id="cname" name="cname" class="form-control" required="required">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<input type="email" placeholder="Your email" id="cemail" name="cemail" class="form-control" required="required">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<input type="text" placeholder="Subject" id="csubject" name="csubject" class="form-control" required="required">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea class="form-control" id="cmessage" name="cmessage" placeholder="Message" required="required"></textarea>
						</div>
						<div class="ml-3">
							<button type="submit" class="btn btn-secondary" onclick="sendForm()">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- For form data clear -->
	<script>
		function sendForm() {
			document.send_form.submit();
			document.send_form.reset();
		}
	</script>

	<div class="container my-4">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center my-3">
				<h4>Address</h4>
				<p>Mandalay Office</p>
				<p>58 Street,Chan Aye Tar Zan</p>
				<p>Yangon Office</p>
				<p>Hlaing Township</p>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center my-3">
				<h4>Phone</h4>
				<p>Service Deparment</p>
				<p>0977889966</p>
				<p>Developer Team</p>
				<p>0997734568</p>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
				<h4>Email</h4>
				<p>Request for Proposal</p>
				<p>thinzar97@gmail.com</p>
				<p>Empolyment Opportunities</p>
				<p>mobileshop66@gamil.com</p>

			</div>

		</div>

	</div>

	
</div>


@endsection