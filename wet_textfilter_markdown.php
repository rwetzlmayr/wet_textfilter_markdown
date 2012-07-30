<?php
if (txpinterface == 'admin')
{
	require_once txpath.'/lib/vendor/markdown.php';

	class wet_textfilter_markdown extends Textfilter implements ITextfilter
	{
		function __construct()
		{
			parent::__construct();
			$this->key = 47; //TODO: string 'wet_markdown';
			$this->title = gTxt('Markdown');
		}

		public function filter($atts, $thing)
		{
			return Markdown($thing);
		}
	}
	new wet_textfilter_markdown();
}
