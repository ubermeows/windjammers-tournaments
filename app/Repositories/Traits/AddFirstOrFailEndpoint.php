<?php

namespace App\Repositories\Traits;

trait AddFirstOrFailEndpoint
{
    public function firstOrFail()
    {
        $this->applyCriteria();
        $this->applyScope();

        $results = $this->model->firstOrFail();

        $this->resetModel();

        return $this->parserResult($results);
    }
}
