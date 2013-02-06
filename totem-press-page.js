(function($){
  $(function(){
    var iframe, press_page, press_page_url, src;
    press_page = $('#totem-press-page');
    press_page_url = press_page.data('url');
    src = press_page_url + '?iframe=true' + '#' + encodeURIComponent(document.location.href);
    iframe = $('<iframe src="' + src + '" width="100%" height="5000" scrolling="no" frameborder="0"></iframe>');
    iframe.appendTo('#totem-press-page');
    $.receiveMessage(function(e) {
      var h, if_height;
      h = Number(e.data.replace(/.*if_height=(\d+)(?:&|$)/, '$1'));
      if (!isNaN(h) && h > 0 && h !== if_height) {
        iframe.height(if_height = h);
      }
    }, press_page_url.match(/(^[^?]+)/)[1]);
  });
})(jQuery);
