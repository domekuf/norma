function ajax_setup(){
	
	var xhttp = new XMLHttpRequest();
	xhttp.upload.addEventListener("progress", function(evt) {
    	if (evt.lengthComputable) {
            var percentComplete = evt.loaded / evt.total;
            console.log(percentComplete);
    	}
	}, false);
	xhttp.addEventListener("progress", function(evt) {
		if (evt.lengthComputable) {
           	var percentComplete = evt.loaded / evt.total;
        	console.log(percentComplete);
    	}
	}, false);
$("a").click(
    function(event) {
        event.preventDefault();
		meth=$(this).attr('meth');
		container=$(this).attr('dest');
		document.getElementById(container).innerHTML = '<div class="row" style="text-align:center"><h2><i class="fa fa-circle-o-notch fa-spin"></i></h2></div>';
        href=($(this).attr('href'));
        xhttp.onreadystatechange = function() {
  			if (xhttp.readyState == 4 && xhttp.status == 200) {
    			document.getElementById(container).innerHTML = xhttp.responseText;
    			console.log(xhttp);
  			}else if (xhttp.status == 404){
  				document.getElementById(container).innerHTML = '<div class="row" style="text-align:center"><h2><i class="fa fa-frown-o fa-spin"></i> Oops!</h2><p> Qualcosa é andato storto, si chiama '+xhttp.status+'!</p></div>';
  			}
		};
        xhttp.open(meth, href, true);
		xhttp.send();
	});
}