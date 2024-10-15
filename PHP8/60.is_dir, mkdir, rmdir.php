<?php

  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
    - rmdir() removes a directory, but it must be empty to succeed.
  */

  // var_dump(is_dir("Lessons"));
  echo '<br>';
  // var_dump(is_dir("monta.txt"));
  echo '<br>';
  // mkdir("Test/Upload/Files", 0777, true);
  echo '<br>';
  // rmdir("Test");
  var_dump(file_exists("Test/Upload/Files"));