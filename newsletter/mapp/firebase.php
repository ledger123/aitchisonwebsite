<?php
 
/**
 * @author Asim Ansari
 */
class Firebase {
 
    // sending push message to single user by firebase reg id
    public function send($to, $message) {
        $fields = array(
            'to' => $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
 
    // Sending message to a topic by topic name
    public function sendToTopic($to, $message) {
        $fields = array(
            'to' => '/topics/' . $to,
            //'notification' => $message,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }

    // Sending message to a topic by topic name
    public function sendToTopic2($to, $message) {
        $fields = array(
            'topic' => $to,
            'notification' => $message,
        );
        return $this->sendPushNotification($fields);
    }
	
	// Sending message to a multiple topics by topic names
    public function sendToTopics($to, $message) {
        $fields = array(
            //'to' => '/condition/' . $to,
			'condition' => $to,
			//'priority' => 'high',
            'data' => $message,
        );
		
		
        return $this->sendPushNotification($fields);
    }
 
    // sending push message to multiple users by firebase registration ids
    public function sendMultiple($registration_ids, $message) {
        $fields = array(
            'to' => $registration_ids,
            'data' => $message,
        );
 
        return $this->sendPushNotification($fields);
    }
 
    // function makes curl request to firebase servers
    private function sendPushNotification($fields) {
        
		//echo "<pre>";
		//var_dump($fields);
		//echo "</pre>";
        $jsonData = json_encode($fields);
        
        require_once 'config.php';
        
        // Set POST variables
        $url = 'https://fcm.googleapis.com/fcm/send';

        //$api_key = "AIzaSyBtvmSBml7Kx_h1tVpf6Xl2M3ahvcNTPU0";
		
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json',
            'Content-Length: ' . strlen( $jsonData )
        );

        // Open connection
        $ch = curl_init();
        
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        
        // Close connection
        curl_close($ch);
        
        //echo "message sent.";
        
        return $result;
    }
	
	public function getTopics()
	{
		require_once 'config.php';
 		
        // Set POST variables
        $url = 'https://iid.googleapis.com/iid/info/cci7XYKv_XU:APA91bGd4AC_m-5pI-2FFZywHEc40q2jJ0TbTFVcerwo__i6R2aL-bPN6MFpuUkzBcbsR7lsXvIEOySeDVm-X3R8xiu5JPe17zlVEurTFGnqAi0Dq1byqksGYs30WRpAkiEz5CJHyTUY?details=true';
 
        $headers = array(
            'Authorization: key=' . FIREBASE_API_KEY,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
 
        return $result;
    }
    

    public function sendTestMessage($title, $message) {
        #API access key from Google API's Console
        require_once 'config.php';

        //$registrationIds = $_GET['id'];
        #prep the bundle
        $msg = array
            (
            'body' 	=> $message,
            'title'	=> $title
            );
            
        $fields = array
            (
                'to' => '/topics/all',
                'notification'	=> $msg
            );
        
        
        $headers = array
            (
                'Content-Type: application/json',
                'Authorization:key=' . FIREBASE_API_KEY

            );
        
        #Send Reponse To FireBase Server	
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        if ($result === FALSE) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close( $ch );
        #Echo Result Of FireBase Server
        return $result;
    }
    
}
?>