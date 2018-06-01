<!-- 友情链接 -->

<div class="advertising">
	@foreach( $adverts as $advert )
	<div class="banner section shadow banner-section">
		<a href="{{ $advert -> url }}" rel="nofollow noopener noreferrer" target="_blank">
			<div class="lazy thumb banner-image loaded" style="background-image: url('{{ $advert -> image }}');background-size: cover;"></div>
		</a>
	</div>
	@endforeach
</div>

<hr>




