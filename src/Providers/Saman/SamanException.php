<?php

namespace Dena\IranPayment\Providers\Saman;

use Exception;

class SamanException extends Exception
{
	public static $errors = [
		-1		=> 'خطا در پردازش اطلاعات ارسالی (مشکل در یکی از ورودی‌ها و ناموفق بودن فراخوانی متد برگشت تراکنش)',
		-3		=> 'ورودی‌ها حاوی کارکترهای غیرمجاز می‌باشند.',
		-4		=> 'کلمه عبور یا کد فروشنده اشتباه است.',
		-6		=> 'سند قبلا برگشت کامل یافته است.',
		-7		=> 'رسید دیجیتالی تهی است.',
		-8		=> 'طول ورودی‌ها بیشتر از حد مجاز است.',
		-9		=> 'وجود کارکترهای غیرمجاز در مبلغ برگشتی',
		-10		=> 'رسید دیجیتالی به صورت Base64 نیست.',
		-11		=> 'طول ورودی‌ها کمتر از حد مجاز است.',
		-12		=> 'مبلغ برگشتی منفی است.',
		-13		=> 'مبلغ برگشتی برای برگشت جزئی بیش از مبلغ برگشت نخورده‌ی رسید دیجیتالی است.',
		-14		=> 'چنین تراکنشی تعریف نشده است.',
		-15		=> 'مبلغ برگشتی به صورت اعشاری داده شده است.',
		-16		=> 'خطای داخلی سیستم',
		-17		=> 'برگشت زدن جزئی تراکنش مجاز نمی‌باشد.',
		-18		=> 'آدرس IP فروشنده نامعتبر است.',

		51		=> 'موجودی حساب خریدار کافی نیست.',

		-100	=> 'تراکنش ناموفق میباشد',
		-101	=> 'تراکنش توسط خریدار کنسل شده است.',
		-102	=> 'مبلغ واریزی اشتباه است. این مبلغ به حساب شما برگشت خواهد خورد.',
	];

	public function __construct($error_id)
	{
		$this->error_id = intval($error_id);

		parent::__construct(@self::$errors[$this->error_id].' #'.$this->error_id, $this->error_id);
	}
}
