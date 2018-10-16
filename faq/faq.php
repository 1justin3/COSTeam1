<?php

include '../view/header.php';


?>



<!DOCTYPE html>
<html lang="en">

<body>
    <div class= "container faq">
        <h3><u>HOME PAGE</u></h3><br />
        <h6>The Home page is shown by default when you log-in. You can navigate back to this page at any time by selecting the UVU College of Science logo in the top left corner of the page. <br /><br />
            This page is used to search the inventory system using Inventory #, Employee Name or MAC Address. Simply enter data into a textbox and select the corresponding Search button to search the inventory system.</h6>
            <u>Inventory #</u> refers to the unique inventory number that all assets receive from the College of Science <b>Ex. D11223344</b><br />
            <u>Employee Name</u> refers to the Employee at UVU that has assets assigned to them <b>Ex. John Doe</b><br />
            <u>MAC Address</u> refers to the MAC address of an asset you want to search <b>Ex. 11:22:33AA:BB:CC</b><br /><br />
        <h3><u>ASSET PAGE</u></h3>
            <h6>The Asset page is used to add/update information about assets within the system.
                To make a change to a particular asset simply search for that asset, alter the contents of the particular field that you would like to have changed, and select the update asset button at the bottom of the page.</h6>
                <ul>
                    <li class="faqlist"><u>The Host Name:</u> The asset’s hostname <b>Ex. COS-L11223344</b></li> 
                    <li class="faqlist"><u>The Inventory Number:</u> The Number assigned by the university. <b>Ex. D11223344</b></li>
                    <li class="faqlist"><u>The AD Domain:</u> Will the asset will be on the domain or not</li>
                    <li class="faqlist"><u>The Inventory Date:</u> The date the asset is added to the Inventory</li>
                    <li class="faqlist"><u>The RAM (GB):</u> RAM in asset at time of inventory</li>
                    <li class="faqlist"><u>The Building:</u> Building where the asset’s owner resides</li>
                    <li class="faqlist"><u>The MAC Address:</u> MAC Address of asset</li>
                    <li class="faqlist"><u>The Room:</u> Room of end user</li>
                    <li class="faqlist"><u>The Additional MAC Address:</u> If the asset has an additional</li>
                    <li class="faqlist"><u>The Static IPv4 Address:</u> If the machine has a static IP address, that will go in this field</li>
                    <li class="faqlist"><u>The Usage:</u> Will this be the end user’s primary/secondary machine or a lab machine</li>
                    <li class="faqlist"><u>The Operating System:</u> Windows / Linux / Mac</li>
                    <li class="faqlist"><u>The Status:</u> Is the asset active, inactive, surplussed</li>
                    <li class="faqlist"><u>The Operating System Version:</u> What version of the OS is installed</li>
                    <li class="faqlist"><u>The Date Surplussed:</u> Date Hardware was surplussed</li>
                    <li class="faqlist"><u>The Additional OS VM:</u> If asset has virtual machines what OS is it</li>
                    <li class="faqlist"><u>The Notes:</u> Any notes on the asset should be placed here</li>
                    <li class="faqlist"><u>The Hardware Type:</u> Laptop, Desktop, Tablet or Printer</li>
                    <li class="faqlist"><u>The Manufacturer:</u> Manufacturer of asset</li>
                    <li class="faqlist"><u>The Model:</u> Asset model number</li>
                    <li class="faqlist"><u>The Serial:</u> Serial number of asset</li>
                    <li class="faqlist"><u>Hardware ID Replaced:</u> Refers to the ID of the asset that is being replaced by the new asset.<br />
                </ul>
        <h3><u>SOFTWARE PAGE</u></h3>
            <h6>The Software page is used to track software found on COS assets.</h6>
                <ul>
                    <li class="faqlist"><u>License Type:</u> License type of software. Ex. Concurrent, Single Seat, Open Source</li>
                    <li class="faqlist"><u>Software Name:</u> Name of Software</li>
                    <li class="faqlist"><u>Expiration Date:</u> Date licenses expire</li>
                    <li class="faqlist"><u>Manufacturer:</u> Software manufacturer</li>
                    <li class="faqlist"><u>License Server:</u> Name or IP address of server that handles licensing</li>
                    <li class="faqlist"><u>Licenses Available:</u> Number of unused licences available.</li>
                    <li class="faqlist"><u>License key:</u> License key for software</li>
                </ul>
        
    </div>
</body>

</html>
<?php 

include '../view/footer.php'

?>