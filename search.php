<?php
    include('header.php');
?>



<main role="main"> 
    <script type="text/javascript" src="Bootstrap/assets/dist/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Mvc/Scripts/Helper.js">
</script>

<style>
    #ulPreloadKeyword li{
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="Mvc/Scripts/Helper.js"></script>

<div class="sf_cols">
    <div class="sf_colsIn jumbotron search-container" data-sf-element="Container" data-placeholder-label="Container">

        <div class="container text-center mt-5 mb-3">
            <h1>Search Scam Database</h1>
            <p class="lead">
                
            </p>
        </div>
    <!-- using ajax -->
        <div class="sf_cols">
            <div class="sf_colsIn container text-center">
                <div class="d-none d-sm-block">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Search for scam" name="searchScam" placeholder="Search for scam" id="txtQueryString" onkeyup="Search()" value="" onkeydown="return (event.keyCode!=13);" maxlength="100" />
                        <div class="input-group-append">
                            <input type="submit" name="action" value='Search' class="btn btn-secondary" onclick="Search()">
                            <!-- <button type="button" class="btn btn-secondary" onclick="Search()">Search</button> -->
                        </div>
                    </div>
                    <div id="divPreloadKeyword" style="padding-top:1px;display:none;">
                        <ul id="ulPreloadKeyword" class="form-control" style="list-style-type: none;text-align: left;width:85%;border-radius:1rem;">
                            
                        </ul>
                    </div>
                    <div id="divError" class="alert alert-danger" role="alert" style="width: 62%;margin-top:20px;margin-left: auto;margin-right: auto;display:none;">
                        Searching keyword is required.
                    </div>
                    <div class="justify-content-center mt-4">
                        <div class="btn-group">
                            <select class="btn btn-outline-light text-left mr-4 btn-filter" name="searchBy" id="ddlQueryScam">
                                <option value="All" selected>Search by Scam</option>
                                    <option value="apple-scam" >Apple Scam</option>
                                    <option value="car-rental-scam" >Car Rental Scam</option>
                                    <option value="cold-call-supplier-scam" >Cold Call Supplier Scam</option>
                                    <option value="credit-for-sex-scam" >Credit-for-Sex Scam</option>
                                    <option value="cyber-extortion-scam" >Cyber Extortion Scam</option>
                                    <option value="home-room-rental-scam" >Home/Room Rental Scam</option>
                                    <option value="impersonation-scam" >Impersonation Scam</option>
                                    <option value="inheritance-scam" >Inheritance Scam</option>
                                    <option value="internet-love-scam" >Internet Love Scam</option>
                                    <option value="investment-scam" >Investment Scam</option>
                                    <option value="job-scam" >Job Scam</option>
                                    <option value="kidnap-scam" >Kidnap Scam</option>
                                    <option value="loan-scam" >Loan Scam</option>
                                    <option value="lottery-scam" >Lottery Scam</option>
                                    <option value="money-mule-scam" >Money Mule Scam</option>
                                    <option value="online-purchase-scam" >Online Purchase Scam</option>
                                    <option value="online-travel-vacation-scam" >Online Travel Vacation Scam</option>
                                    <option value="paypal-email-scam" >PayPal Email Scam</option>
                                    <option value="phishing-scam" >Phishing Scam</option>
                                    <option value="scam-using-wechat" >Scam Using WeChat</option>
                                    <option value="social-media-whatsapp-scam" >Social Media Impersonation / Whatsapp Takeover Scam</option>
                                    <option value="software-update-scam" >Software Update Scam</option>
                                    <option value="spoofed-hacked-email-scam" >Spoofed/Hacked Email Scam</option>
                                    <option value="wangiri-scam" >Wangiri Scam</option>
                            </select>
                        </div>
                        <div class="btn-group">
                            <select class="btn btn-outline-light text-left btn-filter" name="searchType" id="ddlQueryType">
                                <option value="All" selected>Search by Type</option>
                                    <option value="BankAccount" >Bank Account</option>
                                    <option value="Telephone" >Contact No.</option>
                                    <option value="Email" >Email</option>
                                    <option value="UserName" >ID/Username</option>
                                    <option value="keywords" >Keywords</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="main_C003_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
    <div class="stories overflow-hide"><br><br><br>
        <div class="row no-gutters no-gutters-border" id="divStoryList">
            <div class="row no-gutters no-gutters-border" id="showdivStoryList"></div>
        </div>
    </div>
    <br><br>
</div>
<script type="text/javascript">
    function Search(){
        var queryString = $("#txtQueryString").val();
        var queryScam = $("#ddlQueryScam").val();
        var queryType = $("#ddlQueryType").val();
        if (IsMobileModel()) {
            queryString = $("#txtQueryString2").val();
            queryScam = $("#ddlQueryScam2").val();
            queryType = $("#ddlQueryType2").val();
        }

        if (queryString != "") {
            $("#divError").hide();

            // console.log('this is a man i love')

        
    

            $.ajax({
                url:"config/actions.php",
                method:'POST',
                data:{
                    searchText:queryString
                },
                success: function(data){
                    $('#showdivStoryList').html(data)
                    $("#divError").hide();

                    console.log(data);
                }

            })
        }
    }
    function SuggestKeywordOnClick(keyword) {
        $('#txtQueryString').val(keyword);
        $("#divPreloadKeyword").hide();
        $("#ulPreloadKeyword").empty();
        Search();
    }
</script>
 </main>












 <?php include('footer.php') ?>