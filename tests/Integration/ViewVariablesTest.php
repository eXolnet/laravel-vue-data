<?php

namespace Exolnet\VueData\Tests\Integration;

use Exolnet\VueData\Facades\Vue;

class ViewVariablesTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function testEmptyVariables(): void
    {
        $html = trim(view('vue-data::variables')->render());

        $this->assertEmpty(trim($html));
    }

    /**
     * @return void
     * @test
     */
    public function testVariablesAreDefined(): void
    {
        Vue::put('variable', 'value');

        $html = trim(view('vue-data::variables')->render());

        $this->assertNotEmpty($html);
        $this->assertStringContainsString('<script>', $html);
        $this->assertStringContainsString('window.App', $html);
        $this->assertStringContainsString('{"variable":"value"}', $html);
    }

    /**
     * @return void
     * @test
     */
    public function testVariablesWithNonce(): void
    {
        Vue::put('variable', 'value');

        $html = trim(view('vue-data::variables', ['nonce' => 'abc'])->render());

        $this->assertNotEmpty($html);
        $this->assertStringContainsString('<script nonce="abc">', $html);
        $this->assertStringContainsString('window.App', $html);
        $this->assertStringContainsString('{"variable":"value"}', $html);
    }
}
