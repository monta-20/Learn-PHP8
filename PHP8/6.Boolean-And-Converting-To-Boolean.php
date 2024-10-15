<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */

  var_dump((bool) "");
  echo '<br>';
  var_dump((bool) array());
  echo '<br>';
  var_dump((bool) []);
  echo '<br>';
  var_dump((bool) 0);
  echo '<br>';
  var_dump((bool) "0");
  echo '<br>';
  var_dump((bool) "Monta");
  echo '<br>';
  var_dump((bool) array(1));
  echo '<br>';
  var_dump((bool) [1]);
  echo '<br>';
  var_dump((bool) 100);
  echo '<br>';
  var_dump((bool) -100);
  echo '<br>';
  var_dump((bool) 10.5);
  echo '<br>';
  var_dump((bool) -10.5);

  /*

  bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
*/
?>