<?php
 
/**
 * @author Asim Ansari
 */
class Push {
 
    // push message title
    private $title;
    private $message;
    private $image;
	private $android;
    // push message payload
    private $data;
    private $url;
    // flag indicating whether to show the push
    // notification or not
    // this flag will be useful when perform some opertation
    // in background when push is recevied
    private $is_background;
 
    function __construct() {
         
    }
 
    public function setTitle($title) {
        $this->title = $title;
    }
 
    public function setMessage($message) {
        $this->message = $message;
    }
 
    public function setImage($imageUrl) {
        $this->image = $imageUrl;
    }
 
    public function setPayload($data) {
        $this->data = $data;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
	
	public function setAndroid()
	{
		$android = array();
		$android['ttl'] = '86400s';
		$android['notification'] = array("click_action"=>"InboxActivity.class");
		
		$this->android = $android;
	}
 
    public function setIsBackground($is_background) {
        $this->is_background = $is_background;
    }

/*
    array(1) 
    { 
        ["notification"]=> array(5) 
        { 
            ["title"]=> string(12) "Welcome Note" 
            ["body"]=> string(42) "You are cordially invited to the Academics" 
            ["image"]=> string(0) "" 
            ["url"]=> string(59) "https://aitchison.edu.pk/portal/principal-letter.php?id=570" 
            ["timestamp"]=> string(19) "2019-11-20 08:31:26" 
        } 
    }

    
    options = {
    priority: 'high',
    notification: {
        title: "title",
        body: "message",
        "click_action": "OPEN_ACTIVITY_1" // should match to your intent filter
      },
    data: {
        url: "some_url",
        image_url: "some_image_url"
      }
    }
    */
	 /*
        $options = array(
            'priority' => 'high',
            'notification' => array(
                'title' => $this->title,
                'body' => $this->message
                //*"click_action" => "OPEN_ACTIVITY_1" // should match to your intent filter
            ),
            'data' => array(
                'url' => $this->url,
                'timestamp' => "2019-11-20 08:31:26"
            )
        );

        return  $options;
        */

    public function getPush() {
        
        //date_default_timezone_set("Asia/Karachi");
        $res = array();
		//$data = "data";
		$data = "notification";
        $res[$data]['title'] = $this->title;
        $res[$data]['body'] = $this->message;

        //$res[$name]['is_background'] = $this->is_background;
        //$res[$name]['message'] = $this->message;
		
        $res[$data]['image'] = $this->image;
        $res[$data]['url'] = $this->url;
        //$res[$name]['payload'] = $this->data;
        $res[$data]['timestamp'] = '2019-11-20 08:31:26'; // date('Y-m-d G:i:s', time());

        return $res;
    }

}