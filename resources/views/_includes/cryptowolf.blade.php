<div id='cryptowolf'/>
	{!! file_get_contents('https://external.cryptowolf.eu/v3/ext.html') !!}
</div>

@push('js')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		var external = 'inxt';
		var cryptowolf = 'https://external.cryptowolf.eu/v3/';

		$( document ).ready(function() {
			$('#hiddendivbeforeselect').prepend($('.two')[0]);
			$('.two').addClass('cryptowolf-element');

			$('.cryptowolf-next').text('Continue');

			var disclaimer = $('.cryptowolf-disclaimer div').first();
			var html = disclaimer.html().replace('Start Transaction', 'Continue');

			disclaimer.html(html);

			$.ajax ({
				type: "POST",
				url: "https://external.cryptowolf.eu/v3/css/inxt.css",
				success: function(result) {
					$("#cryptowolf").after('<style>' + result + '</style>')
					$("#cryptowolf").after(`<style>
						.cryptowolf-label-text {
							font-family: "Cerebri Sans" !important;
							font-size: 17px !important;
							font-weight: 500 !important;
							font-style: normal !important;
							font-stretch: normal !important;
							line-height: normal !important;
							letter-spacing: -0.07px !important;
							color: #4c4c4c !important;
							display: block !important;
						}
						.cryptowolf-label {
							text-align: left !important;
						}
						.cryptowolf-label-2_6, .cryptowolf-label-2_17{
							visibility: hidden !important;
						}
						.div_bf_input {
							border: none !important;
							/*width: 308px !important;*/
						}
						.cryptowolf-element {
							width: 308px !important;
						}
						.select_mate > input, .selecionado_opcion, .cryptowolf-field {
							border-radius: 30.5px !important;
							border: solid 1px rgba(151, 151, 151, 0.3) !important;
							height: 59px !important;
							/*width: 308px !important;*/
						}
						.cryptowolf-min-max {
							color: #4c4c4c !important;
							font-family: "Cerebri Sans" !important;
							font-size: 17px !important;
							font-weight: 500 !important;
							letter-spacing: -0.07px !important;
							line-height: normal !important;
							margin-top: -20px !important;
							right: 7px !important;
							top: -10px !important;
						}
						.cryptowolf-min {
							right: 218px !important;
							width: auto !important;
						}
						@media only screen and (max-width: 400px){
            		   .cryptowolf-min {
              		    right: 77px !important;
                 	 	width: auto !important;
              }
            }
						#span1 > img { right: 43.5% !important; }
						@media only screen and (max-width: 400px){
  					  #span1 > img { right: 36.5% !important; }
 					   }
						.cont_select_int { border-radius: 10px !important; }
						.cont_list_select_mate li { text-align: left; }
						.cont_list_select_mate img { display: inline-block; }
						.cont_list_select_mate {
							width: 494px !important;
							position: relative !important;
							right: 22px !important;
						}
						@media only screen and (max-width: 400px){
           			   .cont_list_select_mate {
              			width: 274px !important;
              			position: relative !important;
              			right: 22px !important;
              }
            }
						.cryptowolf-button-width-medium {
							width: 100% !important;
						}
						.cryptowolf-disclaimer {
							font-size: 13px !important;
							font-weight: normal !important;
							letter-spacing: -0.05px !important;
							color: #ababae !important;
						}
						@media only screen and (max-width: 400px){
             			.cryptowolf-disclaimer {
                		font-size: 13px !important;
                		font-weight: normal !important;
                		letter-spacing: -0.05px !important;
                		color: #ababae !important;
                		padding-right: 38px !important;
              }
            }
					</style>`)
				}
			});
			$.getScript(cryptowolf + 'js/cryptowolf.js');
		});
	</script>
@endpush

@push('css')
	<style type="text/css">

	.cryptowolf-inner {
		border: none !important;
	}

	</style>
@endpush
