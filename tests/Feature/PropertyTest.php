<?php

namespace Tests\Feature;

use App\Integrations\EasyBroker;
use Tests\TestCase;

class PropertyTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_properties_are_returned(): void
    {
        $easyBroker = new EasyBroker('staging', 'l7u502p8v46ba3ppgvj5y2aad50lb9');
        $properties = $easyBroker->getProperties();
        $this->assertIsArray($properties);
        $this->assertNotEmpty($properties);
    }

    /**
     * A basic test example.
     */
    public function test_properties_are_not_returned(): void
    {
        $easyBroker = new EasyBroker('staging', 'l7u502p8v46ba3ppgvj5y2aad50l');
        $properties = $easyBroker->getProperties();
        $this->assertIsArray($properties);
        $this->assertEmpty($properties);
    }
}
