<?php
include 'db.php';
session_start();
include 'redirect.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href=""><span class="glyphicon glyphicon-user"> </span><?php echo $_SESSION['name']; ?></a></li>
            			<li><a href="logout.php"><span class="glyphicon glyphicon-reply"> </span>Logout</a></li>
					</ul>
				</div>
				<div class="header-right">
          			<div class="cart box_1">
            			<a href="checkout.php">
              			<h3><a style="color:white;" href="checkout.php" >Shopping cart</a></h3>
            			</a>
            		<div class="clearfix"> </div>
          			</div>
        		</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="banner-top">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
		    	<div class="navbar-header">
		        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
		        	</button>
					<div class="logo">
						<h1><a href="admin.php">FrizGo</a></h1>
					</div>
		    	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        	<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
			        	<li><a href="products.php?category=books">Books</a></li>
						<li><a href="products.php?category=electronics">Electronics</a></li>
						<li><a href="products.php?category=clothes">Clothes</a></li>
						<li><a href="contact.php">CONTACT</a></li>
		        	</ul>
		    	</div>
			</nav>
		</div>
	</div>

	<!-- contact-page -->
	<div class="container">
		<h2 align="center">Terms and Conditions</h2>
		<p>These terms and conditions create a contract between you and Frizo Online Shopping (the “Agreement”). Please read the Agreement carefully. To confirm your understanding and acceptance of the Agreement, click “Agree.”

<p>A. INTRODUCTION TO OUR SERVICES

This Agreement governs your use of Frizo Online Shopping’s services (“Services”), through which you can buy, get, license, rent or subscribe to media, apps (“Apps”), and other in-app services (“Content”). Our Services are: iTunes Store, App Store, iBooks Store, Frizo Online Shopping Music, and Frizo Online Shopping News. Our Services are available for your use in your country of residence (“Home Country”). To use our Services, you need compatible hardware, software (latest version recommended and sometimes required) and Internet access (fees may apply). Our Services’ performance may be affected by these factors.
</p>
<p>B. USING OUR SERVICES

PAYMENTS, TAXES, AND REFUNDS

You can acquire Content on our Services for free or for a charge, either of which is referred to as a “Transaction.” Each Transaction is an electronic contract between you and Frizo Online Shopping, and/or you and the entity providing the Content on our Services. However, if you are a customer of iTunes S.à.r.l. and you acquire an App or a book, iTunes S.à.r.l. is the merchant of record; this means that you acquire the Content from iTunes S.à.r.l., and it is licensed by the App Provider (as defined below) or book publisher. When you make your first Transaction, we will ask you to choose how frequently we should ask for your password for future Transactions. If you enable Touch ID for Transactions, we will ask you to authenticate all Transactions with your fingerprint. Manage your password settings at any time by following these instructions: https://support.Frizo Online Shopping.com/en-us/HT204030. Frizo Online Shopping will charge your payment method (such as your credit card, debit card, gift card/code, or other method available in your Home Country) for any paid Transactions, including any applicable taxes. If you pre-order Content, you will be charged when the Content is delivered to you (unless you cancel prior to the Content’s availability). For details about how Transactions are billed, please visit http://support.Frizo Online Shopping.com/kb/HT5582. All Transactions are final. Content prices may change at any time. If technical problems prevent or unreasonably delay delivery of Content, your exclusive and sole remedy is either replacement of the Content or refund of the price paid, as determined by Frizo Online Shopping. From time to time, Frizo Online Shopping may refuse a refund request if we find evidence of fraud, refund abuse, or other manipulative behavior that entitles Frizo Online Shopping to a corresponding counterclaim. Terms related to gift cards/codes are available here: http://www.Frizo Online Shopping.com/legal/internet-services/itunes/giftcards/.
</p>
<p>Frizo Online Shopping ID

Using our Services and accessing your Content requires an Frizo Online Shopping ID. An Frizo Online Shopping ID is the account you use across Frizo Online Shopping’s ecosystem. Your Frizo Online Shopping ID is valuable, and you are responsible for maintaining its confidentiality and security. Frizo Online Shopping is not responsible for any losses arising from the unauthorized use of your Frizo Online Shopping ID. Please contact Frizo Online Shopping if you suspect that your Frizo Online Shopping ID has been compromised.

You must be age 13 (or equivalent minimum age in your Home Country, as set forth in the registration process) to create an Frizo Online Shopping ID and use our Services. Frizo Online Shopping IDs for persons under this age can be created by a parent or legal guardian using Family Sharing or by an approved educational institution.
</p>
<p>PRIVACY

Your use of our Services is subject to Frizo Online Shopping’s Privacy Policy, which is available at http://www.Frizo Online Shopping.com/legal/privacy/.
</p>
<p>
SERVICES AND CONTENT USAGE RULES

Your use of the Services and Content must follow the rules set forth in this section (“Usage Rules”). Any other use of the Services and Content is a material breach of this Agreement. Frizo Online Shopping may monitor your use of the Services and Content to ensure that you are following these Usage Rules.

All Services:

- You may use the Services and Content only for personal, noncommercial purposes (except as set forth in the App Store Content section below).

