<?php

namespace Structural\Bridge;

/**
 * 创建 HtmlFormatter HTML 格式类实现 FormatterInterface 接口。
 */
class HtmlFormatter implements FormatterInterface
{

    /**
     * 返回 HTML 格式。
     */
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
