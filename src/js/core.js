// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
;(function($){
  $(function(){
    $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
      highlightSelector:"#menu-header a",
      scrollSpeed:1000,
      offset:150,
      scrollEasing: "easeOutQuint",
      scrollingEasing: "easeOutQuint"
    });

    $("a[rel='next']").click(function(e){
    e.preventDefault();
    var to=$(this).parent().parent("section").next().attr("id");
    $.mPageScroll2id("scrollTo",to);
    });
  /* ------ [ANIMATION] ------ */
  new WOW().init();



});
}(jQuery));
