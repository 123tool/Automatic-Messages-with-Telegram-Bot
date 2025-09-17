<?php
class Bot
{
	
    static $token           ="{KEY}";
    public static $bot_name ="{Name}";
    static $params          ="test";
    static $url             ="https://api.telegram.org";
    
    public function getUpdate($params)
    {
        $url        = self::$url.'/bot'.self::$token.'/getUpdates';
        $getUpdate  = file_get_contents($url);
        $resultArr  = json_decode($getUpdate,true);
        
        if(empty($resultArr))
        {
            $callback['respon']['pesan']    ="gagal";
            $callback['respon']['text_msg'] ="No-case";
            $callback['result']['items']    =$resultArr['result'];
        }
        else
        {
            $callback['respon']['pesan']    ="sukses";
            $callback['respon']['text_msg'] ="No-case";
            $callback['result']['items']    =$resultArr['result'];
        }
        return $callback;
    }

    public function send($params)
    {
        $data=[
            'text' 		=> $params['text'],
            'chat_id' 	=> $params['chat_id'],
        ];
        
        $url        	= self::$url.'/bot'.self::$token.'/sendMessage?'.http_build_query($data);
        $sendMessage  	= file_get_contents($url);
        $resultArr  	= json_decode($sendMessage,true);
        
        if(empty($resultArr))
        {
            $callback['respon']['pesan']    ="gagal";
            $callback['respon']['text_msg'] ="No-case";
            $callback['result']['items']    =$resultArr['result'];
        }
        else
        {
            $callback['respon']['pesan']    ="sukses";
            $callback['respon']['text_msg'] ="No-case";
            $callback['result']['items']    =$resultArr['result'];
        }
        return $callback;
    }

}

