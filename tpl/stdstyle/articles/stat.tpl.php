<div class="content2-pagetitle"><img src="tpl/stdstyle/images/blue/stat1.png" class="icon32" alt="{title_text}" title="{title_text}" />&nbsp;{{stats}}</div>
<div style="line-height: 1.8em; font-size: 13px;">
<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s1">{{ranking_by_number_of_created_caches}}</a><br />
<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s2">{{ranking_by_number_of_finds}}</a><br />
<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s6">{{ranking_by_number_of_recommnedations}}</a><br />
<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s4">{{cache_ranking_by_number_of_finds}}</a><br />
<?php if ($usr !== false){ echo '<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s5">{{cache_ranking_by_calculated_indicator}}</a><br />';} ?>
<img src="tpl/stdstyle/images/free_icons/chart_bar.png" class="icon16" alt="" title="" align="middle" />&nbsp;<a class="links" href="articles.php?page=s3">{{user_ranking_by_number_of_finds_of_their_caches}}</a><br /><br />
<div class="img-shadow"><img src="graphs/new-caches-oc.php" alt="{{oc_statistics}}" /></div><br/>
<div class="buffer"></div>
<img src="{oc_statistics_link}" alt="{{oc_statistics}}" /><br />
</div>
