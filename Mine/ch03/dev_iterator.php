<?php  
$iterator = new ArrayIterator($array);

function htmlList($iterator)
{
	$output = '<ul>';
	while ($value = $iterator->current()) {
		$output.= '<li>' . $value . '</li>';
		$iterator->next();
	}
	$output.= '</ul>';
	return $output;
}

function fetchCountryName($sql, $connection)
{
	$iterator = new ArrayIterator();
	$stmt = $connection->pdo->query($sql);
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$iterator->append($row['name']);
	}

	return $iterator;
}

function nameFilterIterator($innerIterator, $name)
{
	if(!$name) return $innerIterator;
	$name = trim($name);
	$iterator = new CallbackFilterIterator($innerIterator, function($current, $key, $iterator) use ($name){
		$pattern = '/'. $name . '/i';
		return (bool) preg_match($pattern, $current);
	});
	return $iterator;
}

$pagination = new LimitIterator(fetchCountryName($sql, $connection), $offset, $limit);

$i = new ArrayIterator($a);

$f = new class($i) extends FilterIterator {
	public function accept()
	{
		$current = $this->current();
		return !(ord($current) & 1);
	}
};

$i = new LimitIterator($f, 2, 6);
