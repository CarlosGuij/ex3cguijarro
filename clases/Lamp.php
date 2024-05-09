<?php   

class Lamp {
	public string $idLamp;
	public string $nameLamp;
	public string $onLamp; //si esta encendida o no
	public string $modelLamp;
	public string $powerLamp; //potencia en vatios
    public string $zoneLamp;

	public function __construct($idLamp, $nameLamp, $onLamp, $modelLamp, $powerLamp, $zoneLamp){
		$this->idLamp = $idLamp;
		$this->nameLamp = $nameLamp;
		$this->onLamp = $onLamp;
		$this->modelLamp = $modelLamp;
        $this->powerLamp = $powerLamp;
		$this->zoneLamp = $zoneLamp;
    }
	public function setidLamp($idLamp)
	{
		$this->idLamp = $idLamp;
	}
	public function setnameLamp($nameLamp)
	{
		$this->nameLamp = $nameLamp;
	}
	public function setonLamp($onLamp)
	{
		$this->onLamp = $onLamp;
	}
	public function setmodelLamp($modelLamp)
	{
		$this->modelLamp = $modelLamp;
	}
	public function setpowerLamp($powerLamp)
	{
		$this->powerLamp = $powerLamp;
	}
    public function setzoneLamp($zoneLamp)
	{
		$this->zoneLamp = $zoneLamp;
	}

    public function getidLamp(){
        return $this->idLamp;
    }
	public function getnameLamp(){
        return $this->nameLamp;
    }
	public function getonLamp(){
        return $this->onLamp;
    }
	public function getmodelLamp(){
        return $this->modelLamp;
    }
	public function getpowerLamp(){
        return $this->powerLamp;
    }
    public function getzoneLamp(){
        return $this->zoneLamp;
    }
		
}
?>