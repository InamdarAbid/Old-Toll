<?php
session_start();
if($_SESSION["u_name"]==null)
    header("location:Sign_up.php");
require "connection.php";
?> 

<!DOCTYPE html>
<html>

    <head>
        <title>Toll Payment</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="styleIndex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="script.js"></script>
        <script src="jquery.flip.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <style type="text/css">
            p{
                margin:0 2%;                
            }
        </style>
    </head>
    <body>
    
        <div class=".container">

            <?php require 'header.php';?>
            <div class="nav_section" id="nav">
                <a class="nav" id="active" href="index.php">Home</a>
                <a class="nav" href="payment.php">Payment</a>
                <a class="nav" href="Calc.php">Calculate</a>
                <a class="nav" href="profile.php">Profile</a>
                <a class="nav" href="logout.php" id="logout">Logout</a>
            </div>

            <div>
             <strong style="font-size: 1.5em;">Terms and Conditions</strong><br><br><br> 
             <p align="justify">
             Terms and Conditions of Service:
Thank you for visiting the Transportation Corridor Agencies’ (“TCA”’s) website, TollPayment (the “Website”).  Use of the Website, its content and its services, including, but not limited to, any information, photographs, maps, audiovisual works and software, user account registration, one-time toll payments, toll violation resolution processes, project bidding, links to third party websites, links to third party downloadable software, third party promotions, and user requested e-mail notifications (collectively, the “Services”) is governed by these Terms and Conditions (the “Terms”).  By using the Website and the Services you agree to be bound by these Terms.

TCA may at any time revise these Terms without notice.  It is your responsibility to regularly review the Terms for any changes.  These Terms are available and accessible online on any page of the Website.  Continued use of the Website and/or Services following any change to the Terms will be deemed an acceptance of such modified Terms.  Any such changes, modifications or alterations to these Terms may affect your use of the Website and Services, all without any liability or responsibility of TCA.

Permitted Use:
The rights granted to you under these Terms are limited to accessing and displaying or otherwise making available the Website and Services.  The Website and Services are available as a resource for your personal, non-commercial use, and may not be used as a part of any advertisement, promotion or other commercial endeavor.  You shall not change, tamper, dismantle augment, misrepresent, modify, reproduce, redistribute, or frame any of the content contained on the Website, or received via the use of the Services, without the express, advanced, written consent of TCA and any relevant third party affiliates. You shall not use the Website and/or Services in any way that causes detriment to TCA or brings TCA into disrepute.  You agree that access to and use of the Website and Services is subject to these Terms, prohibiting unauthorized redistribution and publication and protection of TCA’s Intellectual Property rights, as further defined below.  You acknowledge TCA as the owner of the Website and provider of the Services, and in no event shall you claim ownership of the content received via your use of the Website and/or Services.  You shall not represent yourself as TCA or an agent or partner of TCA or make any representations, warranties or guarantees to third parties with respect to the Services.  You agree to comply with all applicable laws and regulatory requirements in relation to your receipt and use of the Website and Services.  You shall not have any rights to assign, transfer or convey this agreement to any third party.

Intellectual Property:
All content accessible via the Website and its Services, including all logos, maps, text, images, audio, video, feeds, databases and software, as well as the collection, arrangement, assembly and presentation of the Website’s pages, are the sole and exclusive property of TCA or its affiliated content suppliers and are protected by copyright laws.  You may not use the TCA logo, map or any other content from the Website or Services without express written permission in advance from TCA.

The TCA logo and the designations, THE TOLL ROADS®, FASTRAK®, FASTRAK FLEX<®, EXPRESSACCOUNT®, ONE-TIME-TOLL®, DRIVE LESS. LIVE MORE.®, STOP SITTING. GET MOVING.®, SAVES TIME. AND A WHOLE LOT MORE.®, are all live and subsisting federally registered trademarks of TCA (the “TCA Marks”).  The TCA Marks may not be used in connection with any product or service that is not TCA’s in any manner that is likely to cause confusion among customers, or in any manner that disparages or discredits TCA.  Other products, services or company names used on the Website may be trademarks of their respective owners.

You further acknowledge and agree that TCA, or its third party affiliates or content suppliers, own all right, title and interest in and to all Intellectual Property contained in and/or used via the Website and/or Services, including without limitation, any and all patents, know-how, trademarks, service marks, copyrights, rights in passing off, database rights, rights in commercial or technical information, or any other rights in any invention, discovery or process, as well as any other intellectual property rights, whether registered or unregistered, and including applications for the grant of any such rights and all rights or forms or protection having equivalent or similar effect in each case in the United States and anywhere else around the world.  You shall not acquire any right, title, or interest in or to the Website, the Services or any content contained or provided therein.

Software:
TCA makes certain software products (“Software”) available via the Website and/or the Services.  Although you are free to download and use the software, you may not reproduce or redistribute it.  The Software is subject to the specific Software License Agreement (“SLA”) that accompanies its distribution.  You should read and understand the SLA of any Software before downloading or using such Software.