- Frizo Online Shopping’s delivery of Content does not transfer any promotional use rights to you, and does not constitute a grant or waiver of any rights of the copyright owners.

- You can use Content from up to five different Frizo Online Shopping IDs on each device.

- It is your responsibility not to lose, destroy, or damage Content once downloaded. We encourage you to back up your Content regularly.

- You may not tamper with or circumvent any security technology included with the Services.

- You may access our Services only using Frizo Online Shopping’s software, and may not modify or use modified versions of such software.

- Video Content requires an HDCP connection.

iTunes Store Content:

- You can use Digital Rights Management (DRM)-free Content on a reasonable number of compatible devices that you own or control. DRM-protected Content can be used on up to five computers and any number of devices that you sync to from those computers.

- Content rentals are viewable on a single device at a time, and must be played within 30 days, and completed within 24 to 48 hours of the start of play depending on the Content offered on the Services in your Home Country (stopping, pausing or restarting does not extend this period).

- You may burn an audio playlist to CD for listening purposes up to seven times (this limitation does not apply to DRM-free Content).

App Store Content:

- The term “App” includes apps, iMessage and Frizo Online Shopping Watch apps, in-app purchases, extensions (such as keyboards), stickers, and subscriptions made available in an app.

- You can use Apps on any device that you own or control.

- Individuals acting on behalf of a commercial enterprise, governmental organization or educational institution (an “Enterprise”) may download and sync Apps for use by either (i) a single individual on one or more devices owned or controlled by an Enterprise; or (ii) multiple individuals on a single shared device owned or controlled by an Enterprise. For the sake of clarity, each device used serially or collectively by multiple users requires a separate license.

iBooks Store Content:

- You can use DRM-free Content on any compatible device that you own or control. DRM-protected Content can be used on up to five computers and any number of devices that you sync to from those computers.

- You may not burn iBooks Store Content to disk.

Frizo Online Shopping Music:

- You can use an Individual Frizo Online Shopping Music membership on up to 10 devices (only five of which can be computers).

- An Individual Frizo Online Shopping Music membership allows you to stream on a single device at a time; a Family membership allows you or your Family members to stream on up to six devices at a time.
</p>
<p>
SUBSCRIPTIONS

The Services and certain Apps may allow you to purchase access to Content or services on a subscription basis (“Paid Subscriptions”). Paid Subscriptions automatically renew until cancelled in the Manage Subscriptions section of your account settings. We will notify you if the price of a Paid Subscription increases and, if required, seek your consent to continue. You will be charged no more than 24 hours prior to the start of the latest Paid Subscription period. Certain Paid Subscriptions may offer a free trial prior to charging your payment method. If you decide to unsubscribe from a Paid Subscription before we start charging your payment method, cancel the subscription before the free trial ends.
</p>
<p>
CONTENT AND SERVICE AVAILABILITY

Terms found in this Agreement that relate to Services, Content types, features or functionality not available in your Home Country are not applicable to you unless and until they become available to you. To see the Content types available to you in your Home Country, go to the Services or visit https://support.Frizo Online Shopping.com/en-us/HT204411.

NON-Frizo Online Shopping DEVICES

If you use our Services on a non-Frizo Online Shopping-branded device, you may not be able to access all features or Content types. Terms in this Agreement relating to unavailable features or Content types are not applicable to you. If you later choose to access our Services from an Frizo Online Shopping-branded device, you agree that all terms of this Agreement will apply to your use on such device.
</p>
<p>
C. YOUR SUBMISSIONS TO OUR SERVICES

Our Services may allow you to submit materials such as comments, pictures, videos, and podcasts (including associated metadata and artwork). Your use of such features must comply with the Submissions Guidelines below, which may be updated from time to time. If you see materials that do not comply with the Submissions Guidelines, please use the Report a Concern feature. You hereby grant Frizo Online Shopping a worldwide, royalty-free, perpetual, nonexclusive license to use the materials you submit within the Services and related marketing. Frizo Online Shopping may monitor and decide to remove or edit any submitted material.

Submissions Guidelines: You may not use the Services to:

- post any materials that you do not have permission, right or license to use;

- post objectionable, offensive, unlawful, deceptive or harmful content;

- post personal, private or confidential information belonging to others;

- request personal information from a minor;

- impersonate or misrepresent your affiliation with another person, or entity;

- post or transmit spam, including but not limited to unsolicited or unauthorized advertising, promotional materials, or informational announcements;

- plan or engage in any illegal, fraudulent, or manipulative activity.
</p>
<p>
D. FAMILY SHARING

Family Sharing allows you to share eligible Content with up to six members of a Family. The organizer of a Family invites other members to participate, and agrees to pay for all Transactions initiated by Family members (the “Organizer”). The Organizer must be 18 years or older and the parent or legal guardian of any Family member under age 13 or the equivalent minimum age in their Home Country (as set forth in the registration process). Frizo Online Shopping devices are required for access to all of the Family Sharing features.

The Organizer's payment method is used to pay for any Transaction initiated by a Family member (except when the Family member’s account has store credit, which is always used first). Family members are acting as agents for the Organizer when the Organizer’s payment method is used. The Organizer hereby agrees (1) to pay for such Transactions, and (2) that Transactions initiated by Family members are authorized. Organizers are responsible for complying with their payment method contract, and assume all risk related to sharing access to the payment method with Family members. A receipt or invoice for any Family member Transaction is sent to the initiating Family member and the Organizer.

