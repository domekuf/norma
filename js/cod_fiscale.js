function CalcolaCodiceFiscale(id_form,id_output){
//Nome=string&Cognome=string&ComuneNascita=string&DataNascita=string&Sesso=string

var form=$('#'+id_form);
var formData = new FormData(form[0]);
//formData.append("text","Nome","Domenico");
//formData.append("text","Cognome","Di Iorio");
//formData.append("text","DataNascita","26/04/1991");
//formData.append("text","ComuneNascita","Castel San Giovanni");
//formData.append("text","Sesso","M");

console.log(form);

console.log(formData);

cfUrl='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale';
cfQs='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale?Nome=Domenico&Cognome=Di+Iorio&DataNascita=26%2F04%2F1991&ComuneNascita=Castel+San+Giovanni&Sesso=M';

var xhttp = new XMLHttpRequest();

// Open the connection.
	xhttp.open("POST", cfUrl, true);
	
	// Set up a handler for when the request finishes.
	xhttp.onload = function () {
		//alert("open");
	if (xhttp.status === 200) {
		$('#'+id_output).val(xhttp.response);
	} else {
		$('#'+id_output).val('errore!');
	}
	};
	// Send the Data.
	xhttp.send(formData);



}