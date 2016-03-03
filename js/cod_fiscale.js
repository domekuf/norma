function CalcolaCodiceFiscale(id_form,id_output){

var form=$('#'+id_form);

cfUrl='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale';
cfQs='http://webservices.dotnethell.it/codicefiscale.asmx/CalcolaCodiceFiscale?Nome=Domenico&Cognome=Di+Iorio&DataNascita=26%2F04%2F1991&ComuneNascita=Castel+San+Giovanni&Sesso=M';
$.ajax({
      type: "POST",
      url: cfUrl,
      data: form.serialize(),
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
}