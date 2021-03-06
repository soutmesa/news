<?php

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setActive($path)
{
    return Request::is($path) ? 'class=active' : '';
}

function isSelected($data, $match)
{
	return strtolower($data)==strtolower($match) ?'selected="selected"' : '';
}
