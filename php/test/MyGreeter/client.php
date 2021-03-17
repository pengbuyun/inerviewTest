<?php


class Client
{
    public function getGreeting(){
        $hour = Date('h');
        if(6 < $hour && $hour <= 12){
            echo "早上好";
        }elseif (12 < $hour && $hour <= 18){
            echo "下午好";
        }elseif(18 < $hour && $hour <= 6){
            echo "晚上好";
        }
    }
}