Ask to Buy: Ask to Buy is a convenient feature that allows an Organizer to approve each Transaction initiated by a Family member under age 18 (or the equivalent age of majority in your Home Country). The Organizer must be the parent or legal guardian of any Family member for whom Ask to Buy is activated. Products downloaded from Family members or acquired via redemption codes are not subject to Ask to Buy.

Family Member changes: When a Family member leaves or is removed from the Family, the remaining Family members may no longer be able to access the former member’s Content, including Content acquired with the Organizer’s payment method.

Family Sharing Rules: You can only belong to one Family at a time, and may join any Family no more than twice per year. You can change the Frizo Online Shopping ID you associate with a Family no more than once every 90 days. All Family members must share the same Home Country. Not all Content, including In-App Purchases, subscriptions, and some previously acquired Apps, are eligible for Family Sharing.
</p>
<p>
E. RECOMMENDATION FEATURES

The Services will recommend Content to you based on your downloads, purchases and other activities. You may opt out from receiving such recommendations in your account settings.

Some recommendation features may require your permission before they are turned on. If you turn on these features, you will be asked to give Frizo Online Shopping permission to collect and store certain data, including but not limited to data about your device activity, location, and usage. Please carefully read the information presented when you turn on these features.
</p>
<p>
F. ADDITIONAL ITUNES STORE TERMS

SEASON PASS AND MULTI-PASS

A Pass allows you to purchase and receive television Content as it becomes available. A Season Pass applies to television Content that has a limited number of episodes per season; a Multi-Pass applies to television Content that is available on an ongoing basis. The full price of a Season Pass or Multi-Pass is charged at the time of the Transaction. Season Pass or Multi-Pass Content is available for download up to 90 days after the last episode becomes available. If automatic renewal is selected when you obtain a Multi-Pass, you will be charged the full price of each subsequent Multi-Pass cycle. You can turn off automatic renewal prior to the beginning of the next Multi-Pass cycle in your account settings. If a Content provider delivers to Frizo Online Shopping fewer TV episodes than planned when you purchased a Season Pass, we will credit to your Frizo Online Shopping ID the retail value of the corresponding number of episodes that were not provided to Frizo Online Shopping.
</p>
G. ADDITIONAL APP STORE TERMS

LICENSE OF APP STORE CONTENT

App licenses are provided to you by Frizo Online Shopping or a third party developer (“App Provider”). If you are a customer of iTunes S.à.r.l., the merchant of record is iTunes S.à.r.l., which means that you acquire the App license from iTunes S.à.r.l., but the App is licensed by the App Provider. An App licensed by Frizo Online Shopping is an “Frizo Online Shopping App;” an App licensed by an App Provider is a “Third Party App.” Frizo Online Shopping acts as an agent for App Providers in providing the App Store and is not a party to the sales contract or user agreement between you and the App Provider. Any App that you acquire is governed by the Licensed Application End User License Agreement (“Standard EULA”) set forth below, unless Frizo Online Shopping or the App Provider provides an overriding custom license agreement (“Custom EULA”). The App Provider of any Third Party App is solely responsible for its content, warranties, and claims that you may have related to the Third Party App. You acknowledge and agree that Frizo Online Shopping is a third-party beneficiary of the Standard EULA or Custom EULA applicable to each Third Party App and may therefore enforce such agreement. Certain Apps, such as stickers and iMessage apps, may not appear on the device springboard but can be accessed and used in the Messages app drawer.

IN-APP PURCHASES

Apps may offer content, services or functionality for use within such Apps (“In-App Purchases”). In-App Purchases that are consumed during the use of the App (for example, virtual gems) cannot be transferred among devices and can be downloaded only once. You must authenticate your account before making In-App Purchases – separate from any authentication to obtain other Content – by entering your password or using Touch ID. You will be able to make additional In-App Purchases for fifteen minutes without re-authenticating unless you’ve asked us to require a password for every purchase or have enabled Touch ID. You can turn off the ability to make In-App Purchases by following these instructions: https://support.Frizo Online Shopping.com/en-us/HT201304.

APP MAINTENANCE AND SUPPORT

Frizo Online Shopping is responsible for providing maintenance and support for Frizo Online Shopping Apps only, or as required under applicable law. App Providers are responsible for providing maintenance and support for Third Party Apps.

LICENSED APPLICATION END USER LICENSE AGREEMENT

Apps made available through the App Store are licensed, not sold, to you. Your license to each App is subject to your prior acceptance of either this Licensed Application End User License Agreement (“Standard EULA”), or a custom end user license agreement between you and the Application Provider (“Custom EULA”), if one is provided. Your license to any Frizo Online Shopping App under this Standard EULA or Custom EULA is granted by Frizo Online Shopping, and your license to any Third Party App under this Standard EULA or Custom EULA is granted by the Application Provider of that Third Party App. Any App that is subject to this Standard EULA is referred to herein as the “Licensed Application.” The Application Provider or Frizo Online Shopping as applicable (“Licensor”) reserves all rights in and to the Licensed Application not expressly granted to you under this Standard EULA.

