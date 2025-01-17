--TEST--
Basic test
--SKIPIF--
<?php
if (!extension_loaded('swephp')) {
    echo 'skip';
}
?>
--FILE--
<?php
include 'utility/Format.php';

# Run multiple to test for constants implementation.
var_dump(Format::round(swe_split_deg(123.123, 0)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_ROUND_SEC)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_ROUND_MIN)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_ROUND_DEG)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_ZODIACAL)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_NAKSHATRA)));
var_dump(Format::round(swe_split_deg(123.123, SE_SPLIT_DEG_KEEP_SIGN)));
?>
--EXPECT--
array(5) {
  ["deg"]=>
  int(123)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(22)
  ["secfr"]=>
  float(0.8)
  ["sgn"]=>
  int(1)
}
array(5) {
  ["deg"]=>
  int(123)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(23)
  ["secfr"]=>
  float(0)
  ["sgn"]=>
  int(1)
}
array(5) {
  ["deg"]=>
  int(123)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(52)
  ["secfr"]=>
  float(0)
  ["sgn"]=>
  int(1)
}
array(5) {
  ["deg"]=>
  int(123)
  ["min"]=>
  int(37)
  ["sec"]=>
  int(22)
  ["secfr"]=>
  float(0)
  ["sgn"]=>
  int(1)
}
array(5) {
  ["deg"]=>
  int(3)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(22)
  ["secfr"]=>
  float(0.8)
  ["sgn"]=>
  int(4)
}
array(5) {
  ["deg"]=>
  int(3)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(22)
  ["secfr"]=>
  float(0.8)
  ["sgn"]=>
  int(9)
}
array(5) {
  ["deg"]=>
  int(123)
  ["min"]=>
  int(7)
  ["sec"]=>
  int(22)
  ["secfr"]=>
  float(0.8)
  ["sgn"]=>
  int(1)
}
