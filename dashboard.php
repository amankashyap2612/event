
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
 
        <div><a href="https://www.facebook.com/sharer/sharer.php?u=<URL>&t=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">facebook</a></div>
		
		<div><a type="button" href="whatsapp://send?text=http://localhost/bookmyshow/dashboard.php?dashboard=5" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">Whatapp</a></div>
		
		<div>
			<a href="https://twitter.com/share?url=<URL>&text=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">Twitter</a>
		</div>
		
		<div>
			<a href="https://plus.google.com/share?url=<http://localhost/bookmyshow/dashboard.php?dashboard=5>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Google+">Google</a>
		</div>
		<a href="https://api.whatsapp.com/send?text=http://localhost/bookmyshow/dashboard.php?dashboard=5" data-action="share/whatsapp/share">Share via Whatsapp web</a>
	
		<div><a href="https://api.whatsapp.com/send?phone=91XXXXXXXXXX&text=urlencodedtext" target="_blank">WA</a></div>
 
 <script>
 
	$(document).ready(function() {
  $(document).on("click", '.mct_whatsapp_btn', function() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      var text = $(this).attr("data-text");
      var url = $(this).attr("data-link");
      var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
      var whatsapp_url = "whatsapp://send?text=" + message;
      window.location.href = whatsapp_url;
    } else {
      alert("Please use an Mobile Device to Share this Article");
    }
  });
});
 </script>
    </body>
</html>