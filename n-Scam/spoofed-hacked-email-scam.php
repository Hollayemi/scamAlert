<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
    $name                = 'spoofed-hacked-email-scam';
?>




<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Spoofed/Hacked Email Scam');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/email-hack-scam0797.png?sfvrsn=5a8b247a_2" alt="Spoofed/Hacked Email Scam" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS A Spoofed/Hacked Email Scam? <br />
                    </h1>
                    <p class="lead">A scammer impersonate a victim's supplier using a similar email address. The victim will be told to transfer money to a different bank account because the supplier's regular account has been suspended or is under audit.<br />
<br />
In another variant, scammers will hack into their victim's email account, that of the supplier's or business partner's. They will monitor the email correspondence between the two and at an opportune time, send an email to their victim to request for payment to be paid to another bank account. The spoofed email used by the scammer can closely mimic that of the original email address.&nbsp;<br />
<br />
These are some examples of spoofed email addresses:<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<table class="telerik-reTable-1">
    <tbody>
        <tr class="telerik-reTableHeaderRow-1">
            <td class="telerik-reTableHeaderFirstCol-1"><span style="font-family: Arial;"><strong>Genuine email</strong>&nbsp;</span></td>
            <td class="telerik-reTableHeaderLastCol-1"><span style="font-family: Arial;">&nbsp;<strong>Spoofed email</strong></span></td>
        </tr>
        <tr class="telerik-reTableOddRow-1">
            <td class="telerik-reTableFirstCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="422e707102252f232b2e6c212d2f">[email&#160;protected]</a>&nbsp;</span></td>
            <td class="telerik-reTableLastCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="4273707102252f232b2e6c212d2f">[email&#160;protected]</a>&nbsp;(1 replaced with a I)<br />
            </span></td>
        </tr>
        <tr class="telerik-reTableEvenRow-1">
            <td class="telerik-reTableFirstCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="2d4c4f4e6d49485e45445d5d44434a034e4240">[email&#160;protected]</a><br />
            </span></td>
            <td class="telerik-reTableLastCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="15747776557170667d65657c7b723b767a78">[email&#160;protected]</a> &nbsp; (i missing)<br />
            </span></td>
        </tr>
        <tr class="telerik-reTableFooterRow-1">
            <td class="telerik-reTableFooterFirstCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="bbc3c2c1fbc8deded0dec995d8d4d695d8d5">[email&#160;protected]</a><br />
            </span></td>
            <td class="telerik-reTableFooterLastCol-1"><span style="font-family: Arial;"><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="433b3a39033026262826316e202d6d202c2e">[email&#160;protected]</a> (. replaced by -)<br />
            </span></td>
        </tr>
    </tbody>
</table>
<span style="font-family: Arial;">
<style type="text/css" id="telerik-reTable-1">
    .telerik-reTable-1 {
    border-width: 0px;
    border-style: none;
    border-collapse: collapse;
    font-family: Tahoma;
    }
    .telerik-reTable-1 tr.telerik-reTableHeaderRow-1 {
    margin: 10px;
    padding: 10px;
    color: #3F4D6B;
    background: #D6E8FF;
    text-align: left;
    font-size: 10pt;
    font-style: normal;
    font-family: Tahoma;
    text-transform: capitalize;
    font-weight: bold;
    border-spacing: 10px;
    line-height: 14pt;
    vertical-align: top;
    }
    .telerik-reTable-1 td.telerik-reTableHeaderFirstCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    color: #3a4663;
    line-height: 14pt;
    }
    .telerik-reTable-1 td.telerik-reTableHeaderLastCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    color: #3a4663;
    line-height: 14pt;
    }
    .telerik-reTable-1 td.telerik-reTableHeaderOddCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    color: #3a4663;
    line-height: 14pt;
    }
    .telerik-reTable-1 td.telerik-reTableHeaderEvenCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    color: #3a4663;
    line-height: 14pt;
    }
    .telerik-reTable-1 tr.telerik-reTableOddRow-1 {
    color: #666666;
    background-color: #F2F3F4;
    font-size: 10pt;
    vertical-align: top;
    }
    .telerik-reTable-1 tr.telerik-reTableEvenRow-1 {
    color: #666666;
    background-color: #E7EBF7;
    font-size: 10pt;
    vertical-align: top;
    }
    .telerik-reTable-1 td.telerik-reTableFirstCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    }
    .telerik-reTable-1 td.telerik-reTableLastCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    }
    .telerik-reTable-1 td.telerik-reTableOddCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    }
    .telerik-reTable-1 td.telerik-reTableEvenCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    }
    .telerik-reTable-1 tr.telerik-reTableFooterRow-1 {
    background-color: #D6E8FF;
    color: #4A5A80;
    font-weight: 500;
    font-size: 10pt;
    font-family: Tahoma;
    line-height: 11pt;
    }
    .telerik-reTable-1 td.telerik-reTableFooterFirstCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    border-top: solid gray 1.0pt;
    text-align: left;
    }
    .telerik-reTable-1 td.telerik-reTableFooterLastCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    border-top: solid gray 1.0pt;
    text-align: left;
    }
    .telerik-reTable-1 td.telerik-reTableFooterOddCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    text-align: left;
    border-top: solid gray 1.0pt;
    }
    .telerik-reTable-1 td.telerik-reTableFooterEvenCol-1 {
    padding: 0in 5.4pt 0in 5.4pt;
    text-align: left;
    border-top: solid gray 1.0pt;
    }
