<?php

// base62 class
class base62
{
	// Decode base62
	public static function decodebase62($inputstring)
	{
		$output = '';
		$inputlength = strlen($inputstring);
		
		for ($i = 0; $i < $inputlength; $i += 11)
		{
			// Subsection of the input
			$section = substr($inputstring, $i, 11);
			
			// Find 6-bit input length, then find 8-bit output length
			$sectionlength = strlen($section);
			$outputlength = floor(($sectionlength * 6) / 8); 
			
			// Initialize GNU Multiple Precision, then remove any 0's from the beginning of the string.
			$gmpinit = gmp_init(ltrim($section, '0'), 62);
			
			// Convert GMP number to string
			$leadingzeroes = gmp_strval($gmpinit, 16);
			
			// Prep for hex
			$hex = str_pad($leadingzeroes, $outputlength * 2, '0', STR_PAD_LEFT);
			
			// Pack into a hex binary string
			$output .= pack('H*', $hex);
		}
		return $output;
	}

	// Encode base62
	public static function encodebase62($inputstring)
	{
		$output = '';
		$inputlength = strlen($inputstring);
		
		for ($i = 0; $i < $inputlength; $i += 8)
		{
			// Subsection of the input
			$section = substr($inputstring, $i, 8);
			
			// 8-bit input - 6-bit output
			$outputlength = ceil((strlen($section) * 8) / 6);
			
			// Convert to hex
			$hexconvert = bin2hex($section);
			
			// Initialize GNU Multiple Precision, then remove any 0's from the beginning of the string.
			$gmpinit = gmp_init(ltrim($hexconvert, '0'), 16);
			
			// Convert GMP number to string
			$leadingzeroes = gmp_strval($gmpinit, 62);
			
			// Pad string to outputlength
			$padded = str_pad($leadingzeroes, $outputlength, '0', STR_PAD_LEFT);
			
			$output .= $padded;
		}
		return $output;
	}
}
