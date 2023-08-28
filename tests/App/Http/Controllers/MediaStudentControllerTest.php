<?php

namespace Tests\App\Http\Controllers;

use App\Http\Controllers\MediaStudentController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

# php artisan test --filter=MediaStudentControllerTest
class MediaStudentControllerTest extends TestCase
{
    # php artisan test --filter=MediaStudentControllerTest::test_media_calculator
    public function test_media_calculator()
    {
        $controller = new MediaStudentController;
        $media = $controller->mediaCalculator(5, 7);
        $this->assertEquals(6, $media);
    }
}
