<?php
namespace App\Traits;

trait Uploader{
    public function uploadToImgur($img){
          error_log(json_encode($img));
          $filename = $img['picture'];
          $handle = fopen($filename, "r");
          $data = fread($handle, filesize($filename));
          $pvars   = array('image' => base64_encode($data));
          $pms = $this->CurltoImgur($pvars);
          $url=$pms['data']['link'];
          if($url!=""){
            return $url;
          }else{
            echo "<h2>There's a Problem</h2>";
          }

    }

    private function CurltoImgur($pvars){
          $client_id="92395e9873f8e10";
          $timeout = 100;
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
          curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
          $out = curl_exec($curl);
          curl_close ($curl);
          $pms = json_decode($out,true);
          return $pms;
    }
    
}
