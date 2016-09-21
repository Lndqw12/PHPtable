 <?php
	$from  = array ("{TITTLE}", "{BODY}");
	$to = array(
		"Философия",
		"Представляется логичным, что сомнение иллюстрирует онтологический смысл жизни.
	Отношение к современности поразительно."
	);
	echo str_replace($from, $to, "
		<title>{TITTLE}</title>
		<body>{BODY}</body>
	");
	?>