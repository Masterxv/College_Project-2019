<div class="hdr hdr--scrl">
            <div class="main-hdr-wrpr">
            <div class="main-hdr">
              <a class="hdr-logo" href="/project/index.php"> <img class="hdr-logo__img" src="assets/logo/logo.png" srcset="https://dgaliven.sirv.com/website_logos/21a83f4c3badb26f5a5a61b5c80fe233-full.png?profile=Default" alt="BestPrice" /> </a>
              <div class="srch-wdgt ui-front" data-url="/msp/search/auto_suggest_search.php">
                 <form class="js-srch-wdgt__frm" method="POST" action="./product/userproduct.php"> <input type="hidden" name="search_type" value="full" class="search_type"></input> <input type="hidden" name="userkeyword" value="" class="typed_term"></input> <input required="" name="userkeyword" placeholder="Search millions of products" class="srch-wdgt__fld js-atcmplt js-hdr-srch js-srch-lght" autocomplete="on" type="search"> <button type="submit" class="srch-wdgt__sbmt js-lazy-bg" value=""></button> </form>
              </div>
              <div class="hdr__rght">
                 <div id='div-gpt-top-bar' style='margin:auto;text-align:center'>
                 </div>
              </div>
              </div>
              </div>

              <div class="sub-hdr">
              <ul class="nvgtn-bar">
              <?php

              $query = "select * from  product_cat";
              $execquery = mysqli_query($connection,$query);

              while($rows=mysqli_fetch_array($execquery)){

              $usercat = $rows[1];
              echo "<li class='nvgtn-bar__item '><a class='nvgtn-bar__item-link ' href='mobile/index.html'>$usercat</a> </li> ";

              }
              ?>
              </ul>
              </div>
      </div>
      </div>