<?php

class Facebook extends Controller
{

  public function Index()
  {

    $url = "https://graph.facebook.com/v18.0/139947519183367?fields=global_brand_page_name%2Cposts%7Bfull_picture%2Cmessage%2Ccreated_time%2Clikes%2Ccomments%7D&access_token=EAAMfLBKZCKyoBO7Wm4OTN0QQzbzfZBe9QHJz8HtMSEMLKKEhqbBOyRCbVJFCsuSn3u2ZBM5LbUdXGehEcPfHZCtozDDKdxNsRDnZC6BW1OIfiDL3eYQphGaYo0CzfZBPvmOfSmQJaEcjXLnntQcFyyRj2rhwUtvaiDObsV0F3QcoLLDGL8VqmCqZB0PZCX6xAH3fJkrf04S9a2ngoG7hXY26Gc7xZB4dbdeZBVdQZDZD";


    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
      echo 'cURL error: ' . curl_error($ch);
    }
    // Close cURL session
    curl_close($ch);

    $data =  json_decode($response, true);

    $this->data['page_title'] = 'Facebook Page';
    $this->data['facebook'] = $data;
    $this->view = 'facebook/index';

    $this->response();
  }
}
