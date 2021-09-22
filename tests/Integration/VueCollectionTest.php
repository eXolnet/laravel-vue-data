<?php

namespace Exolnet\VueData\Tests\Integration;

use Illuminate\Support\Collection;

class VueCollectionTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function testVueIsACollection(): void
    {
        $vue = app('vue');

        $this->assertInstanceOf(Collection::class, $vue);
    }

    /**
     * @return void
     * @test
     */
    public function testVueIsASingleton(): void
    {
        $vue1 = app('vue');
        $vue2 = app('vue');

        $this->assertEquals($vue1, $vue2);
    }
}