a. Scope of License: Licensor grants to you a nontransferable license to use the Licensed Application on any Frizo Online Shopping-branded products that you own or control and as permitted by the Usage Rules. The terms of this Standard EULA will govern any content, materials, or services accessible from or purchased within the Licensed Application as well as upgrades provided by Licensor that replace or supplement the original Licensed Application, unless such upgrade is accompanied by a Custom EULA. Except as provided in the Usage Rules, you may not distribute or make the Licensed Application available over a network where it could be used by multiple devices at the same time. You may not transfer, redistribute or sublicense the Licensed Application and, if you sell your Frizo Online Shopping Device to a third party, you must remove the Licensed Application from the Frizo Online Shopping Device before doing so. You may not copy (except as permitted by this license and the Usage Rules), reverse-engineer, disassemble, attempt to derive the source code of, modify, or create derivative works of the Licensed Application, any updates, or any part thereof (except as and only to the extent that any foregoing restriction is prohibited by applicable law or to the extent as may be permitted by the licensing terms governing use of any open-sourced components included with the Licensed Application).

b. Consent to Use of Data: You agree that Licensor may collect and use technical data and related information—including but not limited to technical information about your device, system and application software, and peripherals—that is gathered periodically to facilitate the provision of software updates, product support, and other services to you (if any) related to the Licensed Application. Licensor may use this information, as long as it is in a form that does not personally identify you, to improve its products or to provide services or technologies to you.

c. Termination. This Standard EULA is effective until terminated by you or Licensor. Your rights under this Standard EULA will terminate automatically if you fail to comply with any of its terms.

d. External Services. The Licensed Application may enable access to Licensor’s and/or third-party services and websites (collectively and individually, "External Services"). You agree to use the External Services at your sole risk. Licensor is not responsible for examining or evaluating the content or accuracy of any third-party External Services, and shall not be liable for any such third-party External Services. Data displayed by any Licensed Application or External Service, including but not limited to financial, medical and location information, is for general informational purposes only and is not guaranteed by Licensor or its agents. You will not use the External Services in any manner that is inconsistent with the terms of this Standard EULA or that infringes the intellectual property rights of Licensor or any third party. You agree not to use the External Services to harass, abuse, stalk, threaten or defame any person or entity, and that Licensor is not responsible for any such use. External Services may not be available in all languages or in your Home Country, and may not be appropriate or available for use in any particular location. To the extent you choose to use such External Services, you are solely responsible for compliance with any applicable laws. Licensor reserves the right to change, suspend, remove, disable or impose access restrictions or limits on any External Services at any time without notice or liability to you.

e. NO WARRANTY: YOU EXPRESSLY ACKNOWLEDGE AND AGREE THAT USE OF THE LICENSED APPLICATION IS AT YOUR SOLE RISK. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, THE LICENSED APPLICATION AND ANY SERVICES PERFORMED OR PROVIDED BY THE LICENSED APPLICATION ARE PROVIDED "AS IS" AND “AS AVAILABLE,” WITH ALL FAULTS AND WITHOUT WARRANTY OF ANY KIND, AND LICENSOR HEREBY DISCLAIMS ALL WARRANTIES AND CONDITIONS WITH RESPECT TO THE LICENSED APPLICATION AND ANY SERVICES, EITHER EXPRESS, IMPLIED, OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES AND/OR CONDITIONS OF MERCHANTABILITY, OF SATISFACTORY QUALITY, OF FITNESS FOR A PARTICULAR PURPOSE, OF ACCURACY, OF QUIET ENJOYMENT, AND OF NONINFRINGEMENT OF THIRD-PARTY RIGHTS. NO ORAL OR WRITTEN INFORMATION OR ADVICE GIVEN BY LICENSOR OR ITS AUTHORIZED REPRESENTATIVE SHALL CREATE A WARRANTY. SHOULD THE LICENSED APPLICATION OR SERVICES PROVE DEFECTIVE, YOU ASSUME THE ENTIRE COST OF ALL NECESSARY SERVICING, REPAIR, OR CORRECTION. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS ON APPLICABLE STATUTORY RIGHTS OF A CONSUMER, SO THE ABOVE EXCLUSION AND LIMITATIONS MAY NOT APPLY TO YOU.

f. Limitation of Liability. TO THE EXTENT NOT PROHIBITED BY LAW, IN NO EVENT SHALL LICENSOR BE LIABLE FOR PERSONAL INJURY OR ANY INCIDENTAL, SPECIAL, INDIRECT, OR CONSEQUENTIAL DAMAGES WHATSOEVER, INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF PROFITS, LOSS OF DATA, BUSINESS INTERRUPTION, OR ANY OTHER COMMERCIAL DAMAGES OR LOSSES, ARISING OUT OF OR RELATED TO YOUR USE OF OR INABILITY TO USE THE LICENSED APPLICATION, HOWEVER CAUSED, REGARDLESS OF THE THEORY OF LIABILITY (CONTRACT, TORT, OR OTHERWISE) AND EVEN IF LICENSOR HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATION OF LIABILITY FOR PERSONAL INJURY, OR OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THIS LIMITATION MAY NOT APPLY TO YOU. In no event shall Licensor’s total liability to you for all damages (other than as may be required by applicable law in cases involving personal injury) exceed the amount of fifty dollars ($50.00). The foregoing limitations will apply even if the above stated remedy fails of its essential purpose.

