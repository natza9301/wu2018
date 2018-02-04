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
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Male2(): void
    {
        $result = AI::getGender('เรา');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Male1(): void
    {
        $result = AI::getGender('ผม');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Female1(): void
    {
        $result = AI::getGender('ฉัน');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);   
    }
    public function testSentiment_positive(): void
    {
        $result = AI::getSentiment('สนุก');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }
    public function testSentiment_positive(): void
    {
        $result = AI::getSentiment('เบื่อ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    public function testSentiment_positive(): void
    {
        $result = AI::getSentiment('เฉยๆ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword()): void
    {
        $result = AI::getRudeWords('Fuck');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword()): void
    {
        $result = AI::getRudeWords('Fuck');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }

}