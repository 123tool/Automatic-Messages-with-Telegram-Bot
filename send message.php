$bot=new Bot();
echo json_encode($bot->send(
	array(
		'chat_id'=>"43453333503",
		'text'=>"Test"
	))
	,JSON_PRETTY_PRINT);
