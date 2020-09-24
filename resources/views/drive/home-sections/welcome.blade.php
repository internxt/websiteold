<div class="__section section0">
					
  <section id="driveSlideMobile" class="__content-home">
      
    <div class="__mobile-home-content">

      <!-- <div class="section__icon-container">
        <img class="relative section__icon" src="{{ asset('img/logos/drive-logo.svg') }}" alt="Introducing X Cloud">
      </div> -->

      <p class="relative section__heading">Internxt Drive</p>
      <p class="section__highlight">Secure file storage</p>

      <div class="section__link-container md:hidden flex flex-col items-center" style="z-index: 0; padding-top: 20px;">

        <a class="section__link section__link--ios" href="https://apps.apple.com/us/app/x-cloud-secure-file-storage/id1465869889" rel="nofollow" target="_blank">
          <img loading="lazy" src="{{ asset('/img/logos/apple-app-store.png') }}" height="51" alt="Download X Cloud on the Apple App Store">
        </a>

        <a class="section__link section__link--android" href="https://play.google.com/store/apps/details?id=com.internxt.cloud" rel="nofollow" target="_blank">
          <img loading="lazy" alt="Get it on Google Play" src="{{ asset('/img/logos/google-play-store.png') }}" height="51">
        </a>
      </div>

      <div class="section__link-container hidden md:block">
        <a class="section__link" href="https://drive.internxt.com/new">Get Started for Free with 2 GB</a>
      </div>

    </div>
  
  </section>



  <section id="driveSlidePC" class="__content-home">
    <!-- <section class="__slide-content-container-container"> -->

      
        <div class="__slide-content-title">Internxt Drive</div>

        <div class="__slide-content-body">
          <div class="__slide-content-text">Switch to the only cloud storage service that truly respects your privacy. End-to-end encrypted, free, open source, trustless. Say hello to the new security and privacy standard. Start with 2 GB free for life.</div>
        </div>

        <div class="__slide-content-footer">
          <button type="button" class="w-full btnLearnMore btn rounded-pill btn-outline-light __btn-content" style="">Learn More</button>
          <button type="button" class="w-full btnStartForFree btn rounded-pill btn-outline-light __btn-content-primary" style="">Start for free</button>
        </div>

      <!-- </section> -->
  
  </section>
      
    </div>

    @push('js')

	<script>

		$(document).ready(function(){
			$('.btnLearnMore').click(function(e) {
				window.location.href = '/drive';
			});

			$('.btnStartForFree').click(function(e) {
				window.location.href = 'https://drive.internxt.com/new';
			});
		});
	</script>

@endpush