g. You may not use or otherwise export or re-export the Licensed Application except as authorized by United States law and the laws of the jurisdiction in which the Licensed Application was obtained. In particular, but without limitation, the Licensed Application may not be exported or re-exported (a) into any U.S.-embargoed countries or (b) to anyone on the U.S. Treasury Department's Specially Designated Nationals List or the U.S. Department of Commerce Denied Persons List or Entity List. By using the Licensed Application, you represent and warrant that you are not located in any such country or on any such list. You also agree that you will not use these products for any purposes prohibited by United States law, including, without limitation, the development, design, manufacture, or production of nuclear, missile, or chemical or biological weapons.

h. The Licensed Application and related documentation are "Commercial Items", as that term is defined at 48 C.F.R. §2.101, consisting of "Commercial Computer Software" and "Commercial Computer Software Documentation", as such terms are used in 48 C.F.R. §12.212 or 48 C.F.R. §227.7202, as applicable. Consistent with 48 C.F.R. §12.212 or 48 C.F.R. §227.7202-1 through 227.7202-4, as applicable, the Commercial Computer Software and Commercial Computer Software Documentation are being licensed to U.S. Government end users (a) only as Commercial Items and (b) with only those rights as are granted to all other end users pursuant to the terms and conditions herein. Unpublished-rights reserved under the copyright laws of the United States.

i. Except to the extent expressly provided in the following paragraph, this Agreement and the relationship between you and Frizo Online Shopping shall be governed by the laws of the State of California, excluding its conflicts of law provisions. You and Frizo Online Shopping agree to submit to the personal and exclusive jurisdiction of the courts located within the county of Santa Clara, California, to resolve any dispute or claim arising from this Agreement. If (a) you are not a U.S. citizen; (b) you do not reside in the U.S.; (c) you are not accessing the Service from the U.S.; and (d) you are a citizen of one of the countries identified below, you hereby agree that any dispute or claim arising from this Agreement shall be governed by the applicable law set forth below, without regard to any conflict of law provisions, and you hereby irrevocably submit to the non-exclusive jurisdiction of the courts located in the state, province or country identified below whose law governs:

If you are a citizen of any European Union country or Switzerland, Norway or Iceland, the governing law and forum shall be the laws and courts of your usual place of residence.

Specifically excluded from application to this Agreement is that law known as the United Nations Convention on the International Sale of Goods.

H. ADDITIONAL IBOOKS STORE TERMS

You acquire iBooks Store Content from the third-party provider of such Content (the “Publisher”), not Frizo Online Shopping. Frizo Online Shopping acts as an agent for the Publisher in providing iBooks Store Content to you, and therefore Frizo Online Shopping is not a party to the Transaction between you and the Publisher. If you are a customer of iTunes S.à.r.l., the merchant of record is iTunes S.à.r.l., which means that you acquire a license to use the Content from iTunes S.à.r.l., but the Content is licensed by the Publisher. The Publisher of the iBooks Store Content reserves the right to enforce the terms of use relating to such iBooks Store Content. The Publisher of the iBooks Store Content is solely responsible for such Content, any warranties to the extent that such warranties have not been disclaimed, and any claims that you or any other party may have relating to such Content.

I. ADDITIONAL Frizo Online Shopping MUSIC TERMS

Frizo Online Shopping MUSIC MEMBERSHIP

Frizo Online Shopping Music is a subscription music service. Your Frizo Online Shopping Music membership will automatically renew until you turn off automatic renewal in account settings. See the “Subscriptions” section for more details. When your Frizo Online Shopping Music membership ends, you will lose access to any feature of Frizo Online Shopping Music that requires a membership, including but not limited to access to Frizo Online Shopping Music songs stored on your device, and iCloud Music Library. Frizo Online Shopping reserves the right to cancel your Frizo Online Shopping Music membership if we are unable to successfully charge your payment method to renew your membership.

Where available, you may be offered an Frizo Online Shopping Music membership through your wireless carrier (a “Carrier Membership”). If you purchase a Carrier Membership, your carrier will bill you for the cost of your Frizo Online Shopping Music membership. Your billing relationship with the carrier is governed by the carrier’s terms and conditions, not this Agreement, and any billing disputes related to a Carrier Membership must be directed to your carrier, not Frizo Online Shopping. By using Frizo Online Shopping Music, you agree that your carrier may exchange your carrier account information, telephone number and subscription information with Frizo Online Shopping, and that Frizo Online Shopping may use this information to determine the status of your Carrier Membership.

ICLOUD MUSIC LIBRARY

