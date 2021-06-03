<?php 
    include('header.php');
    $storyIds            = fetchId($conn);

?>



<main role="main"> 
<div id="main_C001_Col00" class="sf_colsIn jumbotron" data-sf-element="Container" data-placeholder-label="Container"><div class='sfContentBlock'><div class="container">
<div class="row">
<div class="col-md-6 text-center order-lg-2">
<img class="img-fluid" src="default-album/top-banners/banner_stories.png" alt="banner stories"></div>
<div class="col-md-6 my-auto order-lg-1 text-center text-sm-left">
<h1>I won $50K in a lucky draw that I didn't participate</h1>
I received a call from this +966 55 236 9019 with a name ‘Starhub Company’ telling me that I won $50,000 dollars<br>
<br>
<a href="#">&nbsp;Read More&nbsp;</a></div>
</div>
</div>


</div>
</div>
<div id="main_C003_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">

<script type="text/javascript" src="Mvc/Scripts/Helper.js"></script>

<div class="stories overflow-hide">
    <h1 class="text-center pb-4">Scam Stories</h1>
    <p class="lead text-muted"></p>
    <input type="hidden" value="6d90680a-3a74-427c-804a-82f00c6f1806<br />" style="display:none;" />

    
    <div class=" d-sm-block">
        <div class="row pb-4">
            <div class="col-lg-5 text-muted mb-2 pt-2" id="divPagingInfo">Showing <?php echo sizeof($storyIds)?> of <?php echo sizeof($storyIds)?> Stories</div>
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
        <img src="default-album/evidence/loading.gif" />
    </div>
    <div class="row no-gutters no-gutters-border" id="divStoryList">
    
    <?php
        foreach($storyIds as $id){
            $storyIdsDetails     =   fetchAllStories($conn,$id)
    ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="card-date text-primary"><?php echo explode(" ",$storyIdsDetails['date'])[0]  ?></div>
                        <h4 class="card-title">
                            <a class="text-dark" href="stories/view_story.php?story=<?php echo $storyIdsDetails['storyToken']  ?>"><?php echo $storyIdsDetails['scammer_report']  ?></a>
                        </h4>
                        <p class="card-text"><?php echo substr($storyIdsDetails['scam_exp'],0,400)  ?>&hellip;...</p>
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



            <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" aria-label="Next" onclick="pagingOnClick('6')">
                    <span aria-hidden="true">❯</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>

<script type="text/javascript">
    function ddlSortByOnSelect() {
        FilterAjax("");
    }
    function ddlSortByOnSelect2() {
        FilterAjax("");
    }

    function FilterAjax() {
        // show loading div
        $("#divLoading").show();
        $("#divStoryList").empty();
        
        var sortValue  =  $('#ddlSortBy').val()
        var search     =  "all"
        $.ajax({
            url: "config/actions.php",
            method:"POST",
            data: {
                sort:sortValue,
                key:search
            },
            success: function(data){
                $('#showdivStoryList').html(data)
                $("#divLoading").hide();
            }
        })
        
    }
</script>

</div>
 </main> 
 

 <?php include('footer.php') ?>