<?php
	
	/*
		05.02.2014 @ 03:51
		@mucahittutuncu
	*/

	class mpasw
	{
		#The value to be encrypted.
			public static $value;

		#Encrypted value.
			public static $encryptedValue;

		#encrypting function.
			public static function encrypting($var)
			{

				if(!empty($var))
				{

					self::$value 			= $var;
					$oneStep				= md5(self::$value);
					$twoStep				= sha1($oneStep);
					$threeStep				= substr($twoStep, 0,32);
					self::$encryptedValue	= $threeStep;
					return self::$encryptedValue;
					
				}

			}

	}
?>