</style>
</span><br />
<span style="font-family: Arial; font-size: 16px;">In some cases, scammers may even use the same business logo, links to the company's website, or messaging format to trick their victims into believing that they have received a genuine request for payment. &nbsp;
</span>
<div><span style="font-family: Arial; font-size: 16px;">
<br />
Victims will only come to realise that they have been scammed (often days later) when their actual suppliers call to inform them they have not received their payment. </span></div></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter">

    <div class="jumbotron bg-light text-center mt-0 mb-5 py-5 d-none d-sm-block">
        <div class="container py-5">
            <ul class="nav nav-tabs justify-content-center mb-2" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-uppercase active" id="content1-tab" data-toggle="tab" href="#content1" role="tab" aria-controls="content1" aria-selected="true">What you should look out for</a>
                </li>
                <li class="nav-item text-uppercase">
                    <a class="nav-link" id="content2-tab" data-toggle="tab" href="#content2" role="tab" aria-controls="content2" aria-selected="false">What you should do</a>
                </li>
            </ul>
            <div class="row no-gutters-border">
                <div class="col-md-3 text-left">
                    <img class="pb-3" src="../default-album/img_advices.png" alt="image_advices" />
                </div>
                <div class="col-md-9">
                    <div class="tab-content mt-5" id="myTabContent">
                        <div id="content1" class="tab-pane fade active" role="tabpanel" aria-labelledby="content1-tab">
                            <input type="checkbox" class="read-more-state" id="post-1" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_Less" style="display:none;">
                                <div><ul>
    <li>Any sudden changes to your suppliers&rsquo; or creditors&rsquo; payment instructions and accounts. When in doubt, check directly with your suppliers </li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Any sudden changes to your suppliers&rsquo; or creditors&rsquo; payment instructions and accounts. When in doubt, check directly with your suppliers </li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read More</a>
                                </div>
                            </div>

                        </div>
                        <div id="content2" class="tab-pane fade" role="tabpanel" aria-labelledby="content2-tab">
                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less" style="display:none;">
                                <div><ul>
    <li>Do not make changes to your payment arrangements without verifying the email with your suppliers</li>
    <li>Call previously known phone numbers instead of the number reflected on the email with the new payment instructions</li>
    <li>Always use secured networks to reduce the risk of hacking</li>
    <li>Install anti-virus software and update it regularly to protect your computer system.&nbsp;You may consider installing free Domain Name&nbsp;System (DNS) protection services such as Quad9 (quad9.net) to protect&nbsp;against such attacks. </li>
    <li>Always update your Operating System (OS) when&nbsp;new patches are made available.&nbsp;</li>
    <li>Educate your employees about this scam, especially those responsible for making fund transfers</li>
    <li>Improve the security of your company's IT infrastructure. For SMEs that wish to explore ways on how they can improve their IT security, visit&nbsp;<a href="https://www.imda.gov.sg/programme-listing/smes-go-digital/sme-digital-tech-hub">SME Digital Hub</a></li>
    <li>Consider installing email authentication tools such as Domain-based<br />
    Message Authentication, Reporting and Conformance, DMARC&nbsp;<br />
    (dmarc.globalcyberalliance.org), which can help detect fraudulent emails.&nbsp;</li>
