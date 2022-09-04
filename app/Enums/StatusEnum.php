<?php

namespace App\Enums;

enum StatusEnum: string
{
   case VALIDATION = 'validation';
   case OPEN = 'open';
   case CLOSE = 'close';
   case BLOCK = 'block';
}
