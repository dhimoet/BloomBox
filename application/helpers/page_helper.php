<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Page Helper
 *
 * Generates parts of a page.
 */

function generateHeader()
{
	return '<div id="header">
		<div id="header_logo">
			<a href="/"><img src="/public/img/site/logo.png" /></a>
		</div>
	</div>';
}

/* Location: application/helpers/page_helper.php */ 