<?php
if(file_exists(ELEMENTS.basename(__FILE__)))
{
	include_once ELEMENTS.basename(__FILE__);
	return;
}

echo $this->Session->flash();