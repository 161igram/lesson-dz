<?php
function task1(array $strings, bool $return =true)
{
	$result = implode("\n", array_map(function (string $str) {
		return "<p>$str</p>";
	}, $strings));

	if ($return) {
		return $result;
	}
	echo $result;
}

function task2(string $action, ...$argum)
{
	switch ($action) {
		case '+':
			return array_sum($argum);
		case '-':
			return array_shift($argum) - array_sum($argum);
		case '*':
		$result = 1;
		foreach ($argum as $value) {
			$result *= $value;	
		}
		return $result;
		case '/':
			$result = array_shift($argum);
			foreach ($argum as $value) {
				$result = $result / $value;
			}
			return $result;
		default:
			return 'ERROR';
	};
	
}

function task3(int $a, int $b) 
{
	$results = '<table>';
	for ($x=1; $x < $a; $x++) { 
		$results .='<tr>';
		for ($y=1; $y < $b; $y++) { 
			$results .='<td>';
				$results .= $x*$y;
			$results .='</td>';
		}
		$results .='</tr>';
	}
	echo $results;
}

function task4($filename) 
{
	$fo = fopen($filename, 'r');
	if (!$fo) {
		return false;
	}

	$str = '';
	while (!feof($fo)) {
		$str .= fgets($fo, 1024);
	}
	return $str;
}