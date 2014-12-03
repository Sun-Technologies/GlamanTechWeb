<?php $CURRENT_PAGE= "employers"; 
if(isset($_POST['submit'])) {
  $msg  = "Name: " . $_POST['name'] . "\n" . "Company: " . $_POST['company'] . "\n" .
          "Email: " . $_POST['email'] . "\n" . "Phone: " . $_POST['phone'] . "\n" .
          "Subject: " . $_POST['subject'] . "\n" ."Message: " . $_POST['message'] . "\n";
          mail('hr@glamantech.com', 'New Job Order', $msg);
          mail('tahiri@suntechnologies.com', 'New Job Order', $msg);
          mail('chandra.shalwi@gmail.com', 'New Job Order', $msg);
          if($msg == null) {
            header('location: submit_feedback.php');
          }
          else {
            header('location: search_job_thanks.php');
          }
} 
?>
<?php include'header.php'; ?>
<div id="primary" class="container   clearfix animated bounceIn">
    <h1>Contact Our Account Manager</h1>
    <hr/>
      <form method="post" action="">
        <table class="contact-manager-table">
          <tr>
          <td class="dropdown-header">Name *</td>
          <td><input type="text" id="text-input-order" name="name" placeholder="Name" required ></td>
          </tr>
          <tr>
          <td class="dropdown-header">Company *</td>
          <td><input type="text" id="text-input-order" name="company" placeholder="Company" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Email *</td>
          <td><input type="email" id="text-input-order" name="email" placeholder="Email" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Phone# *</td>
          <td><input type="text" id="text-input-order" name="phone" placeholder="Phone" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Subject *</td>
          <td><input type="text" id="text-input-order" name="subject" placeholder="Subject" required></td>
          </tr>
          <td colspan="2" class="dropdown-header">Message *<br>
            <textarea maxlength="2000" class="contact-message" name="message" required></textarea></td>
          </tr>
          <tr>
          <td colspan="2">
          <input type="submit" name="submit" value="Send" id="go-button">
          </td>
          </tr>
      </table>
    </form>
</div>
<?php include'footer1.php'; ?>