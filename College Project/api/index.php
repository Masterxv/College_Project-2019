<?php

<?php

$apikey = "7ien9iQ3SF0ldgp4vUUnnplJyJqJZMAxq0k";

$userproduct = $_POST['userdata'];

$userbrand = "Apple";

$producturl = "https://price-api.datayuge.com/api/v1/compare/search?api_key=$apikey&product=$userproduct";

$jsondata = file_get_contents($producturl);

 ?>



