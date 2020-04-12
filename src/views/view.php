<?php

$widget = $this->context;

?>

<a data-lightbox="<?= $widget->group ?>" href="<?= $widget->source ?>" style="<?= $widget->style ?>">
    <img src="<?= $widget->thumbnail ?>" height="<?= $widget->height ?>" width="<?= $widget->width ?>" alt="<?= $widget->description ?>" />
</a>
