<?php
namespace OpenProvider\WhmcsHelpers;
use WHMCS\Database\Capsule;
/**
 * Helps to encrypt and decrypt WHMCS strings
 * WhmcsHelper
 *
 * @copyright Copyright (c) WeDevelop.coffee 2018
 */
class Crypt
{

	/**
	 * Decrypt $encrypted_string
	 *
	 * @param  string $encrypted_string The encrypted string
	 * @return string $decrypted_string
	 **/
	public static function decrypt($encrypted_string)
	{
		if (function_exists('\decrypt')){
			return \decrypt($encrypted_string);
		} else{
			$command 	= 'DecryptPassword';
			$postData 	= array(
				'password2' => $encrypted_string,
			);

			$admin_user = General::get_admin_user();

			$results = localAPI($command, $postData, $admin_user);

			return $results['password'];
		}
	}

	/**
	 * Encrypt $decrypted_string
	 *
	 * @param  string $decrypted_string The decrypted string
	 * @return string $encrypted_string
	 **/
	public static function encrypt($decrypted_string)
	{
		if (function_exists('\encrypt')){
			return \encrypt($decrypted_string);
		} else{
			$command 	= 'EncryptPassword';
			$postData 	= array(
				'password2' => $decrypted_string,
			);

			$admin_user = General::get_admin_user();

			$results = localAPI($command, $postData, $admin_user);

			return $results['password'];
		}
	}

} // END class Crypt
