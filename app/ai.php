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
            $male =['ครับ','ครัช','ผม','เรา','ผม'];
            $female =['ค่ะ','จ้า','ฉัน'];
            
        for($i=0 ; $i < sizeof($male) ; $i++){
            if ((strpos($text, $male[$i]) !== false))
                return 'Male';
        }

        for($i=0 ; $i < sizeof($female) ; $i++){
            if ((strpos($text, $female[$i]) !== false))
                return 'Female';
        }
        

        return  'Unknown';
    }
    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
            $positive =['สนุก','ชอบ','รัก','love'];
            $negative =['เศร้าง','เกลียด','เบื่อ'];
            
        for($i=0 ; $i < sizeof($positive) ; $i++){
            if ((strpos($text, $positive[$i]) !== false))
                return 'Positive';
        }

        for($i=0 ; $i < sizeof($negative) ; $i++){
            if ((strpos($text, $negative[$i]) !== false))
                return 'Negative';
        }
        

        return 'Neutral';

    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $rude =['แสส','ฟวย','ควE','fuck','บ้า','คนเลว','ชั่ว','สามาร','ไอห่า','ไอตัวลากไก่ไปกินในน้ำ','ไอคนไม่ดี'];
        $returnRude = array();
        for($i=0 ; $i < sizeof($rude) ; $i++){
            if ((strpos($text, $rude[$i]) !== false))
                array_push($returnRude,$rude[$i]);
        }

        return  (sizeof($returnRude)==0)?['พูดเพราะมาก']:$returnRude;
       
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
        }
        if(preg_replace('/[^a-z]/u','',$text)){
            if(preg_replace('/[^ก-๛]/u','',$text)){
                return ['TH', 'EN'];
            }else{
                return ['EN'];
            }
        }
    }
    
}
