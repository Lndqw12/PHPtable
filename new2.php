 <?php
	$from  = array ("{TITTLE}", "{BODY}");
	$to = array(
		"���������",
		"�������������� ��������, ��� �������� ������������ �������������� ����� �����.
	��������� � ������������� ������������."
	);
	echo str_replace($from, $to, "
		<title>{TITTLE}</title>
		<body>{BODY}</body>
	");
	?>