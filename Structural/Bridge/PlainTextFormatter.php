<?php

namespace Structural\Bridge;

/**
 * 创建 PlainTextFormatter 文本格式类实现 FormatterInterface 接口。
 */
class PlainTextFormatter implements FormatterInterface
{

    /**
     * 返回字符串格式。
     */
    public function format(string $text)
    {
        return $text;
    }
}
