<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Male1(): void
    {
        $result = AI::getGender('สวัสดีครัช');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Male2(): void
    {
        $result = AI::getGender('เรา');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
   

}