<!DOCTYPE html>
<html>

<head>
   <title>Insert Data</title>
</head>

<body>
   <div style="width: 500px; margin: 20px auto;">
      <!-- showing the message here-->
      <?php phpinfo(); ?>
      <div><?php echo $message; ?></div>
      <table width="100%" cellpadding="5" cellspacing="1" border="1">
         <form action="insert.php" method="post">
            <tr>
               <td>Name:</td>
               <td><input name="name" type="text"></td>
            </tr>
            <tr>
               <td>Email:</td>
               <td><input name="email" type="text"></td>
            </tr>
            <tr>
               <td><a href="list.php">See Data</a></td>
               <td><input name="submit_data" type="submit" value="Insert Data"></td>
            </tr>
         </form>
      </table>
   </div>
</body>

</html>