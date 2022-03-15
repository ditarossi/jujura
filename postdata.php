<?php
if(isset($_post['submit'])){
    $email = mysql_real_escape_string($_post['email']);
    $password = mysql_real_escape_string($_post['password']);

    $form_data = array(
        'email' => $email,
        'password' => $password
    );
    //echo "<pre>";
    //echo($form_data);
    $str = http_build_query($form_data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://recruitment.api.jujura.id/api");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //eksekusi

    $output = curl_exec($ch);

    curl_close($ch);
    //echo $output;
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
<form>
  <div>
    <?php
      if(isset($output)){
        echo $output;
      }
    ?>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>