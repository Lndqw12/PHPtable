 <?php
	$from  = array ("{TITTLE}", "{BODY}");
	$to = array(
		"���������",
		"�������������� ��������, ��� �������� ������������ �������������� ����� �����.
	��������� � ������������� ������������."
	);
	echo str_replace($from, $to, "
		<title>{TITTLE}</title>
		<body>{BODY}</body></br>
	");
	
 function transliterate($st) {
	$st = strtr($st,
		"����������������������������������������������",
		"abvgdegziyklmnoprstufieABVGDEGZIYKLMNOPRSTUFIE"
	);
	 $st = strtr($st, array(
		'�'=>"yo", '�'=>"h", '�'=>"ts", '�'=>"ch", '�'=>"sh",
		'�'=>"shch", '�'=>"", '�'=>"", '�'=>"yu", '�'=>"ya",
		'�'=>"Yo", '�'=>"H", '�'=>"Ts", '�'=>"Ch", '�'=>"Sh",
		'�'=>"Shch", '�'=>"", '�'=>"", '�'=>"Yu", '�'=>"Ya",
	));
		return $st;
	}
	echo transliterate("� ���� ���� ������, �� � �����");
	?>