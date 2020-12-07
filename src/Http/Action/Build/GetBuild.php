<?php
declare(strict_types=1);

namespace Argo\Http\Action\Build;

use Argo\Http\Action;
use Argo\Http\Responder;
use SapiRequest;
use SapiResponse;

class GetBuild extends Action
{
    public function __invoke() : SapiResponse
    {
        return $this->response($this->request);
    }
}
