function CalcolaCodiceFiscale(id_form,id_output){
//Nome=string&Cognome=string&ComuneNascita=string&DataNascita=string&Sesso=string

var form=$('#'+id_form);

cfUrl='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale';
cfQs='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale?Nome=Domenico&Cognome=Di+Iorio&DataNascita=26%2F04%2F1991&ComuneNascita=Castel+San+Giovanni&Sesso=M';
$.ajax({
      type: "POST",
      url: cfUrl,
      data: form.serialize(),//"Nome=Domenico&Cognome=Di+Iorio&DataNascita=26%2F04%2F1991&ComuneNascita=Castel+San+Giovanni&Sesso=M",
      dataType: "html",
      success: function(msg)
      {
		var xml = msg,
		xmlDoc = $.parseXML( xml ),
		$xml = $( xmlDoc ),
		$string = $xml.find( "string" );
		$('#codicefiscale').val($string.text());
      },
      error: function()
      {
        alert("Chiamata fallita, si prega di riprovare...");
      }
    });
// var xhttp = new XMLHttpRequest();
// 
// // Open the connection.
// 	xhttp.open("POST", cfUrl, true);
// 	
// 	// Set up a handler for when the request finishes.
// 	xhttp.onload = function () {
// 		//alert("open");
// 	if (xhttp.status === 200) {
// 		$('#'+id_output).val(xhttp.response);
// 	} else {
// 		$('#'+id_output).val('errore!');
// 	}
// 	};
// 	// Send the Data.
// 	xhttp.send(formData);



}