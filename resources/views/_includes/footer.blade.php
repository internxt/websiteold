@if(Route::currentRouteName() != "home")
	<footer class="pageFooter">
		<div class="container">
			<div class="pageFooter__links">
				<ul>
					<li class="pageFooter__heading">Drive</li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.overview') }}">Overview</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.technology') }}">Security</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.interface') }}">User Interface</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.eco') }}">Eco-friendly</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.individuals') }}">For Individuals</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.teams') }}">For Teams</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.get-started') }}">Get Started</a></li>
					<li class="pageFooter__link"><a href="{{ route('xcloud.get-started') }}">Downloads</a></li>

				</ul>
				<ul>
					<li class="pageFooter__heading">Core</li>
					<li class="pageFooter__link"><a href="{{ route('xcore.overview') }}">Overview</a></li>
					<li class="pageFooter__link xcore-get-started"><a href="{{ route('xcore.get-started') }}">Setup &amp; Tips</a></li>
				</ul>
				<ul>
					<li class="pageFooter__heading">Token</li>
					<li class="pageFooter__link"><a href="{{ route('inxt.overview') }}">Overview</a></li>
					<li class="pageFooter__link"><a href="{{ route('inxt.metrics') }}">Token Metrics</a></li>
					<li class="pageFooter__link"><a href="{{ route('inxt.buy') }}">Buy INXT</a></li>
				</ul>
				<ul>
					<li class="pageFooter__heading">More</li>
					<li class="pageFooter__link"><a href="{{ route('more.about') }}">About Us</a></li>
					<li class="pageFooter__link"><a href="https://medium.com/internxt" rel="nofollow" target="_blank">News</a></li>
				</ul>
				<ul>
					<li class="pageFooter__heading pageFooter__heading--legal">Legal</li>
					<li class="pageFooter__link"><a href="{{ route('more.terms') }}">Terms &amp; Conditions</a></li>
					<li class="pageFooter__link"><a href="{{ route('more.privacy') }}">Privacy Policy</a></li>
				</ul>
			</div>
			<p class="pageFooter__call">Call +34 677 753 624 to Contact Us</p>

			<div class="pageFooter__separator"></div>

			<div class="pageFooter__copyrightRow">
				<p class="pageFooter__copyright">Prices shown are final and include all taxes. Copyright &copy; {{ date('Y') }} {{ config('services.internxt.name') }}</p>
				<ul class="pageFooter__socialMediaLinks">
					<li>
						<a class="pageFooter__socialMediaLink" href="https://twitter.com/Internxt" rel="nofollow" target="_blank"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a class="pageFooter__socialMediaLink" href="https://medium.com/Internxt" rel="nofollow" target="_blank"><i class="fab fa-medium"></i></a>
					</li>
					<li>
						<a class="pageFooter__socialMediaLink" href="https://github.com/Internxt" rel="nofollow" target="_blank"><i class="fab fa-github"></i></a>
					</li>
					<li>
						<a class="pageFooter__socialMediaLink" href="mailto:{{ config('services.internxt.email') }}" rel="nofollow" target="_blank"><i class="fas fa-envelope"></i></a>
					</li>
					<li>
						<a class="pageFooter__socialMediaLink" href="https://www.instagram.com/Internxt/" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
@endif