</ul>
<p><strong><br />
More Cybersecurity Tips:</strong></p>
<ol>
    <li>Global Security Alliance (GCA) toolkit:&nbsp;<a href="https://gcatoolkit.org/smallbusiness/">https://gcatoolkit.org/smallbusiness/</a></li>
    <li>CSA Website on cyber hygiene:&nbsp;<a href="https://www.csa.gov.sg/gosafeonline">https://www.csa.gov.sg/gosafeonline</a></li>
</ol></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Do not make changes to your payment arrangements without verifying the email with your suppliers</li>
    <li>Call previously known phone numbers instead of the number reflected on the email with the new payment instructions</li>
    <li>Always use secured networks to reduce the</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-light text-center mt-0 mb-5 py-5 d-block d-sm-none">
        <h4>What you should look out for</h4>
        <input type="checkbox" class="read-more-state" id="post-3" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_Less2" style="display:none;">
            <div><ul>
    <li>Any sudden changes to your suppliers&rsquo; or creditors&rsquo; payment instructions and accounts. When in doubt, check directly with your suppliers </li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Any sudden changes to your suppliers&rsquo; or creditors&rsquo; payment instructions and accounts. When in doubt, check directly with your suppliers </li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Do not make changes to your payment arrangements without verifying the email with your suppliers</li>
    <li>Call previously known phone numbers instead of the number reflected on the email with the new payment instructions</li>
    <li>Always use secured networks to reduce the risk of hacking</li>
    <li>Install anti-virus software and update it regularly to protect your computer system.&nbsp;You may consider installing free Domain Name&nbsp;System (DNS) protection services such as Quad9 (quad9.net) to protect&nbsp;against such attacks. </li>
    <li>Always update your Operating System (OS) when&nbsp;new patches are made available.&nbsp;</li>
    <li>Educate your employees about this scam, especially those responsible for making fund transfers</li>
    <li>Improve the security of your company's IT infrastructure. For SMEs that wish to explore ways on how they can improve their IT security, visit&nbsp;<a href="https://www.imda.gov.sg/programme-listing/smes-go-digital/sme-digital-tech-hub">SME Digital Hub</a></li>
    <li>Consider installing email authentication tools such as Domain-based<br />
    Message Authentication, Reporting and Conformance, DMARC&nbsp;<br />
    (dmarc.globalcyberalliance.org), which can help detect fraudulent emails.&nbsp;</li>
</ul>
<p><strong><br />
More Cybersecurity Tips:</strong></p>
<ol>
    <li>Global Security Alliance (GCA) toolkit:&nbsp;<a href="https://gcatoolkit.org/smallbusiness/">https://gcatoolkit.org/smallbusiness/</a></li>
    <li>CSA Website on cyber hygiene:&nbsp;<a href="https://www.csa.gov.sg/gosafeonline">https://www.csa.gov.sg/gosafeonline</a></li>
</ol></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Do not make changes to your payment arrangements without verifying the email with your suppliers</li>
    <li>Call previously known phone numbers instead of the number reflected on the email with the new payment instructions</li>
    <li>Always use secured networks to reduce the</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read More</a>
            </div>
        </div>

    </div>
