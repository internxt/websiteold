<div class="__section section1">
  <section class="__content-home">
  

              
              
                  <div class="__slide-content-title">Internxt Send</div>

                  <div class="__slide-content-body">
                      <div class="__slide-content-text">Securely share files for free, instantly. No sign up required. End-to-end encrypted, open source, trustless. Say hello to the new file sharing standard.</div>
                  </div>

                  <div class="__slide-content-footer">
        <button type="button" class="w-full btnStartForFreeSend btn rounded-pill btn-outline-light __btn-content-primary" style="">Start sharing for free</button>
        <button type="button" class="invisible btn rounded-pill btn-outline-light" style="">Start for free</button>
                  </div>

          
  
  
</section>

@push('js')

	<script>

		$(document).ready(function(){
			$('.btnStartForFreeSend').click(function(e) {
				window.location.href = 'https://send.internxt.com';
			});
		});
	</script>

@endpush
