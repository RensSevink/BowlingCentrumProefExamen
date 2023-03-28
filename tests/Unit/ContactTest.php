<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ContactController;

class ContactTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $contactController = new ContactController();


        $output = $contactController->add(1, 2);

        $this->assertEquals(3, $output);
    }
}
