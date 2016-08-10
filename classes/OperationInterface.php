<?php

interface OperationInterface {
	public function run($number, $result);
  private static function showOperation($number, $current_result);
}