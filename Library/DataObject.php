<?php
namespace Library;

class DataObject{
    protected $data = [];

    /**
     * @param string $index
     * @return mixed|null
     */
    public function getData($index){
        if(isset($this->data[$index])){
            return $this->data[$index];
        }
        return null;
    }
    public function setData($index, $value){
        $this->data[$index] = $value;
    }

    public function __call($name, $arguments)
    {
        echo "__call-start<br>";
        //визивається коли викликається неіснуючий метод
        if(strpos($name, 'get') == 0){
            $index = substr($name, 3);
            $index = strtolower($index);
            if(isset($this->data[$index])){
                echo "__call-stop<br>";
                return $this->data[$index];
            }
            else echo "else_isset__call-stop<br>";
        }
        echo "else_strpos__call-stop<br>";

        //___toArray
        //___toString
        //итератор паттерн итератора (foreach)
        // TODO: Implement __call() method.
    }
}