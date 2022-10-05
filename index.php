<?php

require_once("../Swagger-PHP/vendor/autoload.php");

$openAPI = \OpenApi\Generator::scan(['/path/to/project']);

header('Content-Type: application/x-yaml');
echo $openapi->toYaml();
