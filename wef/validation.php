<script>
	//Object that will receive form fields	
	var messages = [];

	//Function to sort messages in ascending 'order'
	function byOrder(a, b) {
		return a.order > b.order ? 1 : a.order < b.order ? -1 : 0
	}

	//Validate e-mail
	function isEmail(email) {
		var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return regex.test(email);
	}

	//Date format brazil (dd/mm/yyyy)
	function isDate(date) {
		var dateformatted = date;
		return dateformatted.replace(/(\d*)-(\d*)-(\d*).*/, '$3/$2/$1');
	}

	//Enter event click
	$(document).on('keypress', function(e) {
		if (e.which == 13) {
			Submit();
		}
	});

	//Click button submit
	$("#submit").click(function() {
		Submit();
	});

	//Submit
	function Submit() {
		var submit = "";
		var text = "";


		/* -----------------------------------------------------
		 *
		 *  Input
		 *
		 * -----------------------------------------------------
		 */
		 if (input === "true") {
		 	var arrayLengthInput = inputs.length;
		 	for (var i = 0; i < arrayLengthInput; i++) {
		 		var input_val = $("#" + inputs[i].id).val();
		 		if (inputs[i].required === 'required') {
		 			if (input_val.length === 0) {
		 				submit += "1";
		 				$("#asterisk_input_" + inputs[i].id).html("&nbsp;" + asterisk);
		 			} else {
		 				if (inputs[i].type === "email") {
		 					if (isEmail(input_val) === true) {
								//email is valid
								$("#help_input_" + inputs[i].id).html("");
								submit += "0";

								// Populando o obejeto messages
								messages.push({
									id: inputs[i].id,
									label: inputs[i].label + ": ",
									value: input_val + "\n",
									order: inputs[i].order
								});

							} else {
								//email is not valid				
								submit += "1";
								$("#help_input_" + inputs[i].id).html("Digite um e-mail válido");
							}
						} else if (inputs[i].type === "date") {
							submit += "0";

							// Populando o obejeto messages
							messages.push({
								id: inputs[i].id,
								label: inputs[i].label + ": ",
								value: isDate(input_val) + "\n",
								order: inputs[i].order
							});

						} else {
							$("#asterisk_input_" + inputs[i].id).html("");
							submit += "0";

							// Populando o obejeto messages
							messages.push({
								id: inputs[i].id,
								label: inputs[i].label + ": ",
								value: input_val + "\n",
								order: inputs[i].order
							});
						}
					}
				} else {
					if (inputs[i].type === "date") {
						submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: inputs[i].id,
							label: inputs[i].label + ": ",
							value: isDate(input_val) + "\n",
							order: inputs[i].order
						});

					} else {
						var input_val = $("#" + inputs[i].id).val();
						submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: inputs[i].id,
							label: inputs[i].label + ": ",
							value: input_val + "\n",
							order: inputs[i].order
						});

					}
				}
			}
		}


		/* -----------------------------------------------------
		 *
		 *  Checkbox
		 *
		 * -----------------------------------------------------
		 */
		 if (checkbox === "true") {
		 	checkbox_arr = "";
		 	var arrayLengthCheckbox = checkboxs.length;
		 	for (var i = 0; i < arrayLengthCheckbox; i++) {
		 		if (checkboxs[i].required === 'required') {
		 			var checkbox_leng = $('[name="checkbox_' + checkboxs[i].id + '"]:checked').length;
		 			if (checkbox_leng === 0) {
		 				submit += "1";
		 				$("#asterisk_checkbox_" + checkboxs[i].id).html("&nbsp;" + asterisk);
		 			} else {
		 				$("#asterisk_checkbox_" + checkboxs[i].id).html("");
		 				$('[name="checkbox_' + checkboxs[i].id + '"]:checked').map(function() {
		 					checkbox_arr += $(this).val() + ", ";
		 				}).get()
		 				submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: checkboxs[i].id,
							label: checkboxs[i].label + ": ",
							value: checkbox_arr.substring(0, checkbox_arr.length - 2) + "\n",
							order: checkboxs[i].order
						});

					}
				} else {
					$('[name="checkbox_' + checkboxs[i].id + '"]:checked').map(function() {
						checkbox_arr += $(this).val() + ", ";
					}).get()
					submit += "0";

					// Populando o obejeto messages
					messages.push({
						id: checkboxs[i].id,
						label: checkboxs[i].label + ": ",
						value: checkbox_arr.substring(0, checkbox_arr.length - 2) + "\n",
						order: checkboxs[i].order
					});
				}
			}
		}


		/* -----------------------------------------------------
		 *
		 *  Radio
		 *
		 * -----------------------------------------------------
		 */
		 if (radio === "true") {
		 	radio_val = "";
		 	var arrayLengthRadio = radios.length;
		 	for (var i = 0; i < arrayLengthRadio; i++) {
		 		if (radios[i].required === 'required') {
		 			var radio_length = $('[name="radio_' + radios[i].id + '"]:checked').length
		 			if (radio_length === 0) {
		 				submit += "1";
		 				$("#asterisk_radio_" + radios[i].id).html("&nbsp;" + asterisk);
		 			} else {
		 				$("#asterisk_radio_" + radios[i].id).html("");
		 				$('[name="radio_' + radios[i].id + '"]:checked').map(function() {
		 					radios[i].radio_val = $('[name="radio_' + radios[i].id + '"]:checked').val();
		 				}).get()
		 				submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: radios[i].id,
							label: radios[i].label + ": ",
							value: radios[i].radio_val + "\n",
							order: radios[i].order
						});

					}
				} else {
					$('[name="radio_' + radios[i].id + '"]:checked').map(function() {
						radios[i].radio_val = $('[name="radio_' + radios[i].id + '"]:checked').val();
					}).get()
					submit += "0";

					// Populando o obejeto messages
					messages.push({
						id: radios[i].id,
						label: radios[i].label + ": ",
						value: radios[i].radio_val + "\n",
						order: radios[i].order
					});


				}
			}
		}


		/* -----------------------------------------------------
		 *
		 *  Textarea
		 *
		 * -----------------------------------------------------
		 */
		 if (textarea === "true") {

		 	var arrayLengthTextarea = textareas.length;
		 	for (var i = 0; i < arrayLengthTextarea; i++) {
		 		var textarea_val = $("#" + textareas[i].id).val();

		 		if (textareas[i].required === 'required') {
		 			if (textarea_val.length === 0) {
		 				submit += "1";
		 				$("#asterisk_textarea_" + textareas[i].id).html("&nbsp;" + asterisk);
		 			} else {
		 				$("#asterisk_textarea_" + textareas[i].id).html("");
		 				submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: textareas[i].id,
							label: textareas[i].label + ": ",
							value: textarea_val + "\n",
							order: textareas[i].order
						});

					}
				} else {

					if (textarea_val.length !== 0) {
						submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: textareas[i].id,
							label: textareas[i].label + ": ",
							value: textarea_val + "\n",
							order: textareas[i].order
						});
					}

				}
			}
		}


		/* -----------------------------------------------------
		 *
		 *  Select
		 *
		 * -----------------------------------------------------
		 */
		 if (select === "true") {
		 	var arrayLengthSelect = selects.length;
		 	for (var i = 0; i < arrayLengthSelect; i++) {
		 		var select_val = $("#select_" + selects[i].id + " option:selected").val();
		 		if (selects[i].required === 'required') {
		 			if (select_val === '999') {
		 				submit += "1";
		 				$("#asterisk_select_" + selects[i].id).html("&nbsp;" + asterisk);
		 			} else {
		 				$("#asterisk_select_" + selects[i].id).html("");
		 				submit += "0";

						// Populando o obejeto messages
						messages.push({
							id: selects[i].id,
							label: selects[i].label + ": ",
							value: select_val + "\n",
							order: selects[i].order
						});

					}
				} else {
					submit += "0";
					if (select_val === '999') {
						// Populando o obejeto messages
						messages.push({
							id: selects[i].id,
							label: selects[i].label + ": ",
							value: "nenhum " + "\n",
							order: selects[i].order
						});
					} else {
						// Populando o obejeto messages
						messages.push({
							id: selects[i].id,
							label: selects[i].label + ": ",
							value: select_val + "\n",
							order: selects[i].order
						});
					}

				}
			}
		}

		/* -----------------------------------------------------
		 *
		 *  Sub Select   
		 *
		 * -----------------------------------------------------
		 */
		 if (select === "true") {
		 	var arrayLengthSelect = selects.length;
		 	for (var i = 0; i < arrayLengthSelect; i++) {

		 		var subselect_val = $("#subselect_" + selects[i].id + "_value_" + cont + " option:selected").val();
		 		var select_val = $("#select_" + selects[i].id + " option:selected").val();

		 		if (select_val !== '999') {
		 			if (selects[i].subselect === 'true') {

		 				var arrayLengthSubSelect = $("#select_" + selects[i].id + " option:selected").val();

		 				messages.push({
							id: selects[i].id,
		 					label: selects[i].subselect_label + ": ",
		 					value: "",
		 					order: selects[i].order
		 				});

		 			}
		 		}

		 		for (var cont = 0; cont <= arrayLengthSubSelect; cont++) {
		 			var subselect_val = $("#subselect_" + selects[i].id + "_value_" + cont + " option:selected").val();
		 			if (subselect_val > 0) {
		 				submit += "0";
						// Populando o obejeto messages			
						if (cont < arrayLengthSubSelect) {
							messages.push({
								id: selects[i].id,
								label: "",
								value: subselect_val + ", ", //<---Aqui vai com a vírgula no final
								order: selects[i].order
							});

						} else {
							messages.push({
								id: selects[i].id,
								label: "",
								value: subselect_val + '\n', //<---Aqui vai sem a vírgula no final
								order: selects[i].order
							});
						}
					}
				}
			}
		}

		/* ------------------------------------------------------------
		 * Custom Data Ida / Data Volta (validation)
		 * ------------------------------------------------------------*/

		 if (select === "true") {
		 	var arrayLengthSelect = selects.length;
		 	for (var i = 0; i < arrayLengthSelect; i++) {

		 		var select_custom_val_data_ida = $("#select_custom_data_ida").val();
		 		var select_custom_val_data_volta = $("#select_custom_data_volta").val();
		 		var select_val = $("#select_" + selects[i].id + " option:selected").val();

		 		if (select_val === 'Somente Ida') {
		 			if (selects[i].custom === 'true') {
		 				if (isDate(select_custom_val_data_ida)) {
		 					messages.push({
								id: "data_ida",
		 						label: "Data Ida: ",
		 						value: isDate(select_custom_val_data_ida) + "\n",
		 						order: selects[i].order
		 					});
		 					$("#asterisk_input_data_ida").html("");
		 					submit += "0";
		 				} else {
		 					$("#asterisk_input_data_ida").html("&nbsp;" + asterisk);
		 					submit += "1";
		 				}
		 			}
		 		} else
		 		if (select_val === 'Ida e Volta') {
		 			if (selects[i].custom === 'true') {

		 				if (isDate(select_custom_val_data_ida) && isDate(select_custom_val_data_volta)) {

		 					messages.push({
								id: "data_ida",
		 						label: "Data Ida: ",
		 						value: isDate(select_custom_val_data_ida) + "\n",
		 						order: selects[i].order
		 					});

		 					messages.push({
								id: "data_volta",
		 						label: "Data Volta: ",
		 						value: isDate(select_custom_val_data_volta) + "\n",
		 						order: selects[i].order
		 					});

		 					$("#asterisk_input_data_ida").html("");
		 					$("#asterisk_input_data_volta").html("");
		 					submit += "0";

		 				} else
		 				if (isDate(select_custom_val_data_ida)) {
		 					$("#asterisk_input_data_ida").html("");
		 					$("#asterisk_input_data_volta").html("&nbsp;" + asterisk);
		 					submit += "1";
		 				} else
		 				if (isDate(select_custom_val_data_volta)) {
		 					$("#asterisk_input_data_ida").html("&nbsp;" + asterisk);
		 					$("#asterisk_input_data_volta").html("");
		 					submit += "1";
		 				} else {
		 					$("#asterisk_input_data_ida").html("&nbsp;" + asterisk);
		 					$("#asterisk_input_data_volta").html("&nbsp;" + asterisk);
		 					submit += "1";
		 				}

		 			}
		 		}
		 	}
		 }


		/* -----------------------------------------------------
		 *
		 *  Create Message (submit)
		 *
		 * -----------------------------------------------------
		 */
		 if ((parseInt(submit) + 0) === 0) {

			// ----------| Redeeming the filled fields |----------|

			//Do the ordering
			messages.sort(byOrder);

			//Variable that stores all fields
			var messageHtml = "";

			//While there are messages, concatenate the values
			for (i = 0; i < messages.length; i++) {
				messageHtml += messages[i].label + messages[i].value;

				var id = messages[i].id;

				if (id=="tipo_viagem") {			
          var tipo_viagem = messages[i].value;	
				}
				if (id=="nome") {			
          var nome = messages[i].value;	
				}
				if (id=="tipo_passagem") {			
          var tipo_passagem = messages[i].value;	
				}
				if (id=="data_ida") {			
          var data_ida = messages[i].value;	
				}
				if (id=="data_volta") {			
          var data_volta = messages[i].value;	
				}
				if (id=="bagagem") {
				    if ( messages[i].value.length > 0 ){
				         var bagagem = "S";	
				    }
				}
				
				if (id=="email") {			
          var email = messages[i].value;	
				}
				if (id=="telefone") {			
          var telefone = messages[i].value;	
				}
				if (id=="adultos") {			
          var adultos = messages[i].value;	
				}
				if (id=="criancas_1") {			
          var criancas_1 = messages[i].value;	
				}
				if (id=="criancas_2") {			
          var criancas_2 = messages[i].value;	
				}
				if (id=="origem") {			
          var origem = messages[i].value;	
				}
				if (id=="destino") {			
          var destino = messages[i].value;	
				}

			};

			$.ajax({
						url: "wef/send.php",
						type: "POST",
						data: {
							tipo_viagem: tipo_viagem,
							nome: nome,
							tipo_passagem: tipo_passagem,
							data_ida: data_ida,
							data_volta: data_volta,
							bagagem: bagagem,
							email: email,
							telefone: telefone,
							adultos: adultos,
							criancas_1: criancas_1,
							criancas_2: criancas_2,
							telefone: telefone,
							link:link,
							origem:origem,
							destino:destino,
						},
						cache: false,
						success: function(dataResult) {
							var dataResult = JSON.parse(dataResult);
							if (dataResult.statusCode == 200) {
								console.log('Data added successfully !');
							} else if (dataResult.statusCode == 201) {
								console.log("Error occured !");
							}
						}
					});


			// ----------| Preparing the data for the API |----------|

			var message = title_form + "\n\n";
			message += messageHtml;
			
			//rodapé (Identificação do formulário)
			//message += "\n #1";

			//alert(messageHtml);

			message = window.encodeURIComponent(message);

			if (openInNewWindow === "true") {

				blank = "_blank";
			} else {
				blank = "_self";
			}

			//roda o pixel de conversão
			$("#pixFac").load("pixel-conversao.php");			

		    window.open("https://wa.me/" + mobile + "?text=" + message, blank);
			
			//------------| <Submit with UltraMsg>  |------------
			//Example url: https://api.ultramsg.com/instance24168/messages/chat?token=xbicp6kkhctqd7eg&to=+5543996262702&body=A+API+WhatsApp+em+UltraMsg.com+funciona+bem&priority=10
		    /*function sendUltraMsg() {
		    var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            }
            };
            xhttp.open("GET", "https://api.ultramsg.com/instance24168/messages/chat?token=xbicp6kkhctqd7eg&to=+"+ mobile +"&body="+ message + "&priority=10", true);
            xhttp.send();
			}
			sendUltraMsg();
			------------| <./Submit with UltraMsg> |------------| */
		

			$("#title_form").css("display", "none");
			$(".fields").css("display", "none");

			$("p").append("<div>" + redirectMessage + "</div>");


		} else {
			messages = []; // Reset Messages (Fixed bug that duplicated messages)
			alert("Por favor preencha todos os campos!");

		}
	}
</script>