<?php
	class Validate{
		public static function validate_data($data){
			$param = trim(htmlspecialchars(strip_tags($data)));
			if(!is_numeric($param)){
				return false;
			}else{
				return $param;
			}	
		}
	}
	
	if(isset($_GET['acr_submit']) || isset($_GET['acd_submit']) || isset($_GET['r_submit']) || isset($_GET['d_submit'])){
		$service = new SoapClient("http://goranciganovic.com/webservices/soap/area_circle/service.wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,'trace'=>1));
		//print_r($service->__getFunctions());
		if(isset($_GET['acr_submit'])){
			$areaCircleRadius = $_GET['areaCircleRadius'];
			$areaCircleRadius = Validate::validate_data($areaCircleRadius);
			header('Content-Type: application/xml');
			if($areaCircleRadius){
				$result1 = $service->getAreaCircleRadius($areaCircleRadius);
				$result1 = number_format(round($result1, 2),2);
				echo $output1 = "<root><result>{$result1}</result></root>";
			}else{
				echo $output1 = "<root><result>No Result</result></root>";
			}
		}else if(isset($_GET['acd_submit'])){
			$areaCircleDiameter= $_GET['areaCircleDiameter'];
			$areaCircleDiameter= Validate::validate_data($areaCircleDiameter);
			header('Content-Type: application/xml');
			if($areaCircleDiameter){
				$result2 = $service->getAreaCircleDiameter($areaCircleDiameter);
				$result2 = number_format(round($result2, 2),2);
				echo $output2 = "<root><result>{$result2}</result></root>";
			}else{
				echo $output2 = "<root><result>No Result</result></root>";
			}
		}else if(isset($_GET['r_submit'])){
			$radius= $_GET['radius'];
			$radius= Validate::validate_data($radius);
			header('Content-Type: application/xml');
			if($radius){
				$result3 = $service->getRadiusCircle($radius);
				$result3 = number_format(round($result3, 2),2);
				echo $output3 = "<root><result>{$result3}</result></root>";
			}else{
				echo $output3 = "<root><result>No Result</result></root>";
			}
		}else if(isset($_GET['d_submit'])){
			$diameter= $_GET['diameter'];
			$diameter= Validate::validate_data($diameter);
			header('Content-Type: application/xml');
			if($diameter){
				$result4 = $service->getDiameterCircle($diameter);
				$result4 = number_format(round($result4, 2),2);
				echo $output4 = "<root><result>{$result4}</result></root>";
			}else{
				echo $output4 = "<root><result>No Result</result></root>";
			}
		}else{

		}
	}
?>