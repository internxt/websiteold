<?php

namespace App\Services;

class FormattingService
{
	public function useShorthand($n, $precision = 1) {

		$suffix = '';

		if ($n < 900) {
			// 0 - 900
			$formattedNumber = number_format($n, $precision);
		} else if ($n < 900000) {
			// 0.9k-850k
			$formattedNumber = number_format($n / 1000, $precision);
			$suffix = 'K';
		} else if ($n < 900000000) {
			// 0.9m-850m
			$formattedNumber = number_format($n / 1000000, $precision);
			$suffix = 'M';
		} else {
			// 0.9b-850b
			$formattedNumber = number_format($n / 1000000000, $precision);
			$suffix = 'B';
		}

		// Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
		// Intentionally does not affect partials, eg "1.50" -> "1.50"
		if ( $precision > 0 ) {
			$dotzero = '.' . str_repeat( '0', $precision );
			$formattedNumber = str_replace( $dotzero, '', $formattedNumber );
		}

		return $formattedNumber . $suffix;

	}
}
