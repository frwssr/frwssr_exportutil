<?php

/**
 * Perch template filter for escaping quotationmarks
 * 
 * @package PerchTemplateFilter_exportutil
 * @version v1.0.0 
 * @link https://github.com/frwssr/frwssr_exportutil
 */

class PerchTemplateFilter_exportutil extends PerchTemplateFilter 
{
    public function filterAfterProcessing($value, $valueIsMarkup = false)
    {	
        $search  = [ '"',  "\r\n", '[',     ']' ];
        $replace = [ '\"', "",     '&#91;', '&#93;' ];
    	$return = str_replace($search, $replace, $value);
        return $return;
    }
}

PerchSystem::register_template_filter('exportutil', 'PerchTemplateFilter_exportutil');