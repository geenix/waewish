<?php
class SubscribeController extends Controller {
	public function postSubscribeuser() {
		$validator = Validator::make ( Input::all (), Subscribe::$rules );
		if ($validator->passes ()) {
			$subscribe = new Subscribe ();
			$subscribe->email_address = Input::get ( 'email_address' );
			$subscribe->save ();
			return Response::json ( $subscribe );
		}
		else{
			return 0;
		}
	}
}