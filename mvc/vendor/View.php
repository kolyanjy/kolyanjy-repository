<?php


class View
{
    public function render($layout, $content, $data = null) {
         require_once ('views/layouts/' . $layout);
    }
}