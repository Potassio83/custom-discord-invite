<?php

$json_options = [
  "http" => [
    "method" => "GET",
    "header" => "Authorization: Bot {botToken}
    "
  ]
];

$json_context = stream_context_create($json_options);

$json_get     = file_get_contents('https://discordapp.com/api/guilds/{guildId}/members?limit=1000', false, $json_context);

$json_decode  = json_decode($json_get, true);



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:description" content="<?php echo count($json_decode)?> Members">
</head>	
<body>
</body>
<script>
setTimeout(function () {
   window.location.href= '{invite}'

},100);
</script>

</html>

