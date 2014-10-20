<?php $CURRENT_PAGE= "employers"; 
require('search_job_functions.php');
include 'job_location.php';
include 'job_speciality.php';
include 'job_type.php';
require('database.php');
if(isset($_POST['submit'])) {
  $msg  = "Name: " . $_POST['name'] . "\n" . "Company: " . $_POST['company'] . "\n" .
          "Address: " . $_POST['address'] . "\n" . "City: " . $_POST['city'] . "\n" .
          "State: " . $_POST['state'] . "\n" . "Zip Code: " . $_POST['zip'] . "\n" .
          "Email: " . $_POST['email'] . "\n" . "Phone: " . $_POST['phone'] . "\n" .
          "Job Speciality: ". $_POST['job_speciality'] . "\n" . "Job Title: " . $_POST['job_title'] . "\n" .
          "Job Type: " . $_POST['job_type'] . "\n" . "Job Responsibilities" . $_POST['job_responsibilility'] . "\n" .
          "Additional Comments: " . $_POST['comments'] . "\n";
          mail('chandra.shalwi@gmail.com', 'New Job Order', $msg);
          if($msg == null) {
            header('location: submit_job_order.php');
          }
          else {
            header('location: search_job_thanks.php');
          }
} 
?>
<?php include'header.php'; ?>
<div id="primary" class="container   clearfix">
    <h1>Submit a Job Order</h1>
    <hr/>
    <p>Complete this form and a GlamanTech representative will contact you shortly, or call us at 972-992-0770</p>
      <form method="post" action="">
        <table>
          <tr>
          <td class="dropdown-header">Name *</td>
          <td><input type="text" id="text-input" name="name" placeholder="Name" required ></td>
          </tr>
          <tr>
          <td class="dropdown-header">Company *</td>
          <td><input type="text" id="text-input" name="company" placeholder="Company" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Address *</td>
          <td><input type="text" id="text-input" name="address" placeholder="Address" required></td>
          </tr>
          <td class="dropdown-header">City *</td>
          <td><input type="text" id="text-input" name="city" placeholder="City" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">State</td>
          <td>
            <select id="text-input" style="width: 155px; height: 30px;" name="state" required>
                <?php setSelectOptions($job_location_array  , $state); ?>
            </select>
          </td>
          </tr>
          <tr>
          <td class="dropdown-header">Zip Code *</td>
          <td><input type="text" id="text-input" name="zip" placeholder="Zip Code"  required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Email *</td>
          <td><input type="email" id="text-input" name="email" placeholder="Email" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Phone# *</td>
          <td><input type="text" id="text-input" name="phone" placeholder="Phone" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Job Speciality</td>
          <td>
            <select class="drop-style" name="job_speciality"  style="width: 155px;" required>
              <?php setSelectOptions($job_speciality_array  , $job_speciality); ?>
              </select>
          </td>
          </tr>
          <tr>
          <td class="dropdown-header">Job Title(s) *</td>
          <td><input type="text" id="text-input" name="job_title" placeholder="Job Title" required></td>
          </tr>
          <tr>
          <td class="dropdown-header">Job Type</td>
          <td><select class="drop-style"  style="width: 155px; height: 30px;"  name="job_type" required>
              <?php setSelectOptions($job_type_array  , $job_type); ?>
            </select>
          </td>
          </tr>
          <tr>
          <td colspan="2" class="dropdown-header">Job Responsibilities *<br>
          <textarea maxlength="2000" style="width: 490px; height: 150px;" id="text-input" name="job_responsibilility"></textarea></td>
          </tr>
          <tr>
          <td colspan="2" class="dropdown-header">Additional Comments <br>
            <textarea maxlength="2000" style="width: 490px; height: 150px;" id="text-input" name="comments"></textarea></td>
          </tr>
          <tr>
          <td colspan="2">
          <input type="submit" name="submit" value="Apply Now" id="go-button">
          </td>
          </tr>
      </table>
    </form>
</div>
<?php include'footer1.php'; ?>