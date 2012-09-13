<?php
$plugin['version'] = '0.1';
$plugin['author'] = 'Robert Wetzlmayr';
$plugin['author_uri'] = 'http://wetzlmayr.com/';
$plugin['description'] = 'Textfilter preprocessor/postprocessor';
$plugin['type'] = 4;

if (!defined('txpinterface'))
	@include_once('zem_tpl.php');

if (0) {
?>
# --- BEGIN PLUGIN HELP ---

h2.  Textfilter preprocessor/postprocessor for Textpattern 4.6+

Textfilter preprocessors and postprocessors modify the filtered text independently from the selected markup method.

# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---
if (txpinterface == 'admin')
{
	function wet_sample_textfilter_preprocessor($event, $step, &$thing, &$context)
	{
		// Do something...
	}

	function wet_sample_textfilter_postprocessor($event, $step, &$thing, &$context)
	{
		// Add a license  notice to the body
		if ($context['field'] === 'Body') {
			$thing .= graf('Licensed under the terms of CC-BY-SA. Copyright &copy; ' .date('Y'). '.');
		}
	}

	// Register with the core
	register_callback('wet_sample_textfilter_preprocessor', 'textfilter', 'filter', 0);
	register_callback('wet_sample_textfilter_postprocessor', 'textfilter', 'filter', 1);
}

# --- END PLUGIN CODE ---