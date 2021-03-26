<?php

namespace Tests;

use Tests\Traits\DisabledLocalization;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUpTraits()
    {
        $traits = parent::setUpTraits();

        if (isset($traits[DisabledLocalization::class])) {
            $this->disabledLocalization();
        }
    }
}
