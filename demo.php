<?php
echo "hi";
//return common parameters
function getCommonParams()
{

	return $data=array('first_name' => 'Arun',
	'last_name' => 'karthick',
	'email' => 'arunkarthick_a@novalnetsolutions.com',
	'street' =>'test_street',
	'city' => 'city',
	'country_code' => 'DE',
	'zip' => '87372',
	'remote_ip'=> '127.0.0.1',
	'tel'=>'+41 867867655',
	'mobile'=>'86756886587',
	'order_no'=>'100098',
	'amount'=>100,
	'currency'=>'EUR',
	'status'=>'100',
	'status_text' => 'successfully',
	'status_desc' => 'successfully',
	'status_message' => 'successfully',
	'vendor' => '4',
	'auth_code' => '',
	'product' => '14',
	'tariff' => '30');

}

function postRequest($url,$urlparam,$buildQuery=true)
{
	return true;
	
}
