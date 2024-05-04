<?php

class Calcolo {

    private $_op1;
    private $_op2;
    public function __construct($var1, $var2){

        $this->update($var1, $var2);

    }

    public function massimo(){
        if ($this->_op1 > $this->_op2){
            return $this->_op1;
        }
        return $this->_op2;
    }


    public function minimo(){
        if ($this->_op1 < $this->_op2){
            return $this->_op1;
        }
        return $this->_op2;
    }

    public function update($var1, $var2){

        $this->_op1 = $var1;
        $this->_op2 = $var2;

    }
}

