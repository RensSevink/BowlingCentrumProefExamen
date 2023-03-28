<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ScoringController;

class ScoringTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $scoringController = new ScoringController();


        $output = $scoringController->add(1, 2);

        $this->assertEquals(3, $output);
    }
}