Links To Other Websites:
Some links on the Website take you to other websites.  These other websites may not be under the control of TCA, and TCA is not responsible for their content.  TCA is providing these links as a convenience, and in doing so does not imply support or endorsement of any kind.

Customer Account:
You may sign up to create a Customer Account while accessing and using the TCA Website and Services. The Customer Account allows you access to use certain portions of the Services, including without limitation, FASTRAK® and EXPRESSACCOUNT® toll collection and payment services.  The Customer Account is subject to the User Account Agreement (“Account Agreement”). The Account Agreement is provided upon signing up for the Customer Account,  before you are able to access the relevant Services.  You should read and understand the Account Agreement before using any Customer Account features or services.

No Automated Queries:
You shall not send scripted, automated or otherwise programmed queries of any sort to the Website without express written permission in advance from TCA.
Warranty And Disclaimer: Although TCA makes every effort to ensure the information presented on the Website and via the use of the Services is truthful and accurate, the Website and its Services are provided on an “as is” and “with all faults” basis.  TCA makes no representations or warranties of any kind, express or implied, as to the operation, content, accuracy, sufficiency or completeness of this Website, the Services, or any other website to which TCA has provided a link.  To the fullest extent permitted by law, TCA disclaims all warranties, express or implied, including but not limited to implied warranties of merchantability and fitness for a particular purpose, which are hereby expressly waived.

TCA, its members, Directors, agents and employees, will not be liable for any loss or damages of any kind arising from the use of, or inability to use, the Website, the Services or any other website, content or services to which TCA has provided a link, including, but not limited to, direct, indirect, incidental, compensatory, punitive, special, consequential or exemplary damages, lost profits, lost sales or business, anticipated revenue, interest, expenditures, investments or commitments in connection with any business, loss of goodwill, loss of use, or other such claims arising from any causes whatsoever, irrespective of whether TCA had been informed of, knew of, or should have known of the likelihood of such damages, claims or losses.  This limitation applies to all causes of action in the aggregate, including, without limitation, breach of contract, breach of warranty, negligence, strict liability, misrepresentation and other torts.  You agree to bear the entire risk as to quality, accuracy or performance of the Website or Services.

You further expressly agree to indemnify and hold TCA and its members, employees, directors, officers, agents, assigns and/or affiliates harmless from and against any and all liability and expenses, including reasonable defense costs and legal fees, caused by your use of the Website and/or the Services, or the dissemination and possession of any content you received via your use of the Website and/or the Services.

Notice For California Users:
Under California Civil Code Section 1789.3, California users of the Website and/or Services are entitled to the following specific consumer rights notice: The Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs may be contacted in writing at 400 R Street, Suite 1080, Sacramento, California 95814, or by telephone at (916) 445-1254 or (800) 952-5210. The App is operated by the Transportation Corridor Agencies, 125 Pacifica, Suite 120, Irvine, CA 92618, (949) 727-4800.

Termination:
TCA shall have the right in its sole discretion to terminate your use of the Website and Services if you are found to have used the Website and/or Services in a manner inconsistent with these Terms.

In addition, TCA may change, suspend or discontinue all or any aspect of the Website or Services, including its availability, at any time, and may suspend or terminate your use of the Services at any time and for any reason.  TCA reserves the right to make changes to these Terms at any time.

Privacy:
TCA’s Privacy Policy (the “Privacy Policy”) will apply to all personal information collected in connection with your use of the Website or the Services.  TCA’s Privacy Policy can be found and accessed on any page of the Website.

Applicable Law:
The Website and Services are created, controlled and provided by TCA in the State of California, United States of America.  As such, the laws of the State of California will govern these Terms, without giving effect to any conflicts of laws principles.  In any dispute, venue and jurisdiction shall reside in Orange County, California.

Miscellaneous:
Failure by TCA to insist upon strict performance of any part of these Terms, or delay in or failure to exercise any rights or remedies to which it is entitled, shall not constitute a waiver of such right or remedies, nor shall termination of these Terms by TCA operate as a waiver of any of its terms.  Any express waiver of any breach of these Terms by TCA does not constitute a waiver of any subsequent breach of these Terms.  Waivers shall only be valid if recorded in writing and signed by TCA.

If any provision of these Terms is held invalid, illegal or unenforceable for any reason by any court of competent jurisdiction, such provision shall be severed from these Terms and the remaining provisions shall continue in full force and effect as if these Terms had been executed without the invalid, illegal or unenforceable provision.
The provisions of the Warranty and Disclaimer section above, including, without limitation, all provisions pertaining to liability and indemnity, as well as any other paragraphs that are necessary to give effect to that section, shall survive the termination of these Terms.

Entire Agreement:
These Terms, and all documents referred to herein, including the Privacy Policy, constitute the entire agreement between you and TCA and govern your use of the Website and Services, superseding any prior agreements between you and TCA governing your use of the Website and Services.   
            </p>  
   
            </div>

    </body>

</html>