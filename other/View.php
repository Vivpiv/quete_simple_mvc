<?php
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 07/10/18
 * Time: 16:02
 */

namespace View;


class View
{
    public function render(string $path, array $params) :string
    {
        extract($params);
        ob_start();
        require $path;
        $content = ob_get_clean();
        return $content;
    }
}