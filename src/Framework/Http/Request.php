<?php

namespace Franework\Http\Request;

class Request
{
     public function getQueryParams(): array
     {
         return $_GET;
     }

     public function getParsedBody()
     {
         return $_POST ?: null;
     }
}