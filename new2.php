 <?php
	$from  = array ("{TITTLE}", "{BODY}");
	$to = array(
		"Философия",
		"Представляется логичным, что сомнение иллюстрирует онтологический смысл жизни.
	Отношение к современности поразительно."
	);
	echo str_replace($from, $to, "
		<title>{TITTLE}</title>
		<body>{BODY}</body></br>
	");
	
 function transliterate($st) {
	$st = strtr($st,
		"абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
		"abvgdegziyklmnoprstufieABVGDEGZIYKLMNOPRSTUFIE"
	);
	 $st = strtr($st, array(
		'ё'=>"yo", 'х'=>"h", 'ц'=>"ts", 'ч'=>"ch", 'ш'=>"sh",
		'щ'=>"shch", 'ъ'=>"", 'ь'=>"", 'ю'=>"yu", 'я'=>"ya",
		'Ё'=>"Yo", 'Х'=>"H", 'Ц'=>"Ts", 'Ч'=>"Ch", 'Ш'=>"Sh",
		'Щ'=>"Shch", 'Ъ'=>"", 'Ь'=>"", 'Ю'=>"Yu", 'Я'=>"Ya",
	));
		return $st;
	}
	echo transliterate("У попа была собака, он её любил");
	?>