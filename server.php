<?php
    
	class AreaCircle{

		private $pi = 3.14;
		private $radius;
		private $diameter;
		private $areaCircle;

		public function AreaCircleRadius($radius){
			$this->radius = $radius;
			return $radius*$radius*$this->pi;
		}

		public function AreaCircleDiameter($diameter){
			$this->diameter = $diameter;
			$radius = $diameter/2;
			return $radius*$radius*$this->pi;
		}

		public function RadiusCircle($areaCircle){
			$this->areaCircle = $areaCircle;
			return sqrt($areaCircle/$this->pi);
		}

		public function DiameterCircle($areaCircle){
			$this->areaCircle = $areaCircle;
			return (sqrt($areaCircle/$this->pi))*2;
		}
	}

	class Service{

		function getAreaCircleRadius($radius){
			$service = new AreaCircle;
			return $service->AreaCircleRadius($radius);
		}
		
		function getAreaCircleDiameter($diameter){
			$service = new AreaCircle;
			return $service->AreaCircleDiameter($diameter);
		}

		function getRadiusCircle($areaCircle){
			$service = new AreaCircle;
			return $service->RadiusCircle($areaCircle);
		}

		function getDiameterCircle($areaCircle){
			$service = new AreaCircle;
			return $service->DiameterCircle($areaCircle);
		}
	}

	$server = new SoapServer("http://goranciganovic.com/webservices/soap/area_circle/service.wsdl", array('cache_wsdl' => WSDL_CACHE_NONE,'trace'=>1));

	$server->setClass("Service");

	$server->handle();

  
?>