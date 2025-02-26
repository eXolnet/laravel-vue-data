<?php

namespace Exolnet\VueData\Tests\Integration;

use Exolnet\VueData\Facades\Vue;
use Illuminate\Support\Facades\View;

class ViewDirectiveTest extends TestCase
{
    /**
     * @return void
     */
    public function testVueDirective(): void
    {
        $this->assertEmpty(Vue::all());

        View::file(__DIR__ . '/../Fixtures/vue-directive.blade.php', [
            'key' => 'variable',
            'value' => 'value',
        ])->render();

        $this->assertEquals(1, Vue::count());
        $this->assertEquals('value', Vue::get('variable'));
    }
}
