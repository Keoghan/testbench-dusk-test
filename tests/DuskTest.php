<?php

namespace Tests;

use Laravel\Dusk\Browser;

class DuskTest extends \Orchestra\Testbench\Dusk\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\TestbenchDuskTest\ServiceProvider::class];
    }

    /** @test */
    public function it_will_load_the_test_route()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('test')
                ->assertSee('Hit Test Controller');
        });
    }
}