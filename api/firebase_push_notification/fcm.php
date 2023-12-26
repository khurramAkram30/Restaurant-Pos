<?php

function sendNotifications($tokenId) {
  // echo $tokenId;
  // Use actual FCM server key
  $serverKey = "AAAArCbshoc:APA91bE5UpryzF8vUsGcvKhVAbKpAKVHGKTm9-Tbb91tTp7kD_qvJuC9rLxZETWQjQFs06kKU0z-l4KDi6uEJxDuanVJgm9RjOoFNP5dv6ttZ4o82JoYx7C4QO2W25Umj5nxdHtLd-at";

  // Update payload using fetched token and desired content
  $payload = [
    "to" => $tokenId, // Replace with retrieved token
    "notification" => [
      "title" => "New data inserted!", // Customize notification title
      "body" => "Important information added.", // Customize notification body
    ],
  ];

  // Set options for FCM request
  $headers = array(
    "Authorization: key=$serverKey",
    "Content-Type: application/json",
  );

  $options = array(
    CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => json_encode($payload),
  );

  // Initialize cURL session
  $ch = curl_init();
  curl_setopt_array($ch, $options);

  // Execute cURL session and get the response
  $response = curl_exec($ch);

  // Check for cURL errors and FCM response code
  if (curl_errno($ch)) {
    echo "Error sending cURL request: " . curl_error($ch);
  } else {
    $decodedResponse = json_decode($response, true);
    if (isset($decodedResponse["success"])) {
      // echo json_encode(array("status" => "success", "message" => "Notification sent successfully."));
    } else {
      // Analyze FCM error code and provide specific feedback
      // echo json_encode(array("status" => "error", "message" => "Error sending notification: " . $decodedResponse["error"]));
    }
  }

  // Close cURL session
  curl_close($ch);

  // Implement logging for successful and failed attempts
}

// Replace with your logic to retrieve the recipient token
// $tokenId = "cS8QX8o__K3gCJqvwL1j2j:APA91bEEiei6gojQqkgHql7EnkSTWxXn7fHJkM0LYYGT2iVUzHKVuSjworS_fCmWO94Y-ifnBJhFrnDyyW6CQH2LFYjUGQftmvTqtjO6tk435t8TDEBMV1NFbRWD6KlLpE8FEgO-gCwj";

// // // Send notification using retrieved token
// sendNotifications($tokenId);

?>
