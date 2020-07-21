<div class="inxt-buy-form">
    @php
        $urlBTC = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?CMC_PRO_API_KEY=ad054d41-e820-4ebb-805b-dabf899a49ff&symbol=INXT&convert=BTC";
        $urlETH = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?CMC_PRO_API_KEY=ad054d41-e820-4ebb-805b-dabf899a49ff&symbol=INXT&convert=ETH";
        $urlLTC = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?CMC_PRO_API_KEY=ad054d41-e820-4ebb-805b-dabf899a49ff&symbol=INXT&convert=LTC";
        $context = stream_context_create( array() );

        $resultBTC = file_get_contents( $urlBTC, false, $context );
        $resultETH = file_get_contents( $urlETH, false, $context );
        $resultLTC = file_get_contents( $urlLTC, false, $context );

        function checkRecaptcha($token) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('secret' => env('RECAPTCHA_V3_SK'), 'response' => $token)));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);

            $arrResponse = json_decode($response, true);
            
            if ($arrResponse["success"] == '1' ?? null && $arrResponse["action"] == $action ?? null) {
                return $arrResponse["score"] ?? false;
            } else {
                return false;
            }
        }

        function sendMail($deposit, $currency, $receive, $currencyReceive, $receivingAddr, $inxtAddr, $score) {
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("inxt@internxt.com");
            $email->setSubject("New Crypto INXT Request");
            $email->addTo(env('EMAIL_ADDRESS'));
            $email->addContent(
                "text/html", "
                    <ul>
                        <li>Deposit: $deposit</li>
                        <li>Currency: $currency</li>
                        <li>Receive: $receive</li>
                        <li>Currency Receive: $currencyReceive</li>
                        <li>Receiving Address: $receivingAddr</li>
                        <li>Internxt Address: $inxtAddr</li>
                        <li>Human score: $score</li>
                    </ul>"
            );
            $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));

            try {
                $response = $sendgrid->send($email);
                $_SESSION['email_sended'] = 'sended';
            } catch (Exception $e) {
                // echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }

        if(isset($_GET['submit'])) {
            $score = checkRecaptcha($_GET['recaptcha_token'] ?? null);
            if (
                isset($_GET['deposit'])
                && isset($_GET['currency']) && $_GET['deposit'] != ''
                && isset($_GET['receive']) && $_GET['receive'] != ''
                && isset($_GET['receiveAddr']) && preg_match("/^0x[0-9a-fA-F]{40}$/", $_GET['receiveAddr'])
                && isset($_GET['addr']) && $_GET['addr'] != ''
                && $score > 0.5
            ) {
                sendMail($_GET['deposit'], $_GET['currency'], $_GET['receive'], 'INXT.', $_GET['receiveAddr'], $_GET['addr'], $score);

                header("Location: https://internxt.com/inxt/buy?submit=#successForm");
                die();
            }
        }
    @endphp

    <input id="coinMarketValuesBTC" type="hidden" value="{{ $resultBTC }}">
    <input id="coinMarketValuesETH" type="hidden" value="{{ $resultETH }}">
    <input id="coinMarketValuesLTC" type="hidden" value="{{ $resultLTC }}">

    @if(isset($_GET['submit']))
        <div id="successForm" class="__inxt-buy-form-section" style="">
            <p class="section__explanation"><b>Thank you!</b> <br/>As soon as we receive your deposit, we will purchase INXT from exchanges with those funds and sud them to you.</p>
        </div>
    @else
        <form id="inxtBuyForm" class="__inxt-buy-form-section" method="GET">
            <input id="recaptcha" name="recaptcha_token" type="hidden" />
            <div class="__section-buy">
                <div style="width: 45%">
                    <label for="deposit" style="display: flex;">Deposit</label>
                    <input type="number" step="any" class="form-control" id="deposit" name="deposit" placeholder="0" required />
                </div>
                
                <div style="width: 45%">
                        <label for="currency" style="display: flex;">Currency</label>
                        <select class="form-control" name="currency" id="currency">
                            <option value="BTC" selected>Bitcoin</option>
                            <option value="ETH">Ethereum</option>
                            <option value="LTC">Litecoin</option>
                        </select>
                    </div>
                
            </div>
            
            <input type="text" class="invisible">
            
            <div class="__section-buy">
                <div style="width: 45%">
                    <label for="receive" style="display: flex;">Receive</label>
                    <input type="text" class="form-control" id="receive" name="receive" placeholder="0" readonly />
                </div>
                
                <div style="width: 45%">
                    <label for="ownCurrency" style="display: flex;">Currency</label>
                    <input type="text" class="form-control" id="ownCurrency" placeholder="Currency" value="Internxt" readonly />
                </div>
                
            </div>
            
            <input type="text" class="invisible">
            
            <div class="__section-buy">
                <div style="width: 100%">
                <label for="receivedAddr" style="display: flex;">Please enter your INXT receiving address</label>
                    <input id="receivedAddr" name="receiveAddr" type="text" class="form-control" placeholder="INXT Receiving address" pattern="^0x[0-9a-zA-Z]{40}$" oninvalid="this.setCustomValidity('Invalid INXT address. Please insert a valid address')" required/>
                </div>
                
            </div>

            <input type="text" class="invisible">
            
            <div class="__section-buy">
                <div style="width: 100%">
                    <label for="addr" style="display: flex;">Please send the funds to the following address</label>
                    <input type="text" id="addr" name="addr" class="form-control" placeholder="The address you will send the funds to" readonly />
                </div>
            </div>

            <input type="text" class="invisible">

            <div class="__section-buy" style="margin: auto; width: 20%">
                <button id="inxt-buy-submit" type="submit" name="submit" class="w-full btn rounded-pill btn-outline-light __btn-content-primary">Done</button>
            </div>

            

        </form>
    @endif

    
</div>

@push('js')
<script>
    var jsonBTC = JSON.parse($('#coinMarketValuesBTC').val());
    var jsonETH = JSON.parse($('#coinMarketValuesETH').val());
    var jsonLTC = JSON.parse($('#coinMarketValuesLTC').val());
    
    var addrBTC = '39UtLoELAoDSHQ5YaJvwwSu6ntTUAH2k6C';
    var addrETH = '0xd9bfdebdb7fb91f063faad165d1c503f646a7e41';
    var addrLTC = 'MVDqPF5G9fTujvzTSjzuhLKXTJyLxnGT4D';

    // By default
    var currency = jsonBTC;
    var cryptoPrice = currency.data.INXT.quote.BTC.price;
    $('#addr').val(addrBTC);

    $('#currency').change(function(e) {
        switch(e.target.value) {
            case 'BTC':
                currency = jsonBTC;
                cryptoPrice = currency.data.INXT.quote.BTC.price;
                $('#addr').val(addrBTC);
            break;
            case 'ETH':
                currency = jsonETH;
                cryptoPrice = currency.data.INXT.quote.ETH.price;
                $('#addr').val(addrETH);
            break;
            case 'LTC':
                currency = jsonLTC;
                cryptoPrice = currency.data.INXT.quote.LTC.price;
                $('#addr').val(addrLTC);
            break;
        }

        var receiveINXT = parseFloat($('#deposit').val()) / cryptoPrice;
        if (!isNaN(receiveINXT)) {
            $('#receive').val(receiveINXT);
        }
    });

    $('#deposit').keyup(function(e) {
        var receiveINXT = parseFloat($('#deposit').val()) / cryptoPrice;
        if (!isNaN(receiveINXT)) {
            $('#receive').val(receiveINXT);
        }
    });

    $('#inxtBuyForm').submit(function (e) {
      e.preventDefault();
      grecaptcha.ready(function() {
          grecaptcha.execute('{{ env('RECAPTCHA_V3_PK') }}', { action: 'buy_inxt' }).then(function(token) {
            $('input#recaptcha').val(token)
            $('#inxtBuyForm').unbind('submit')
            $('#inxt-buy-submit').click()
          })
      })
    })
</script>
@endpush