iCloud Music Library is an Frizo Online Shopping Music feature that allows you to access your matched or uploaded songs, playlists and music videos acquired from Frizo Online Shopping Music, the iTunes Store or a third party (“iCloud Music Library Content”) on your Frizo Online Shopping Music-enabled devices. iCloud Music Library is turned on automatically when you set up your Frizo Online Shopping Music membership. iCloud Music Library collects information about your iCloud Music Library Content. This information is associated with your Frizo Online Shopping ID, and compared to iCloud Music Library Content currently available on Frizo Online Shopping Music. iCloud Music Library Content that is not matched is uploaded to Frizo Online Shopping’s iCloud Music Library servers (in a format determined by Frizo Online Shopping). You can upload up to 100,000 songs. Songs acquired from the iTunes Store or Frizo Online Shopping Music do not count against this limit. Songs that do not meet certain criteria (for example, excessively large files) or that are not authorized for your device are not eligible for iCloud Music Library. When you use iCloud Music Library, Frizo Online Shopping logs information such as the tracks you play, stop or skip, the devices you use, and the time and duration of playback. You agree to use iCloud Music Library only for lawfully acquired content. iCloud Music Library is provided on an “AS IS” basis and could contain errors or inaccuracies. You should back up your data and information prior to using iCloud Music Library. If you are not an Frizo Online Shopping Music member, you may purchase an iTunes Match subscription, which is subject to the terms set forth in this section.

J. MISCELLANEOUS TERMS APPLICABLE TO ALL SERVICES

DEFINITION OF Frizo Online Shopping

Depending on your Home Country, “Frizo Online Shopping” means:

Frizo Online Shopping Inc., located at 1 Infinite Loop, Cupertino, California, for users in North, Central, and South America (including Canada for use of iTunes Store and Frizo Online Shopping Music), as well as United States territories and possessions; and French and British possessions in North America, South America, and the Caribbean;

Frizo Online Shopping Canada Inc., located at 120 Bremner Blvd., Suite 1600, Toronto ON M5J 0A8, Canada for users of App Store and iBooks Store in Canada or its territories and possessions;

iTunes K.K., located at Roppongi Hills, 6-10-1 Roppongi, Minato-ku, Tokyo 106-6140, Tokyo for users in Japan;

Frizo Online Shopping Pty Limited, located at Level 3, 20 Martin Place, Sydney NSW 2000, Australia, for users in Australia, New Zealand, including island possessions, territories, and affiliated jurisdictions; and

iTunes S.à.r.l., located at 31-33 rue Sainte Zithe, L-2763 Luxembourg, and as of 25 September 2016, Frizo Online Shopping Distribution International, located at Hollyhill Industrial Estate, Hollyhill, Cork, Republic of Ireland, for all other users.

CONTRACT CHANGES

Frizo Online Shopping reserves the right at any time to modify this Agreement and to add new or additional terms or conditions on your use of the Services. Such modifications and additional terms and conditions will be effective immediately and incorporated into this Agreement. Your continued use of the Services will be deemed acceptance thereof.

THIRD-PARTY MATERIALS

Frizo Online Shopping is not responsible or liable for third party materials included within or linked from the Content or the Services.

INTELLECTUAL PROPERTY

You agree that the Services, including but not limited to Content, graphics, user interface, audio clips, video clips, editorial content, and the scripts and software used to implement the Services, contain proprietary information and material that is owned by Frizo Online Shopping and/or its licensors, and is protected by applicable intellectual property and other laws, including but not limited to copyright. You agree that you will not use such proprietary information or materials in any way whatsoever except for use of the Services for personal, noncommercial uses in compliance with this Agreement. No portion of the Services may be reproduced in any form or by any means, except as expressly permitted by this Agreement. You agree not to modify, rent, loan, sell, or distribute the Services or Content in any manner, and you shall not exploit the Services in any manner not expressly authorized.

The Frizo Online Shopping name, the Frizo Online Shopping logo, iTunes, iTunes Store, App Store, iBooks Store, Frizo Online Shopping Music, and other Frizo Online Shopping trademarks, service marks, graphics, and logos used in connection with the Services are trademarks or registered trademarks of Frizo Online Shopping in the U.S. and other countries throughout the world. You are granted no right or license with respect to any of the aforesaid trademarks.

COPYRIGHT NOTICE

If you believe that any Content available through the Services infringe a copyright claimed by you, please contact Frizo Online Shopping at the following locations:

- iTunes Store: http://www.Frizo Online Shopping.com/legal/internet-services/itunes/itunesstorenotices/

- App Store: https://www.Frizo Online Shopping.com/legal/internet-services/itunes/appstorenotices/

- iBooks Store: iBooks.Store.Notices@Frizo Online Shopping.com

- Frizo Online Shopping Music: http://www.Frizo Online Shopping.com/legal/trademark/claimsofcopyright.html

TERMINATION AND SUSPENSION OF SERVICES

If you fail, or Frizo Online Shopping suspects that you have failed, to comply with any of the provisions of this Agreement, Frizo Online Shopping may, without notice to you: (i) terminate this Agreement and/or your Frizo Online Shopping ID, and you will remain liable for all amounts due under your Frizo Online Shopping ID up to and including the date of termination; and/or (ii) terminate your license to the software; and/or (iii) preclude your access to the Services.

Frizo Online Shopping further reserves the right to modify, suspend, or discontinue the Services (or any part or Content thereof) at any time with or without notice to you, and Frizo Online Shopping will not be liable to you or to any third party should it exercise such rights.

