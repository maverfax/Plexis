<?php
return array(
	'autoload_failed' => "Autoload failed to load class: %s",
	'benchmark_key_not_found' => "Benchmark key \"%s\" does not exists. You must start timer timer before displaying it.",
    'db_autoload_failed' => "Failed to autoload database extension \"%s\"",
	'db_connect_error' => "Unable to connect to database '%s' from host: %s:%s!",
    'db_sqlite_connect_error' => "Unable to connect to SQLite database '%s'!",
	'db_empty_query' => "Query was empty. Please build a query before calling the 'query' method!",
    'db_improper_key_format' => 'Improper paramater key passed into query. Please make sure you are using a semi-colon ":" in your param keys.',
	'db_key_not_found' => "Database connection info for key \"%s\" not found in the database configuration file.",
	'db_select_error' => "Cant connect to database: %s",
	'fetal_error' => 'Fetal Error! Please contact an administrator.',
	'missing_page_view' => "Unable to locate the view file \"%s\". Please make sure a view page is created and is correctly named.",
	'none' => 'No Message Specifed',
	'non_array' => "Variable \$%s passed in a non-array format in method %s",
	'non_int' => "Variable \$%s passed in a non-integer format in method %s",
	'non_string' => "Variable \$%s passed in a non-string format in method %s",
    'parser_endless_loop' => "Template parser encountered a possible endless loop",
	'template_doesnt_exist' => "Template \"%s\" does not exist in the \"%s\" folder, or is missing the \"layout.php\" file.",
	'template_load_error' => "Unable to load template file \"%s\". This may be due to a non-existant file or template",
	'unknown_template_command' => "Template compile error: Unknown template command \"%s\"",
	'unkown_template_var_in_array' => "Unknown template variable \"%s\" in array \"%s\"",
	'unkown_template_var' => "Unknown template variable \"%s\""
);