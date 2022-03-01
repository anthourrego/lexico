<?php

class StringToken implements Iterator {
  
  protected $_string;
  protected $_delim; 
  protected $_token; 
  protected $_cont = 0;

  public function __construct($string, $delim) {
    $this->_string = $string;
    $this->_delim = $delim;
    $this->_token = strtok($string, $delim);
  }

  public function current() {
    return $this->_token;
  }

  public function key() {
    return $this->_cont;
  }

  public function valid() {
    return $this->_token !== FALSE;
  }

  public function next() {
    $this->_token = strtok($this->_delim);
    if ($this->valid()) {
      ++$this->_cont;
    }
  }

  public function rewind() {
    $this->_cont = 0;
    $this->_token = strtok($this->_string, $this->_delim);
  }

}
