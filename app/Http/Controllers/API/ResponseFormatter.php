<?php
namespace App\Http\Controllers\API;
class ResponseFormatter{
  
  public static $ress = [
      'meta' => [
        'code' => 200,
        'status'=> 'ok',
        'message' => null
      ],
      'data' => null
  ];

  public static function success($data = null, $message = null){
    self::$ress['meta']['message'] = $message;
    self::$ress['data'] = $data;

    return response()->json(self::$ress, self::$ress['meta']['code']);
  }
  public static function error($data = null, $message = null, $code = 200){
    self::$ress['meta']['status'] = 'error';
    self::$ress['meta']['message'] = $message;
    self::$ress['data'] = $data;

    return response()->json(self::$ress, self::$ress['meta']['code']);
  }

}