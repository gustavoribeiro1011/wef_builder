<script>

	//Title
    $("#title_page").html(title_page);
	$("#title_form").html(title_form);

    if(title_form_position == "left") { $("#title_form").attr("align", "left"); }
    if(title_form_position == "right") { $("#title_form").attr("align", "right"); }
    if(title_form_position == "center") { $("#title_form").attr("align", "center"); }

    // Logo
    if ( logo == "true"){
        $(".logo").html('<img src="' + logo_url + '" alt="Formulario WhatsApp EasyForm" width="700px">');        
    } else{
        $("body").css("padding-top","10px");
    }
    
    if ( certificate == "true" ) {
        $("#certificate").html('<img src="img/' + certificate_url + '" alt="Certificado da Agência" width="700px" />')
    }

    // Message Footer
    if ( message_footer.length > 0){
        $("#footer")
        .html(message_footer)
        .css("margin-top","16px")
          .css("margin-bottom","16px")
        .css("font-size","19px");      
    } 

    // Security
    if (disable_key_f12 == "true"){

        $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
        	return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        	return false;
        }
    });
    }

    if (disable_click_right == "true"){ 
        $(document).on("contextmenu", function (e) {        
         e.preventDefault();
     });
    }

 
    
  
    
</script>