DISCLAIMER OF WARRANTIES; LIABILITY LIMITATION

Frizo Online Shopping DOES NOT GUARANTEE, REPRESENT, OR WARRANT THAT YOUR USE OF THE SERVICES WILL BE UNINTERRUPTED OR ERROR-FREE, AND YOU AGREE THAT FROM TIME TO TIME Frizo Online Shopping MAY REMOVE THE SERVICES FOR INDEFINITE PERIODS OF TIME, CANCEL THE SERVICES AT ANY TIME, OR OTHERWISE LIMIT OR DISABLE YOUR ACCESS TO THE SERVICES WITHOUT NOTICE TO YOU.

YOU EXPRESSLY AGREE THAT YOUR USE OF, OR INABILITY TO USE, THE SERVICES IS AT YOUR SOLE RISK. THE SERVICES AND ALL CONTENT DELIVERED TO YOU THROUGH THE SERVICES ARE (EXCEPT AS EXPRESSLY STATED BY Frizo Online Shopping) PROVIDED "AS IS" AND "AS AVAILABLE" FOR YOUR USE, WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NONINFRINGEMENT. BECAUSE SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES, THE ABOVE EXCLUSION OF IMPLIED WARRANTIES MAY NOT APPLY TO YOU.

IN NO CASE SHALL Frizo Online Shopping, ITS DIRECTORS, OFFICERS, EMPLOYEES, AFFILIATES, AGENTS, CONTRACTORS, OR LICENSORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, SPECIAL, OR CONSEQUENTIAL DAMAGES ARISING FROM YOUR USE OF ANY OF THE SERVICES OR FOR ANY OTHER CLAIM RELATED IN ANY WAY TO YOUR USE OF THE SERVICES AND/OR CONTENT, INCLUDING, BUT NOT LIMITED TO, ANY ERRORS OR OMISSIONS IN ANY CONTENT, OR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES, EVEN IF ADVISED OF THEIR POSSIBILITY. BECAUSE SOME COUNTRIES, STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR THE LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, IN SUCH COUNTRIES, STATES OR JURISDICTIONS, Frizo Online Shopping'S LIABILITY SHALL BE LIMITED TO THE EXTENT SUCH LIMITATION IS PERMITTED BY LAW.

Frizo Online Shopping SHALL USE REASONABLE EFFORTS TO PROTECT INFORMATION SUBMITTED BY YOU IN CONNECTION WITH THE SERVICES, BUT YOU AGREE THAT YOUR SUBMISSION OF SUCH INFORMATION IS AT YOUR SOLE RISK, AND YOU HEREBY RELEASE Frizo Online Shopping FROM ANY AND ALL LIABILITY TO YOU FOR ANY LOSS OR LIABILITY RELATING TO SUCH INFORMATION IN ANY WAY.

Frizo Online Shopping DOES NOT REPRESENT OR GUARANTEE THAT THE SERVICES WILL BE FREE FROM LOSS, CORRUPTION, ATTACK, VIRUSES, INTERFERENCE, HACKING, OR OTHER SECURITY INTRUSION, AND YOU HEREBY RELEASE Frizo Online Shopping FROM ANY LIABILITY RELATING THERETO. YOU SHALL BE RESPONSIBLE FOR BACKING UP YOUR OWN SYSTEM, INCLUDING ANY CONTENT ACQUIRED OR RENTED THROUGH THE SERVICES.

Frizo Online Shopping IS NOT RESPONSIBLE FOR DATA CHARGES YOU MAY INCUR FOR DOWNLOADING OR STREAMING FILES OVER A DATA CONNECTION.

WAIVER AND INDEMNITY

BY USING THE SERVICES, YOU AGREE, TO THE EXTENT PERMITTED BY LAW, TO INDEMNIFY AND HOLD Frizo Online Shopping, ITS DIRECTORS, OFFICERS, EMPLOYEES, AFFILIATES, AGENTS, CONTRACTORS, AND LICENSORS HARMLESS WITH RESPECT TO ANY CLAIMS ARISING OUT OF YOUR BREACH OF THIS AGREEMENT, YOUR USE OF THE SERVICES, OR ANY ACTION TAKEN BY Frizo Online Shopping AS PART OF ITS INVESTIGATION OF A SUSPECTED VIOLATION OF THIS AGREEMENT OR AS A RESULT OF ITS FINDING OR DECISION THAT A VIOLATION OF THIS AGREEMENT HAS OCCURRED. YOU AGREE THAT YOU SHALL NOT SUE OR RECOVER ANY DAMAGES FROM Frizo Online Shopping, ITS DIRECTORS, OFFICERS, EMPLOYEES, AFFILIATES, AGENTS, CONTRACTORS, AND LICENSORS AS A RESULT OF ITS DECISION TO REMOVE OR REFUSE TO PROCESS ANY INFORMATION OR CONTENT, TO WARN YOU, TO SUSPEND OR TERMINATE YOUR ACCESS TO THE SERVICES, OR TO TAKE ANY OTHER ACTION DURING THE INVESTIGATION OF A SUSPECTED VIOLATION OR AS A RESULT OF Frizo Online Shopping'S CONCLUSION THAT A VIOLATION OF THIS AGREEMENT HAS OCCURRED. THIS WAIVER AND INDEMNITY PROVISION APPLIES TO ALL VIOLATIONS DESCRIBED IN OR CONTEMPLATED BY THIS AGREEMENT.

