<?php

namespace Akuikialie\Http;

/**
 * Class StatusCode
 * @package Akuikialie\Http
 */
class StatusCode
{
   const SUCCESS = '200'; // Success Get, Available Data
   const SUCCESS_CREATED_DATA = '201'; // Success Create
   const SUCCESS_UPDATED_DATA = '202'; // Success Update
   const SUCCESS_EMPTY_DATA = '204'; // Success Get, No Data

   const FAILED_REQUEST = '400'; // Failed Request, Parameter / Model / etc
   const FAILED_AUTHORIZATION = '401'; // Failed Authorization, No Key / No Bearer
   const FAILED_METHOD = '405'; // Failed Method, Wrong Action
}
