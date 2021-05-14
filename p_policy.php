
<?php


session_start();

?>

<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<link rel="stylesheet" href="css/main.css">
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/bg1.jpg');">
	<div id="main">
	<?php	if(!isset($_SESSION["tmp"]))
{
	include "header_out.php";
}
else
{
include "header_in.php";
} ?>
		<div id="transbox"style="text-align:left;color:black;">
		<h1>Privacy Policy</h1><ul>
				<li>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. Our Privacy Policy for Online Labours Employment is managed through Free Privacy Policy.
</li><br><li>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions
</li></ul>
<b style="background:yellow;">Information Collection And Use</b><br><br>
We collect several different types of information for various purposes to provide and improve our Service to you.
<br><br>
<b style="background:lightgray;">&nbsp;Types of Data Collected&nbsp;</b><br><br>

<b>Personal Data</b><br>
While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (“Personal Data”). Personally identifiable information may include.
<br><br><b>Usage Data</b><br>
We may also collect information how the Service is accessed and used (“Usage Data”). This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
<br><br><b>Tracking & Cookies Data</b><br>
We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.
Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.
You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.
<br><br><b><u>Examples of Cookies we use:</b></u><br>
<br><br><u>Session Cookies.</u>: We use Session Cookies to operate our Service.
<br><br><u>Preference Cookies. </u>:We use Preference Cookies to remember your preferences and various settings.
<br><br><u>Security Cookies.</u>: We use Security Cookies for security purposes.


<br><br><b style="background:yellow;">Disclosure Of Data</b><br>
<br><br><b style="background:lightgray;">Legal Requirements</b><br><br>
OLE may disclose your Personal Data in the good faith belief that such action is necessary to:<br>
✓ To comply with a legal obligation<br>
✓ To protect and defend the rights or property of OLE<br>
✓ To prevent or investigate possible wrongdoing in connection with the Service<br>
✓ To protect the personal safety of users of the Service or the public<br>
✓ To protect against legal liability<br>

<br><br><b style="background:lightgray;">Security Of Data</b><br>
The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.
<br><br><b style="background:lightgray;">Service Providers</b><br>
We may employ third party companies and individuals to facilitate our Service (“Service Providers”), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.
These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.
<br><br><b style="background:lightgray;">Links To Other Sites</b><br>
Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.
We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.


<br><br><b style="background:yellow;">Changes To This Privacy Policy</b><br><br>

We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.
We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the “effective date” at the top of this Privacy Policy.
You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
<br><br>
<center><b>Contact Us</b></center><br>
If you have any questions about this Privacy Policy, please contact us:<br><br>

By email :  customer.care@ole.org.in<br><br>

		</div>
	<?php	include "footer.php"; ?>
	</div>
	
</body>
</html>