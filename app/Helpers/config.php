<?php

use App\Models\Config;

function pengaturan()
{
  return $data = Config::first();
}
