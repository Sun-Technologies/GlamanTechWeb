<?php include'header.php'; ?>
  <div class="split_line"></div>
  <div id="primary" class="container1">
    <h1 class="page-title">White Papers</h1>
    <hr/>
    <div class="wp-area">
    <div class="date-area"><span><img src="images/fourth-nov.png" alt="4th November"></span><span class="date-head">AWS Security</span></div>
    <p>The AWS cloud infrastructure offers secure cloud computing environments with high flexibility, dependability and availability to the customers to build a vast range of applications. It helps in protecting confidentiality, integrity, and availability of our customers’ systems and data.</p>
    <p><span class="download-wp"><a href="http://aws.amazon.com/whitepapers/">Download Whitepaper</a></span></p>
       <div id="contact-box">
                <form id="contact-form" class="clearfix" action="whitepapers.php" method="post">
                    <div class="form-item form-type-textfield form-item-name">
                        <label class="required" for="contact_name"><strong>Name:</strong></label>
                        <input class="valid" type="text" name="name" value="" size="30" maxlength="25">
                    </div>
                    <div class="form-item form-type-textarea form-item-message">                      
                        <label class="required" for="contact_message"><strong>Comment:</strong></label>
                        <textarea rows="6" cols="30" name="message" maxlength="200"></textarea>
                    </div>                            
                     
                                            <p class="contact-button clearfix">                    
                                                <input type="submit" name="post" value="Add Comment">
                                            </p>
                                            <div class="clear"></div>                       
                </form>
                <div id="response"></div>
                <div class="comment-box">
                <?php
                $name = $_POST["name"];
                $text = $_POST["message"];
                $date = date('h:i:s, Y');
                $post = $_POST["post"];
                if($post) {
                    #WRITE DOWN COMMENTS#
                    $write = fopen("com.txt", "a+");
                    fwrite($write, "<h3><b><img src='images/default-user-image.png' alt='comment image' style='width:50px; height: 50px; padding-right: 15px;'>$name</b><b style='float: right; font-size: 15px; padding-top: 35px;'>$date</b></h3>$text<br>");
                    fclose($write);

                    #DISPLAY COMMENTS#
                    $read = fopen("com.txt", "r+t");
                    echo "<h3>All Comments:</h3><hr>";
                    while(!feof($read)) {
                    echo fread($read, 1024);
                }
                    fclose($read);
                }
                else {
                    #DISPLAY COMMENTS#
                    $read = fopen("com.txt", "r+t");
                    echo "All Comments:<br>";
                    while(!feof($read)) {
                    echo fread($read, 1024);
                }
                fclose($read);
                }
                ?>
            </div>
        </div><!--contact-box-->
    </div>
    <div class="wp-area">
    <div class="date-area"><span><img src="images/12-jul.png" alt="4th November"></span><span class="date-head">SAP HANA</span></div>
    <p>High-Performance Analytic Appliance (HANA) is an application that uses in-memory database technology combining transactional and analytical data processing with application logic processing. It helps in processing high volume of data in real-time.</p>
    <p>To learn more about the benefits of SAP HANA download</p>
    <p><span class="download-wp"><a href="http://www.saphana.com/docs/DOC-1381">Download Whitepaper</a></span></p>
    </div>
    <div class="wp-area">
    <div class="date-area"><span><img src="images/10-apr.png" alt="4th November"></span><span class="date-head">Bring Your Own Device (BYOD) Unleashed in the Age of IT Consumerization (White Paper)</span></div>
    <p>Today, employees bring their mobile devices and use them to access privileged company information and applications. It becomes difficult for IT department to understand what device is accessing their network.</p>
    <p>For more info download this whitepaper</p>
    <p><span class="download-wp"><a href="http://resources.idgenterprise.com/original/AST-0055442_BradfordWP0103_2_.pdf">Download Whitepaper</a></span></p>
    </div>
    <div class="wp-area">
    <div class="date-area"><span><img src="images/9th-july.png" alt="4th November"></span><span class="date-head">SAP Management with LVM &amp; VMware on IBM PureSystems</span></div>
    <p>IBM PureSystems can help clients to manage the complexity of SAP landscape, and to reduce application workloads.</p>
    <p>SAP NetWeaver Landscape Virtualization Management provides Virtualization, Storage, and Management/Orchestration (“External Interfaces”) to SAP partner technologies.</p>
    <p>For more download whitepaper</p> 
    <p><span class="download-wp"><a href="http://www-03.ibm.com/support/techdocs/atsmastr.nsf/fe582a1e48331b5585256de50062ae1c/cfa66a29871a2e6c86257a410060dc67/$FILE/Virtualization%20for%20SAP%20on%20IBM%20PureSystems%20with%20Microsoft%20Hyper-V.pdf">Download Whitepaper</a></span></p>
    </div>
    <div class="wp-area">
    <div class="date-area"><span><img src="images/16-apr.png" alt="4th November"></span><span class="date-head">The 7 Keys to Mobile CRM Success</span></div>
    <p>Big enterprises using mobile solution for customer relation management. Mobile CRM helps improving the data quality, saves time and boost productivity.</p>
    <p>To learn more about mobile CRM  and to get started visit </p>
    <p><span class="download-wp"><a href="http://www.salesforce.com/assets/pdf/datasheets/SalesforceMobile_Datasheet.pdf">Download Whitepaper</a></span></p>
    </div>
  </div>
  <?php include'footer1.php'; ?>