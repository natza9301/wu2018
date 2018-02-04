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
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
    public function testGender_Male3(): void
    {
        $result = AI::getGender('ผม');
        $expected_result = 'Male';
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
    public function testSentiment_positive1(): void
    {
        $result = AI::getSentiment('เบื่อ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword1(): void
    {
        $result = AI::getRudeWords('fuck');
        $expected_result = ['fuck'];
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword2(): void
    {
        $result = AI::getLanguages('Fuck');
        $expected_result = ['EN'];
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword3(): void
    {
        $result = AI::getLanguages('วู้');
        $expected_result = ['TH'];
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword3(): void
    {
        $result = AI::getLanguages('วู้ABC');
        $expected_result = ['TH','EN'];
        $this->assertEquals($expected_result, $result);
    }
    public function testrudeword3(): void
    {
        $result = AI::getLanguages('ABCวู้');
        $expected_result = ['EN','TH'];
        $this->assertEquals($expected_result, $result);
    }

}