<?php

class Divide implements OperationInterface {
	public function run($number, $result) {
		self::showOperation($number, $result);
		return $result/$number;
	}

	private static function showOperation($number, $current_result) {
		$result = $current_result / $number;
		echo "{$current_result} / {$number} = ".$result."<br />";
	}
}

?>