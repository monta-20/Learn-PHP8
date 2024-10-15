<?php

  /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

  echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
  echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";
  var_dump(file_exists("monta.txt"));
  echo '<br>';
  echo filesize("monta.txt");
/*
450
295
bool(false)
*/
?>  