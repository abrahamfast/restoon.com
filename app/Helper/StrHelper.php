<?php

namespace App\Helper;

class StrHelper
{
	public static function convertFa(string $string): string
	{
		$persinaDigits1 = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
		$persinaDigits2 = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];
		$allPersianDigits = array_merge($persinaDigits1, $persinaDigits2);
		$replaces = [...range(0, 9), ...range(0, 9)];

		return str_replace($replaces, $allPersianDigits , $string);
	}

	public static function convertEn(String $string): String {
		$persinaDigits1 = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
		$persinaDigits2 = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];
		$allPersianDigits = array_merge($persinaDigits1, $persinaDigits2);
		$replaces = [...range(0, 9), ...range(0, 9)];

		return str_replace($allPersianDigits, $replaces , $string);
	}

	public static function uuId()
    {
        return uniqid() . substr(md5(rand()), 0, 4);
    }

}
