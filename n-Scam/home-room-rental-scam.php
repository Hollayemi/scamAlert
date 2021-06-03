<?php 
    include('headerN-scam.php');
    $storyIds            = fetchId($conn);
    $name                = 'home-room-rental-scam';
?>











<main role="main"> 



    <script type="text/javascript" src="../Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).prop('title', 'Home/Room Rental Scam');
        });
    </script>


<div class="sf_colsIn jumbotron bg-white mb-0" data-sf-element="Container" data-placeholder-label="Container">
    <div class="sfContentBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right order-lg-2">
                    <img class="img-fluid" src="../default-album/top-banners/house-rental-scame3cb.png?sfvrsn=c9fb0ddc_2" alt="Home/Room Rental Scam" />
                </div>
                <div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
                    <h1>
                        WHAT IS A Home/Room Rental Scam? <br />
                    </h1>
                    <p class="lead"><p>Scammers offer a room or house for rent and use high-pressure tactics to get victims to pay the rent in advance. In these cases, the scammers are not authorised to rent out the property or the property may not even exist.</p>
<p>In another variation of this scam, the scammers pretend to be interested foreign tenants looking to rent a place. They will claim to have made payment for the deposit, after which the victims will receive fake emails from PayPal asking for a fee before the payment can be released to them. In some cases, the scammers may ask the landlords to help them pay their movers' fees.</p></p>
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
    <li>Online deals that are too good to be true. Even if a listing appears legitimate, it could still be a scam.</li>
    <li>Photos of a property that does not closely match the description of the unit.</li>
    <li>Potential tenants who offer to rent the apartment/room without seeing it first.</li>
    <li>PayPal emails requesting an admin fee to be paid before an amount can be released to you.</li>
</ul></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More">
                                <div> <ul>
    <li>Online deals that are too good to be true. Even if a listing appears legitimate, it could still be a scam.</li>
    <li>Photos of a property that does not closely match the description of the unit.</li>
    <li>Potential tenants who offer to</div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsLookOutReadId" class="read-more-trigger text-primary" onclick="ReadMoreLookOut()">Read More</a>
                                </div>
                            </div>

                        </div>
                        <div id="content2" class="tab-pane fade" role="tabpanel" aria-labelledby="content2-tab">
                            <input type="checkbox" class="read-more-state" id="post-2" />

                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less" style="display:none;">
                                <div><ul>
    <li>Ask to visit the property to verify that it exists.</li>
    <li>Ensure the person you deal with is the rightful owner of the unit or an accredited real estate agent.</li>
    <li>Search for identical ads placed elsewhere. This will help you discover if the listing is a well-known scam.</li>
    <li>Do not pay rental deposits or rent to the salesperson. Payments should be made directly to the property owner and only after all parties have signed the tenancy agreement.</li>
</ul>
<p>Always read the contents of an email and check the sender's email address to ensure that it is from a trusted source.</p></div>
                                <div class="text-center">
                                    <a href="javascript:void(0);" id="MaincontainsProtectReadId" class="read-more-trigger text-primary" onclick="ReadMoreProtect()">Read Less</a>
                                </div>
                            </div>
                            <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More">
                                <div> <ul>
    <li>Ask to visit the property to verify that it exists.</li>
    <li>Ensure the person you deal with is the rightful owner of the unit or an accredited real estate agent.</li>
    <li>Search for identical ads placed elsewhere. This will help you discover</div>
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
    <li>Online deals that are too good to be true. Even if a listing appears legitimate, it could still be a scam.</li>
    <li>Photos of a property that does not closely match the description of the unit.</li>
    <li>Potential tenants who offer to rent the apartment/room without seeing it first.</li>
    <li>PayPal emails requesting an admin fee to be paid before an amount can be released to you.</li>
</ul></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsLookOutId_More2">
            <div> <ul>
    <li>Online deals that are too good to be true. Even if a listing appears legitimate, it could still be a scam.</li>
    <li>Photos of a property that does not closely match the description of the unit.</li>
    <li>Potential tenants who offer to</div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsLookOutReadId2" class="read-more-trigger text-primary" onclick="ReadMoreLookOut2()">Read More</a>
            </div>
        </div>

        <h4>What you should do</h4>
        <input type="checkbox" class="read-more-state" id="post-4" />
        
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_Less2" style="display:none;">
            <div><ul>
    <li>Ask to visit the property to verify that it exists.</li>
    <li>Ensure the person you deal with is the rightful owner of the unit or an accredited real estate agent.</li>
    <li>Search for identical ads placed elsewhere. This will help you discover if the listing is a well-known scam.</li>
    <li>Do not pay rental deposits or rent to the salesperson. Payments should be made directly to the property owner and only after all parties have signed the tenancy agreement.</li>
</ul>
<p>Always read the contents of an email and check the sender's email address to ensure that it is from a trusted source.</p></div>
            <div class="text-center">
                <a href="javascript:void(0);" id="MaincontainsProtectReadId2" class="read-more-trigger text-primary" onclick="ReadMoreProtect2()">Read Less</a>
            </div>
        </div>
        <div class="read-more-wrap lead text-left" id="MaincontainsProtectId_More2">
            <div> <ul>
    <li>Ask to visit the property to verify that it exists.</li>
    <li>Ensure the person you deal with is the rightful owner of the unit or an accredited real estate agent.</li>
    <li>Search for identical ads placed elsewhere. This will help you discover</div>
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
        <img src="../default-album/evidence/loading.gif"/>
    </div>
    <div class="row no-gutters no-gutters-border" id="divStoryList">
    <?php
        $allTypeIds=fetchTypeOfScam_forEach($conn,'home-room-rental-scam');
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