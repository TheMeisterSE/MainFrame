<?php
class Stream extends TMSE {

	public function getStreamData($host, $x) {
		$getStreamData = file_get_contents($host);
		$StreamData = explode("<td class=\"streamdata\">", $getStreamData);
		return $StreamData[$x];
	}
	
	public function StreamData($host, $data) {
		if ($this->getStreamData($host, 1) == NULL) {
			return "Radio is currently off air";
			exit;
		}
		
		switch ($data) {
			case "title":
				return strip_tags(substr($this->getStreamData($host, 1), 0, -46));
			break;
			
			case "desc":
				return $this->getStreamData($host, 2);
			break;
			
			case "started":
				return $this->getStreamData($host, 3);
			break;
			
			case "bitrate":
				return $this->getStreamData($host, 4);
			break;
			
			case "listeners":
				return $this->getStreamData($host, 5);
			break;
			
			case "peak":
				return $this->getStreamData($host, 6);
			break;
			
			case "song":
				$song = explode("</td>", $this->getStreamData($host, 9));
				return $song[0];
			break;
			
			default:
				return "Dead";
		}
	}
}
?>