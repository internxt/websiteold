<section class="section section--articles articles--inxt" data-articles>

	<div class="container">

		<p class="section__heading">Our latest published articles</p>

		<div class="article-container">
			@foreach($mediumPosts->take(9) as $post)
				@include('_includes.article-preview')
			@endforeach
		</div>

		<a class="section__button" href="https://medium.com/internxt" rel="nofollow" target="_blank" style="width: 190px !important">Read more posts</a>

	</div>

</section>
