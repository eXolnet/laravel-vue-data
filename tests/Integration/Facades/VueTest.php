<?php

namespace Exolnet\VueData\Tests\Integration\Facades;

use Exolnet\VueData\Facades\Vue;
use Exolnet\VueData\Tests\Integration\TestCase;

class VueTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function testFacadeRoot(): void
    {
        $vue = Vue::getFacadeRoot();

        $this->assertEquals(app('vue'), $vue);
    }
}
