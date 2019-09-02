<?php


namespace App\Handler;


use App\RestDispatchTrait;
use App\Service\UserRootService;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Hal\HalResponseFactory;
use Zend\Expressive\Hal\ResourceGenerator;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class UserRootHandler
 * @package App\Handler
 */
class UserRootHandler implements RequestHandlerInterface
{
    use RestDispatchTrait;
    
    /**
     * @var ResourceGenerator
     */
    private $resourceGenerator;

    /**
     * @var HalResponseFactory
     */
    private $responseFactory;

    /**
     * @var UserRootService
     */
    private $userRootService;

    /**
     * UserRootHandler constructor.
     * @param ResourceGenerator $resourceGenerator
     * @param HalResponseFactory $responseFactory
     */
    public function __construct(ResourceGenerator $resourceGenerator,
                                HalResponseFactory $responseFactory,
                                UserRootService $userRootService)
    {
        $this->resourceGenerator = $resourceGenerator;
        $this->responseFactory = $responseFactory;
        $this->userRootService = $userRootService;
    }

    /**
     * @param ServerRequestInterface $request
     * @return JsonResponse
     */
    public final function post(ServerRequestInterface $request) : JsonResponse
    {

        return $this->createResponseByJsonObject([],[],200);
    }

    public final function get(ServerRequestInterface $request) : JsonResponse
    {
        return $this->createResponseByJsonObject(["ping" => time()],[],200);
    }
}