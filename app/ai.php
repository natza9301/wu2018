<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        if ((strpos($text, 'female') !== false) || (strpos($text, 'ผู้หญิง') !== false) || (strpos($text, 'สวัสดีค่ะ') !== false)  
        || (strpos($text, 'จ้า') !== false) || (strpos($text, 'ค้า') !== false) ||(strpos($text,'ฉัน')!== false)) {
            return 'Female'; 
        }

        else if((strpos($text, 'male') !== false)|| (strpos($text, 'ผู้ชาย') !== false)|| (strpos($text, 'ครับ') !== false)
        || (strpos($text, 'สวัสดีครัช') !== false)|| (strpos($text, 'ผม') !== false)  ||(strpos($text,'เรา')!== false)  )
        {
            return 'Male';
        }
        else
            return 'Unknown';
        
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        if ((strpos($text, 'สนุก') !== false) ||(strpos($text,'ชอบ')!== false)||(strpos($text,'รัก')!== false)||(strpos($text,'love')!== false))
            return 'Positive';
        else if ((strpos($text, 'เศร้า') !== false)||(strpos($text,'เกลียด')!== false)||(strpos($text,'เบื่อ')!== false)
        ||(strpos($text,'ไม่สนุก')!== false))
            return 'Negative';
        else 
            return 'Neutral';

    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $rude= array();
        if (strpos($text, 'fuck') !== false)
            array_push($rude,'fuck');
        if (strpos($text, 'bad') !== false)
            array_push($rude,'bad');
        if (strpos($text, ' ไอบ้า') !== false)
            array_push($rude,'ไอบ้า');
        if (strpos($text, 'ไอคนไม่ดี') !== false)
            array_push($rude,'ไอคนไม่ดี');
        return (sizeof($rude)==0)?['Polite']:$rude;
       
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        if(preg_replace('/[^ก-๛]/u','',$text)){
            if(preg_replace('/[^a-z]/u','',$text)){
                return ['TH', 'EN'];
            }else{
                return ['TH'];
            }
        }if(preg_replace('/[^a-z]/u','',$text)){
            if(preg_replace('/[^ก-๛]/u','',$text)){
                return ['TH', 'EN'];
            }else{
                return ['EN'];
            }
        }
    }
}
