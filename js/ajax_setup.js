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
        $.ajax({
		type: meth,
		url: href,
		data: '',//form.serialize(),//"Nome=Domenico&Cognome=Di+Iorio&DataNascita=26%2F04%2F1991&ComuneNascita=Castel+San+Giovanni&Sesso=M",
		dataType: "html",
		success: function(msg)
		{
			$('#'+container).html(msg);
		},
		error: function(msg)
		{
			console.log(msg);
			$('#'+container).html('<div class="row" style="text-align:center"><h2><i class="fa fa-frown-o fa-spin"></i> Oops!</h2><p> Qualcosa é andato storto e si chiama: '+msg.status+'! Ti dice qualcosa? </p></div>');
		}
		});
	});
}