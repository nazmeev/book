<?php

namespace Library\Student;
interface StudentInterface{
    /**
     * @return string
     */
    public function getFaculty();
    /**
     * @return string
     */
    public function setFaculty($facultyName);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getLevel();

    /**
     * @param string $name
     */
    public function setLevel($levelName);

}