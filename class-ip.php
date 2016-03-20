<?PHP
class IP {
public $curl;
public $result;
function __construct($ip='') {	
$this -> curl = curl_init("http://freegeoip.net/json/".$ip);
echo $this -> curl;
curl_setopt ($this -> curl,  CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($this -> curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($this -> curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($this -> curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$this -> result = curl_exec($this -> curl);
if($this -> result === FALSE) {
return curl_error($this -> curl);
}
else {
return $this -> result;
}
}
		}
?>
