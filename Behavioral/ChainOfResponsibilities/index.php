<?php

namespace Behavioral\ChainOfResponsibilities\Tests;

use Behavioral\ChainOfResponsibilities\Handler;
use Behavioral\ChainOfResponsibilities\Responsible\HttpInMemoryCacheHandler;
use Behavioral\ChainOfResponsibilities\Responsible\SlowDatabaseHandler;
include('../../reload.php');

/**
 * 创建一个自动化测试单元 ChainTest 。
 */
class ChainTest
{
    /**
     * @var Handler
     */
    private $chain;

    /**
     * 模拟设置缓存处理器的缓存数据。
     */
    protected function setUp()
    {
        $this->chain = new HttpInMemoryCacheHandler(
            ['/foo/bar?index=1' => 'Hello In Memory'],
            new SlowDatabaseHandler()
        );
    }

    /**
     * 模拟从缓存中拉取数据。
     */
    public function testCanRequestKeyInFastStorage()
    {
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')
             ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        var_dump($this->chain->handle($request));
    }

    /**
     * 模拟从数据库中拉取数据。
     */
    public function testCanRequestKeyInSlowStorage()
    {
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')
             ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        var_dump($this->chain->handle($request));
    }

}

$test = new ChainTest;
echo "test============\n";
$test->testCanRequestKeyInFastStorage();
echo "test============\n";
$test->testCanRequestKeyInSlowStorage();
