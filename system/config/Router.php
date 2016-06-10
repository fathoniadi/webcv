<?php
	class Router
	{
		private $to;
		private $nameRoute;

		public function __construct($route, $url)
		{
			$this->nameRoute=$route;
			$this->to=$url;

		}

		public function getRoute()
		{
			return $this->nameRoute;
		}

		public function getTo()
		{
			return $this->to;
		}

	
	}
?>