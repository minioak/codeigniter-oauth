<?php

class OAuth_Provider_Smugmug extends OAuth_Provider {

	public $name = 'smugmug';

	public function url_request_token()
	{
		return 'https://api.smugmug.com/services/oauth/getRequestToken.mg';
	}

	public function url_authorize()
	{
		return 'https://api.smugmug.com/services/oauth/authorize.mg';
	}

	public function url_access_token()
	{
		return 'https://api.smugmug.com/services/oauth/getAccessToken.mg';
	}
	
	public function get_user_info(OAuth_Consumer $consumer, OAuth_Token $token)
	{
        return array();
	}

} // End Provider_Smugmug
