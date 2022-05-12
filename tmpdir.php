<?php

echo "PHP Sessions PATH: ".((session_save_path()) ? session_save_path():sys_get_temp_dir() ).PHP_EOL;