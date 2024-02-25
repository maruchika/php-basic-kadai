<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $nums = [15, 4, 18, 23, 10];

		function sort_2way($order, $nums) {
			if ($order === TRUE) {
				echo "昇順にソートします。<br>";
				sort ($nums);
			}else {
				echo "降順にソートします。<br>";
				rsort ($nums);
			}
			foreach ($nums as $num) {
				echo $num . "<br>";
			}
		}

		$order = TRUE;
		sort_2way($order, $nums);

		$order = FALSE;
		sort_2way($order, $nums);

    ?>
  </p>
</body>

</html>