<?php

class Lexer {
  
  protected $_lineas;
  protected $_numero;
  protected $_token;
  protected $_tokens = array();

  protected $_afd = array(
    0 => array(3, false, 1, false),
    1 => array(3, 3, 2, false),
    2 => array(3, false, false, false),
    3 => array(3, 3, false, true),
  );
}