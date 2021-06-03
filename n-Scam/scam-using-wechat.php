<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
    $name                = 'scam-using-wechat';
?>







<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Scam Using WeChat');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/scam-using-wechat5514.jpg?sfvrsn=454c15d6_2" alt="Scam Using WeChat" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS A Scam Using WeChat? <br />
                    </h1>
                    <p class="lead"><p>Scammers use pop-up or online ads to sell game credits or Chinese Reminbi at attractive rates. These ads often appear in popular games such as The Legend of the Condor Heroes, Jian Xia Qing Yuan 3 (剑侠情缘), Three Kingdom Rush, and Xi Fei Zhuan (熹妃传). When a victim clicks on the pop-up ad, they will be instructed to add the seller on WeChat. Thereafter, the victim is asked to register an account on a website in order to receive the game credits. During registration, the victim is asked to provide their personal information and bank account details.</p>
<p>When registration is complete, the victim is asked to make payment for the game credits via Alipay, iTunes or MyCard. Once payment is made, the scammer does not deliver the game credits and becomes uncontactable. Some victims are asked to make multiple payments for various fees or to authenticate or activate the bank account.</p>
<p>In the sale of foreign currencies, scammers ask victims to transfer money to a Singapore bank account before they can receive the Chinese Renminbi in the victim's WeChat or Alipay account. Once the transfer is done, the scammer becomes uncontactable and blocks the victim on WeChat.</p></p>
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
    <li>Deals that sound too good to be true</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Deals that sound too good to be true</li>
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
    <li>Check the advertiser's terms and conditions for the deal. If the advertiser does not provide enough information upfront, it is probably a scam</li>
    <li>Exercise caution when responding to online ads. Remember that if an offer sounds too good to be true, it probably is</li>
    <li>Check the advertiser's track record by reading reviews of their services or contact previous customers </li>
    <li>Keep your communication with the party within the site. Often, scammers try to get victims to leave the site to avoid being tracked by the site owner</li>
    <li>Always perform banking transactions on a secured website</li>
    <li>Never disclose your personal information such as bank account details to strangers</li>
    <li>Use only licensed money changers if you need to exchange currency. It is a crime for anyone to operate a money-changing business without a valid license from the Monetary Authority of Singapore</li>
    <li>When in doubt, call the Anti-Scam Helpline at 1800-722-6688</li>
    <li>If you are a victim of a scam, make a Police report</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Check the advertiser's terms and conditions for the deal. If the advertiser does not provide enough information upfront, it is probably a scam</li>
    <li>Exercise caution when responding to online ads. Remember that if an offer sounds too good to be true, it probably</div>
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
    <li>Deals that sound too good to be true</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Deals that sound too good to be true</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Check the advertiser's terms and conditions for the deal. If the advertiser does not provide enough information upfront, it is probably a scam</li>
    <li>Exercise caution when responding to online ads. Remember that if an offer sounds too good to be true, it probably is</li>
    <li>Check the advertiser's track record by reading reviews of their services or contact previous customers </li>
    <li>Keep your communication with the party within the site. Often, scammers try to get victims to leave the site to avoid being tracked by the site owner</li>
    <li>Always perform banking transactions on a secured website</li>
    <li>Never disclose your personal information such as bank account details to strangers</li>
    <li>Use only licensed money changers if you need to exchange currency. It is a crime for anyone to operate a money-changing business without a valid license from the Monetary Authority of Singapore</li>
    <li>When in doubt, call the Anti-Scam Helpline at 1800-722-6688</li>
    <li>If you are a victim of a scam, make a Police report</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Check the advertiser's terms and conditions for the deal. If the advertiser does not provide enough information upfront, it is probably a scam</li>
    <li>Exercise caution when responding to online ads. Remember that if an offer sounds too good to be true, it probably</div>
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
        $allTypeIds=fetchTypeOfScam_forEach($conn,'scam-using-wechat');
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
                <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('1')">
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>




 <?php include('footerN-scam.php') ?>