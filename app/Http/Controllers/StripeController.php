<?php

namespace App\Http\Controllers;

use Log;
use Mail;
use Stripe\Stripe;
use Stripe\Charge;
use App\Mail\NewOrder;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use App\Mail\CustomerConfirmation;

class StripeController extends Controller
{

	public function processFulfillment(Request $request)
	{

		Stripe::setApiKey(config('services.stripe.secret'));

		$endpoint_secret = config('services.stripe.webhook-secret');

		$payload = @file_get_contents('php://input');
		$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
		$event = null;

		try {

			$event = \Stripe\Webhook::constructEvent(
				$payload, $sig_header, $endpoint_secret
			);

		} catch(\UnexpectedValueException $e) {

			Log::error($e);

			abort(400);

		} catch(\Stripe\Error\SignatureVerification $e) {

			Log::error($e);

			abort(400);

		}

		// Handle the checkout.session.completed event
		if ($event->type == 'checkout.session.completed') {

			$session = $event->data->object;

		    Log::debug($session);

		    Mail::to(config('mail.recipient'))->send(new NewOrder($session));

		}

		return response()->json(['message' => 'processed']);

	}
}
