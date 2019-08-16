{{-- link href for googlefonts --}}

@foreach ($googlefont as $font => $fontdetail) 

	<?php $font .= ':'; ?>
	
	@foreach ($fontdetail['weight'] as $fontweight)

		<?php $font .= $fontweight; ?>

		@if(!$loop->last)

			<?php $font .= ','; ?>

		@endif

	@endforeach

	<link href="http://fonts.googleapis.com/cs?family={{ $font }}" rel="styleheet">

@endforeach

{{-- css classes for googlefonts --}}
<style>
@foreach($googlefont as $font => $fontdetail)
	@foreach($fontdetail['weight'] as $fontweight)
		<?php $fontstr = '.font-' . $font . '-' . $fontweight . '{ font-family:'; ?>
		@foreach($fontdetail['family'] as $fontfamily)
			<?php $fontstr .= $fontfamily; ?>
			@if(!$loop->last)
				<?php $fontstr .= ','; ?>
			@endif
		@endforeach
		<?php $fontstr .= '; font-weight: ' .  $fontweight . '; }'; ?>
		{!! $fontstr !!}
		<?php $fontstr = ''; ?>
	@endforeach
@endforeach
</style>


