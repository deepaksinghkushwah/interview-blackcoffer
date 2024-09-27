<?php

use classes\Coffer;
use classes\DB;

test("db connection testing", function(){
  $link = DB::getInstance();
  expect($link)->toBeInstanceOf(mysqli::class);  
});

test('record fetch testing', function(){
  $data = Coffer::getRecords();
  expect($data)->toBeArray();
});

test('record array length testing', function(){
  $data = Coffer::getRecords();
  expect($data[10])->toHaveLength(22);
});