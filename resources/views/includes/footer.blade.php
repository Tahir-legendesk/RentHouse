 <footer class="site-footer">
 	<div class="container">
 		<div class="row align-items-center">
 			<div class="col-md-3">
 				<div class="sf_1">
 					<a href="/" class="logo">
						<img src="/assets/images/logo.png" alt="" width="150">
 					</a>
 					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been the
 						industry's standard dummy text
 						ever</p>
 				</div>
 			</div>
 			<div class="col-md-6">
 				<nav>
 					<ul class="menu">
						<li class="active"><a href="../">Home</a></li>
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('house-all')}}">Rent</a></li>
						{{-- <li><a href="agents.php">Agent</a></li> --}}
						<li><a href="{{ route('register') }}">Become a Member</a></li>
						<li><a href="{{route('atv-rental')}}">ATV’s rentals</a></li>
						<li><a href="{{route('contact')}}">Contact Us</a></li>
 					</ul>
 				</nav>
 			</div>
 			<div class="col-md-3">
 				<div class="sf_2">
 					<h3>Subscribe Us</h3>
					<div class="alert alert-success" id="success_alert" style="display: none;">Thanks for subscribing us</div>
					 <form method="post" id="subscribe_form">
						<input type="hidden" id="token" value="{{ csrf_token() }}">
						<input type="email" name="email" placeholder="Your email here...">
						<input type="submit" value="Subscribe">
					  </form>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="ftr_btm">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-6">
 					<p>© 2023 company name, Inc.</p>
 				</div>
 				<div class="col-md-6 text-end">
 					<p><a href="">Terms</a> <a href="">Privacy</a> <a href="">Your Privacy Choices</a></p>
 				</div>
 			</div>
 		</div>
 	</div>
 </footer>