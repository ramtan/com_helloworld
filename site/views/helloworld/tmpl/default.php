<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->msg->greeting.(($this->msg->category and $this->msg->params->get('show_category'))
                                      ? (' ('.$this->msg->category.')') : ''); ?>
</h1>