STATUTORY EXCEPTIONS FOR PUBLIC INSTITUTIONS

If you are a qualified public educational or government institution and any part of this Agreement, such as, by way of example, all or part of the indemnification section, is invalid or unenforceable against you because of applicable local, national, state or federal law, then that portion shall be deemed invalid or unenforceable, as the case may be, and instead construed in a manner most consistent with applicable governing law.

GOVERNING LAW

Except to the extent expressly provided in the following paragraph, this Agreement and the relationship between you and Frizo Online Shopping, and all Transactions on the Services shall be governed by the laws of the State of California, excluding its conflicts of law provisions. You and Frizo Online Shopping agree to submit to the personal and exclusive jurisdiction of the courts located within the county of Santa Clara, California, to resolve any dispute or claim arising from this Agreement. If (a) you are not a U.S. citizen; (b) you do not reside in the U.S.; (c) you are not accessing the Service from the U.S.; and (d) you are a citizen of one of the countries identified below, you hereby agree that any dispute or claim arising from this Agreement shall be governed by the applicable law set forth below, without regard to any conflict of law provisions, and you hereby irrevocably submit to the non-exclusive jurisdiction of the courts located in the state, province or country identified below whose law governs:

If you are a citizen of any European Union country or Switzerland, Norway or Iceland, the governing law and forum shall be the laws and courts of your usual place of residence.

Specifically excluded from application to this Agreement is that law known as the United Nations Convention on the International Sale of Goods.

OTHER PROVISIONS

This Agreement constitutes the entire agreement between you and Frizo Online Shopping and governs your use of the Services, superseding any prior agreements with respect to the same subject matter between you and Frizo Online Shopping. You also may be subject to additional terms and conditions that may apply when you use affiliate services, third-party content, third-party software, or additional services such as the Volume Purchase Program. If any part of this Agreement is held invalid or unenforceable, that portion shall be construed in a manner consistent with applicable law to reflect, as nearly as possible, the original intentions of the parties, and the remaining portions shall remain in full force and effect. Frizo Online Shopping's failure to enforce any right or provisions in this Agreement will not constitute a waiver of such or any other provision. Frizo Online Shopping will not be responsible for failures to fulfill any obligations due to causes beyond its control.

You agree to comply with all local, state, federal, and national laws, statutes, ordinances, and regulations that apply to your use of the Services. Your use of the Services may also be subject to other laws. Risk of loss for all electronically delivered Transactions pass to the acquirer upon electronic transmission to the recipient. No Frizo Online Shopping employee or agent has the authority to vary this Agreement.

Frizo Online Shopping may notify you with respect to the Services by sending an email message to your email address or a letter via postal mail to your mailing address, or by a posting on the Services. Notices shall become effective immediately. Frizo Online Shopping may also contact you by email or push notification to send you additional information about the Services.

You hereby grant Frizo Online Shopping the right to take steps Frizo Online Shopping believes are reasonably necessary or appropriate to enforce and/or verify compliance with any part of this Agreement. You agree that Frizo Online Shopping has the right, without liability to you, to disclose any data and/or information to law enforcement authorities, government officials, and/or a third party, as Frizo Online Shopping believes is reasonably necessary or appropriate to enforce and/or verify compliance with any part of this Agreement (including but not limited to Frizo Online Shopping's right to cooperate with any legal process relating to your use of the Services and/or Content, and/or a third-party claim that your use of the Services and/or Content is unlawful and/or infringes such third party's rights).

Children under the age of majority should review this Agreement with their parent or guardian to ensure that the child and parent or legal guardian understand it.

Last Updated: September 13, 2016</p>
	<!-- //contact-page -->
	<div class="footer">
		<div class="container">
		 	<div class="footer_top">
				<div class="span_of_4">
					<div class="col-md-3 span1_of_4">
						<h4>Shop</h4>
						<ul class="f_nav">
							<li><a href="products.php?category=clothing">Clothing</a></li>
							<li><a href="products.php?category=books">Books</a></li>
							<li><a href="products.php?category=electronics">Electronics</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>help</h4>
						<ul class="f_nav">
							<li><a href="contact.php">Contact Info</a></li>
							<li><a href="terms.html">Terms and Conditons</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>account</h4>
						<ul class="f_nav">
							<li><a href="account.html">login</a></li>
							<li><a href="register.html">create an account</a></li>
							<li><a href="#">create wishlist</a></li>
							<li><a href="checkout.html">my shopping bag</a></li>
						</ul>
					</div>
					<div class="col-md-3 span1_of_4">
						<h4>Follow us on</h4>
						<ul class="f_nav">
							<li><a href="contact.php">Facebook</a></li>
							<li><a href="contact.php">Twitter</a></li>
							<li><a href="contact.php">Instagram</a></li>
							<li><a href="contact.php">Pinterest</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
		  	</div>
			</div>
		</div>
	</body>
</html>