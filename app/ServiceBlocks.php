<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class ServiceBlocks extends Model
{
  public static function showFirstOrder() {
    return DB::table('order_service')->where('type_clean',"first")->get();

  }
  public static function showSecondOrder() {
    return DB::table('order_service')->where('type_clean',"second")->get();

  }
  public static function showThirdOrder() {
    return DB::table('order_service')->where('type_clean',"third")->get();

  }
  public static function generalclean() {
    return static::where(['location_urn' => 'general','show_block' => '1'])->get();
  }
  public static function washing() {
    return static::where(['location_urn' => 'washing','show_block' => '1'])->get();
  }
  public static function dry_cleaners() {
    return static::where(['location_urn' => 'dry_clean','show_block' => '1'])->get();
  }
  public static function more_services() {
    return static::where(['location_urn' => 'more_service','show_block' => '1'])->get();
  }
  //
  public static function generalcleanPrice() {
    return static::where(['location_urn' => 'general','show_price' => '1'])->get();
  }
  public static function washingPrice() {
    return static::where(['location_urn' => 'washing','show_price' => '1'])->get();
  }
  public static function dry_cleanersPrice() {
    return static::where(['location_urn' => 'dry_clean','show_price' => '1'])->get();
  }
  public static function more_servicesPrice() {
    return static::where(['location_urn' => 'more_service','show_price' => '1'])->get();
  }

}
