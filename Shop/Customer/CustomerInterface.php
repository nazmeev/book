<?php

namespace Shop\Customer;
interface CustomerInterface{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

}