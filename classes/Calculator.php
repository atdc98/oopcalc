<?php

class Calculator {
	protected $operation, $result;

	public function __construct() {
		$this->operation = null;
		$this->result = 0;
		echo "New calculator instantiated <br />";
	}

	public function getOperation() {
		return $this->operation;
	}

	public function getResult() {
		return $this->result;
	}

	public function setOperation(OperationInterface $operation) {
		$this->operation = $operation;
		echo "<br />Operator changed to ".get_class($this->operation)."<br />";
		return $this;
	}

	public function calc() {
		$args = func_get_args();
		foreach ($args AS $number) {
			if (is_numeric($number)) {
				$this->result = $this->operation->run($number, $this->result);
			}
		}
	}

	public function printResults() {
		print "<br />RESULT: ".$this->getResult()."<br />";
	}
}