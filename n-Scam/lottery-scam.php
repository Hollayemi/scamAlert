<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
    $name                = 'lottery-scam';
?>











<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Lottery Scam');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/lottery-scam8a1b.png?sfvrsn=c130e25a_2" alt="Lottery Scam" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS A Lottery Scam? <br />
                    </h1>
                    <p class="lead"><h5><em>Scratch-and-win scam</em></h5>
<p>Victims are approached while shopping in Johor Bahru and invited to participate in a simple scratch-and-win promotion. They win a prize but must follow the scammer to their main office to collect it. Once at the office, the winners/victims are told to pay an administration charge or tax on the prize, which does not exist. They might even be asked to pay more money to join a grand draw with prizes such as cars or holidays. The scammers offer to accompany "winners" to an ATM in Singapore to collect the money. Once they receive the money, scammers tell victims that the prize is delayed and that they should return another time.</p>
<h5><em>Lottery/lucky draw scam</em></h5>
<p>Victims receive a phone call or SMS notification that they have won a prize in a lucky draw. Often, the prize is a car or a condominium unit overseas. To claim the prize, victims must pay administrative fees or taxes. Or to convert the prize into cash, victims must make payment to a foreign bank account.</p>
<p>In another variation of the lucky draw scam, victims receive a call to take part in a survey that qualifies them entry to a lucky draw. Victims subsequently win the draw, but must pay an administrative fee to claim the prize.</p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter">
        <div class="text-white lead align-toggle">
            <div class="counter-background">
                <div class="container">
                    <div class="row no-gutters-border py-5">
                        <div class="col-md-6 py-3 border-white">
                            <div class="row">
                                <div class="col-lg-auto">
                                    <img class="py-2" src="../default-album/icons/icon_cases_reported.png" alt="icon_cases_reported" />
                                </div>
                                <div class="col-lg-8">
                                    <h2><span class="timer count-title count-number" data-to="311" data-speed="1500"></span></h2>
                                    <span>OF CASES REPORTED</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="row">
                                <div class="col-lg-auto counter-img">
                                    <img class="py-2" src="../default-album/icons/icon_worth_lost.png" alt="icon_worth_lost" />
                                </div>
                                <div class="col-lg-8">
                                    <h2>$<span class="timer count-title count-number" data-to="1200000.00" data-speed="3000"></span></h2>
                                    <span>WORTH OF MONEY LOST</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <li>Emails from unfamiliar entitiesstating that you have won a prize</li>
    <li>If the email or text message states that you only need to pay a small "administrative fee" to unlock your prize. This is a sure sign of a scam</li>
    <li>Be especially wary if told that you have been randomly selected to win</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Emails from unfamiliar entitiesstating that you have won a prize</li>
    <li>If the email or text message states that you only need to pay a small "administrative fee" to unlock your prize. This is a sure sign of a scam</li>
    <li>Be</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read More</a>
                                </div>
                            </div>

                        </div>
                        <div id="content2" class="tab-pane fade" role="tabpanel" aria-labelledby="content2-tab">
                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less" style="display:none;">
                                <div><ul>
    <li>Never pay to collect a prize. Winning a draw should never entail an advance payment</li>
    <li>Never accept an offer to be ferried back to Singapore to withdraw money in order to claim a prize</li>
    <li>Ignore calls and correspondence that informs you of a win, especially if you have not entered any lucky draws</li>
    <li>Do not give in to greed. Approach all unexpected windfalls with scepticism</li>
    <li>Be wary of get-rich-quick offers. If something sounds too good to be true, it probably is</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Never pay to collect a prize. Winning a draw should never entail an advance payment</li>
    <li>Never accept an offer to be ferried back to Singapore to withdraw money in order to claim a prize</li>
    <li>Ignore calls and correspondence that informs</div>
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
    <li>Emails from unfamiliar entitiesstating that you have won a prize</li>
    <li>If the email or text message states that you only need to pay a small "administrative fee" to unlock your prize. This is a sure sign of a scam</li>
    <li>Be especially wary if told that you have been randomly selected to win</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Emails from unfamiliar entitiesstating that you have won a prize</li>
    <li>If the email or text message states that you only need to pay a small "administrative fee" to unlock your prize. This is a sure sign of a scam</li>
    <li>Be</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Never pay to collect a prize. Winning a draw should never entail an advance payment</li>
    <li>Never accept an offer to be ferried back to Singapore to withdraw money in order to claim a prize</li>
    <li>Ignore calls and correspondence that informs you of a win, especially if you have not entered any lucky draws</li>
    <li>Do not give in to greed. Approach all unexpected windfalls with scepticism</li>
    <li>Be wary of get-rich-quick offers. If something sounds too good to be true, it probably is</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Never pay to collect a prize. Winning a draw should never entail an advance payment</li>
    <li>Never accept an offer to be ferried back to Singapore to withdraw money in order to claim a prize</li>
    <li>Ignore calls and correspondence that informs</div>
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
        $allTypeIds=fetchTypeOfScam_forEach($conn,'lottery-scam');
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
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>






 
<?php include('footerN-scam.php') ?>