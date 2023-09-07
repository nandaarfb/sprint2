<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    protected $endpoint;
	protected $key;
	private $error;

    public function __construct(){
		$this->endpoint = env('RAJAONGKIR_ENDPOINT');
		$this->key = env('RAJAONGKIR_APIKEY');
	}	

	public function _request($path, $options = null)
	{
		// $url = env('RAJAONGKIR_ENDPOINT') . "/" . $path;
		$url = "";
		if ($request === null) {
			$url = env('RAJAONGKIR_ENDPOINT') . "/" . $path;
		} else {
			$queryParams = "";
			foreach (json_decode($request) as $key => $value) {
				$obj[$key] = $value;
				$queryParams = $queryParams.$key."=".$value."&";
			}
			$url = env('RAJAONGKIR_ENDPOINT') . "/" . $path . "?" . rtrim($queryParams, "&");
		}
		
		// Http::withHeaders([
		// 	'key' => env('RAJAONGKIR_APIKEY')
		// ])->get($url);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: " . env('RAJAONGKIR_APIKEY')
			),
		));
		$response = json_decode(curl_exec($curl));
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
			throw new Exception($err, 1);
		}

		if (! isset($response->rajaongkir)) {
			$this->error = 'Response not valid';
			return false;
		}

		$rajaongkir = $response->rajaongkir;

		if ( $rajaongkir->status->code == 400 ) {
			$this->error = $rajaongkir->status->description;
		}

		if ( $rajaongkir->status->code == 200 ) {
			return $rajaongkir->results;
		}
	}
}