</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var isReadMoreLookOut = true
    var isReadMoreProtect = true

    function ReadMoreLookOut() {
        if (isReadMoreLookOut) {
            isReadMoreLookOut = false;
            $("#MaincontainsLookOutId_More").hide();
            $("#MaincontainsLookOutId_Less").show();
        }
        else {
            isReadMoreLookOut = true;
            $("#MaincontainsLookOutId_Less").hide();
            $("#MaincontainsLookOutId_More").show();
        }
    }

    function ReadMoreProtect() {
        if (isReadMoreProtect) {
            isReadMoreProtect = false;
            $("#MaincontainsProtectId_More").hide();
            $("#MaincontainsProtectId_Less").show();
        }
        else {
            isReadMoreProtect = true;
            $("#MaincontainsProtectId_Less").hide();
            $("#MaincontainsProtectId_More").show();
        }
    }


    var isReadMoreLookOut2 = true
    var isReadMoreProtect2 = true

    function ReadMoreLookOut2() {
        if (isReadMoreLookOut2) {
            isReadMoreLookOut2 = false;
            $("#MaincontainsLookOutId_More2").hide();
            $("#MaincontainsLookOutId_Less2").show();
        }
        else {
            isReadMoreLookOut2 = true;
            $("#MaincontainsLookOutId_Less2").hide();
            $("#MaincontainsLookOutId_More2").show();
        }
    }

    function ReadMoreProtect2() {
        if (isReadMoreProtect2) {
            isReadMoreProtect2 = false;
            $("#MaincontainsProtectId_More2").hide();
            $("#MaincontainsProtectId_Less2").show();
        }
        else {
            isReadMoreProtect2 = true;
            $("#MaincontainsProtectId_Less2").hide();
            $("#MaincontainsProtectId_More2").show();
        }
    }

</script>

<style>
    /*#main_C009_Col00 {
        display: none;
    }*/
</style>
<div id="main_C016_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">

<script type="text/javascript" src="../Mvc/Scripts/Helper.js"></script>

<div class="stories overflow-hide">
    <h1 class="text-center pb-4">RELATED SCAM STORIES</h1>
    <p class="lead text-muted"></p>
    <input type="hidden" value="" style="display:none;" />

    
    
    <div class="d-sm-block">
        <div class="row pb-4">
        <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing <?php echo sizeof(fetchTypeOfScam_forEach($conn,$name))?> of <?php echo sizeof(fetchTypeOfScam_forEach($conn,$name))?> Stories</div>
            <div class="col-lg-7 text-muted">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="sort-by">Sort by:</label>
                        <label class="sr-only" for="sort-by">Sort by</label>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select mb-2" id="ddlSortBy" onchange="ddlSortByOnSelect();">
                                    <option value="Latest" >Latest</option>
                                    <option value="Oldest" >Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="text-center" id="divLoading" style="display:none;">
        <img src="../default-album/evidence/loading.gif" />
    </div>
    <div class="row no-gutters no-gutters-border" id="divStoryList">
    <?php
        $allTypeIds=fetchTypeOfScam_forEach($conn,'spoofed-hacked-email-scam');
        rsort($allTypeIds);
        // print_r($allTypeIds)

        foreach($allTypeIds as $allTypeId){
            $storyIdsDetails     =   fetchAllStories($conn,$allTypeId)
    ?>



                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="card-date text-primary"><?php echo explode(" ",$storyIdsDetails['date'])[0]  ?></div>
                            <h4 class="card-title">
                                <a class="text-dark" href="../stories/view_story.php?story=<?php echo $storyIdsDetails['storyToken']?>"><?php echo $storyIdsDetails['scammer_report']  ?></a>
                            </h4>
                            <p class="card-text"><?php echo substr($storyIdsDetails['scam_exp'],0,400)  ?></p>
                        </div>
                    </div>
                </div>
    <?php
        }
    ?>

    </div>


    <div class="row no-gutters no-gutters-border" id="showdivStoryList"></div>

    
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-5 pb-5" id="ulPaging">

            <li class="page-item">
                <a class="page-link prev" href="javascript:void(0)" aria-label="Previous" onclick="pagingOnClick('1')">
                    <span aria-hidden="true">❮</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>



            <li class="page-item active">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('1')">
                    1
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('2')">
                    2
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('3')">
                    3
                </a>
            </li>

            <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('3')">
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>





 <?php include('footerN-scam.php') ?>