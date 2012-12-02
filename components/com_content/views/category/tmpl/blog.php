<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

JHtml::_('behavior.caption');
?>
<div class="blog2">
<?php 
foreach($this->lead_items as $item){ 
    $urls = json_decode($item->urls);
?>
    <ul>
        <li><a href="<?= $urls->urla ?>"><img src="<?= $urls->urlb ?>"/></a></li>
        <li class="t"><a href="<?= $urls->urla ?>"><span><?= $urls->urlatext ?></span></a></li>
    </ul>
<?php
}
foreach($this->intro_items as $item){ 
    $urls = json_decode($item->urls);
?>
    <ul>
        <li><a href="<?= $urls->urla ?>"><img src="<?= $urls->urlb ?>"/></a></li>
        <li class="t"><a href="<?= $urls->urla ?>"><span><?= $urls->urlatext ?></span></a></li>
    </ul>
<?php
}
?>
<div style="clear:left" ></div>
</div>

