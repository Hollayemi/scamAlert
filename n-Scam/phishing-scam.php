<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
    $name                = 'phishing-scam';
?>


<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Phishing Scam');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/phising-scam5b71.png?sfvrsn=79cedf13_2" alt="Phishing Scam" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS A Phishing Scam? <br />
                    </h1>
                    <p class="lead"><p>Victims receive a call informing them that they have won a lucky draw. To claim the prize, the victim must provide their passport details or other personal information.</p>
<p>In another phishing scam, fake websites are created to look identical to the actual websites but with a slightly different web address. Should victims input their personal details and PIN numbers to these websites, their information and money are at risk.</p></p>
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
    <li>Phone calls from anyone telling you that you have won a lucky draw. Legitimate organisations typically notify winners via written means such as email or an official letter, in addition to a phone call. If in doubt, contact the organisation for verification</li>
    <li>Fake emails. Check the email address of the sender and look out for spelling or grammar mistakes. These are signs of a scam email</li>
    <li>Official-looking emails that do not address you by name. Spam emails are usually sent out en masse</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Phone calls from anyone telling you that you have won a lucky draw. Legitimate organisations typically notify winners via written means such as email or an official letter, in addition to a phone call. If in doubt, contact the organisation for verification</li>
    <li>Fake</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read More</a>
                                </div>
                            </div>

                        </div>
                        <div id="content2" class="tab-pane fade" role="tabpanel" aria-labelledby="content2-tab">
                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less" style="display:none;">
                                <div><ul>
    <li>Never give out personal information such as your bank account or credit card numbers via email</li>
    <li>Never disclose PIN numbers, user account IDs, passwords or credit card details over email</li>
    <li>Delete suspicious emails and ignore phone calls from people making claims about the use of your name</li>
    <li>Be aware that no email service provider, bank, financial institution or website administrator would email customers to verify or ask for their account information, password or PIN</li>
    <li>Hover your mouse over the link in the email to check the destination address. If the address doesn&rsquo;t lead you back to the website you are expecting, it is likely to be a phishing attack</li>
    <li>Never input sensitive information to pop-up windows from emails or websites</li>
    <li>Never download or open attachments in emails from unfamiliar sources</li>
    <li>Never feel pressured to reveal your personal information online</li>
    <li>Protect your computer or device with a firewall, spam filters and up-to-date anti-virus software</li>
    <li>Look for the secure symbol in the URL. Secure websites use 'https' rather than 'http' at the start of the address, or a closed padlock or unbroken key icon at the bottom right corner of your browser window. Legitimate websites are generally encrypted to protect your details</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Never give out personal information such as your bank account or credit card numbers via email</li>
    <li>Never disclose PIN numbers, user account IDs, passwords or credit card details over email</li>
    <li>Delete suspicious emails and ignore phone calls from people making</div>
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
    <li>Phone calls from anyone telling you that you have won a lucky draw. Legitimate organisations typically notify winners via written means such as email or an official letter, in addition to a phone call. If in doubt, contact the organisation for verification</li>
    <li>Fake emails. Check the email address of the sender and look out for spelling or grammar mistakes. These are signs of a scam email</li>
    <li>Official-looking emails that do not address you by name. Spam emails are usually sent out en masse</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Phone calls from anyone telling you that you have won a lucky draw. Legitimate organisations typically notify winners via written means such as email or an official letter, in addition to a phone call. If in doubt, contact the organisation for verification</li>
    <li>Fake</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Never give out personal information such as your bank account or credit card numbers via email</li>
    <li>Never disclose PIN numbers, user account IDs, passwords or credit card details over email</li>
    <li>Delete suspicious emails and ignore phone calls from people making claims about the use of your name</li>
    <li>Be aware that no email service provider, bank, financial institution or website administrator would email customers to verify or ask for their account information, password or PIN</li>
    <li>Hover your mouse over the link in the email to check the destination address. If the address doesn&rsquo;t lead you back to the website you are expecting, it is likely to be a phishing attack</li>
    <li>Never input sensitive information to pop-up windows from emails or websites</li>
    <li>Never download or open attachments in emails from unfamiliar sources</li>
    <li>Never feel pressured to reveal your personal information online</li>
    <li>Protect your computer or device with a firewall, spam filters and up-to-date anti-virus software</li>
    <li>Look for the secure symbol in the URL. Secure websites use 'https' rather than 'http' at the start of the address, or a closed padlock or unbroken key icon at the bottom right corner of your browser window. Legitimate websites are generally encrypted to protect your details</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Never give out personal information such as your bank account or credit card numbers via email</li>
    <li>Never disclose PIN numbers, user account IDs, passwords or credit card details over email</li>
    <li>Delete suspicious emails and ignore phone calls from people making</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read More</a>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
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
        $allTypeIds=fetchTypeOfScam_forEach($conn,'phishing-scam');
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
                    <span aria-hidden="true">???</span>
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
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('4')">
                    4
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" onclick="pagingOnClick('5')">
                    5
                </a>
            </li>

            <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('6')">
                    <span aria-hidden="true">???</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>






 <?php include('footerN-scam.php') ?>