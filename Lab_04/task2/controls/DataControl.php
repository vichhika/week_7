<?php

class DataControl{

    private $data;

    public function __construct (){
        $this->data = json_decode(file_get_contents("./data/sales.json"),true);
    }

    protected function fetchData(string $service){
        $data = $this->data[$service];
        $length = count($data);
        for($i = 0;$i < $length;$i++){
            $data[$i]['method'] = $service;
        }
        return $data;
    }
}

?>