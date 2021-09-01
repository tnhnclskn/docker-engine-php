<?php

namespace Tnhnclskn\Docker;

use Clue\React\Block;
use React\Http\Browser;
use React\EventLoop\Loop;
use React\EventLoop\LoopInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ReactBrowserAdapter implements ClientInterface
{
    private Browser $browser;

    private string $baseUri;

    public function __construct(Browser $browser, string $baseUri = '', ?LoopInterface $loop = null, int $timeout = 10)
    {
        $this->browser = $browser;
        $this->baseUri = $baseUri;
        if (null === $loop) {
            $loop = Loop::get();
        }
        $this->loop = $loop;
        $this->timeout = $timeout;
    }

    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $uri = sprintf('%s/%s', rtrim($this->baseUri, '/'), ltrim($request->getUri(), '/'));
        $response = $this->browser->request($request->getMethod(), $uri, $request->getHeaders(), $request->getBody());
        return Block\await($response, $this->loop, $this->timeout);
    }
}
