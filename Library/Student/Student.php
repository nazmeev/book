<?php
namespace Library\Student;

class Library extends \Library\DataObject implements StudentInterface {

    /**
     * @param string $name
     */
    public function setName($name){
        $this->data['studentName'] = $name;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->getData('studentName');
    }

    /**
     * @param string $name
     */
    public function setFaculty($name){
        $this->data['facultyName'] = $name;
    }

    /**
     * @return string
     */
    public function getFaculty(){
        return $this->getData('facultyName');
    }

    /**
     * @param string $name
     */
    public function setLevel($name){
        $this->data['levelName'] = $name;
    }

    /**
     * @return string
     */
    public function getLevel(){
        return $this->getData('levelName');
    }
}