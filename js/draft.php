<?php
// Connect to MongoDB database
$mongoClient = new MongoDB\Client("mongodb+srv://Ionhax:2298061@cluster0.fcyuibr.mongodb.net/test");
$collection = $mongoClient->mydb->users;

// Save data to MongoDB
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $document = [
    'name' => $name,
    'age' => $age,
    'email' => $email
  ];
  $result = $collection->insertOne($document);
  echo 'Data saved successfully!';
}

// Fetch data from MongoDB based on input fields
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $query = [];
  if (isset($_GET['name'])) {
    $query['name'] = $_GET['name'];
  }
  if (isset($_GET['age'])) {
    $query['age'] = (int)$_GET['age'];
  }
  if (isset($_GET['email'])) {
    $query['email'] = $_GET['email'];
  }
  $data = $collection->find($query);
  $response = [];
  foreach ($data as $document) {
    $response[] = [
      'name' => $document['name'],
      'age' => $document['age'],
      'email' => $document['email']
    ];
  }
  echo json_encode($response);
}
?>




// $(document).ready(function(){
//     var email = localStorage.getItem('email');
//     if(email == null){
//         window.location.href='login.html';
//     }
//     else{
//         $('#email').text(email);
//     }

//     $('#login').submit(function(event){
//         event.preventDefault();

//         var formData = $(this).serialize();

//         $.ajax({
//             url: 'php/login.php',
//             method: 'POST',
//             data: formData,
//             success: function(response){
//                 if(response=='success'){
//                     window.location.href='profile.html';
//                 }
//                 else{
//                     alert('Invalid.. Try again');
//                 }
//             }
//         });
//         return false;
//     });
// });

