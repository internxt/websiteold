<section class="section section--articles articles--inxt" data-articles>

	<div class="container">

		<p class="section__heading">Latest published INXT articles</p>

		<div class="article-container">
			@foreach($mediumPosts->filter(function($post){ return in_array("inxt", $post['tags']); })->take(6) as $post)
				@include('_includes.article-preview')
			@endforeach

			{{-- Temp --}}

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1031/1*TtT72huH-Fri5wt9vANniQ.png">
				<div class="article__content">
					<p class="article__date">May 15, 2019</p>
					<p class="article__heading">Internxt gets awarded Binance Info’s V Label</p>
					<a class="article__link" href="https://medium.com/internxt/internxt-gets-awarded-binance-infos-v-label-86cc3cfadf9c" target="_blank">Read article</a>
				</div>
			</div>

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1689/1*BSN_g8qSS8cPF0T3ixA1cw.png">
				<div class="article__content">
					<p class="article__date">May 11, 2019</p>
					<p class="article__heading">What’s the best way to buy and store cryptocurrency?</p>
					<a class="article__link" href="https://medium.com/internxt/whats-the-best-way-to-buy-and-store-cryptocurrency-8f466ec5f381" target="_blank">Read article</a>
				</div>
			</div>

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1960/1*afge4MVknSVi6bYbVUbBSQ.png">
				<div class="article__content">
					<p class="article__date">Nov 2, 2018</p>
					<p class="article__heading">Internxt is now on Coinbase Wallet</p>
					<a class="article__link" href="https://medium.com/internxt/internxt-is-now-on-coinbase-wallet-e47ef0179ce3" target="_blank">Read article</a>
				</div>
			</div>

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1695/1*8BcCOePN-zE5jQ0IR1rTNQ.png">
				<div class="article__content">
					<p class="article__date">Nov 19, 2018</p>
					<p class="article__heading">Internxt’s token, INXT. Embrace the power</p>
					<a class="article__link" href="https://medium.com/internxt/internxts-token-inxt-embrace-the-power-99dc8940a4b6" target="_blank">Read article</a>
				</div>
			</div>

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1385/1*8f134zCrJXJo5Z1ukxax0Q.png">
				<div class="article__content">
					<p class="article__date">May 25, 2018 </p>
					<p class="article__heading">Join our X Cloud waiting list and win INXT</p>
					<a class="article__link" href="https://medium.com/internxt/join-our-x-cloud-waiting-list-and-win-inxt-ea3a5fd24118" target="_blank">Read article</a>
				</div>
			</div>

			<div class="article">
				<img loading="lazy" class="article__image" src="https://miro.medium.com/max/1385/1*57-WtnLGsRbLpUveXBZEFQ.png">
				<div class="article__content">
					<p class="article__date">Nov 30, 2017</p>
					<p class="article__heading">INXT</p>
					<a class="article__link" href="https://medium.com/internxt/inxt-11c2e58f9807" target="_blank">Read article</a>
				</div>
			</div>

		</div>

	</div>

</section>
