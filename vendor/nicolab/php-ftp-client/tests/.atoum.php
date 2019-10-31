<?php
use \mageekguy\atoum;

$report = $script->addDefaultReport();

// This will add a green or red logo after each run depending on its status.
$report->addField(new atoum\report\fields\runner\result\logo());

$script->bootstrapFile(__DIR__. '/bootstrap.php');
$runner->addTestsFromDirectory(__DIR__. '/units');
