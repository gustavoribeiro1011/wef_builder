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
								label: inputs[i].label + ": ",
								value: isDate(input_val) + "\n",
								order: inputs[i].order
							});

						} else {
							$("#asterisk_input_" + inputs[i].id).html("");
							submit += "0";

							// Populando o obejeto messages
							messages.push({
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
							label: inputs[i].label + ": ",
							value: isDate(input_val) + "\n",
							order: inputs[i].order
						});

					} else {
						var input_val = $("#" + inputs[i].id).val();
						submit += "0";

						// Populando o obejeto messages
						messages.push({
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
							label: textareas[i].label + ": ",
							value: textarea_val + "\n",
							order: textareas[i].order
						});

					}
				} else {
					submit += "0";

					// Populando o obejeto messages
					messages.push({
						label: textareas[i].label + ": ",
						value: textarea_val + "\n",
						order: textareas[i].order
					});

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
							label: selects[i].label + ": ",
							value: "nenhum " + "\n",
							order: selects[i].order
						});
					} else {
						// Populando o obejeto messages
						messages.push({
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
								label: "",
								value: subselect_val + ", ", //<---Aqui vai com a vírgula no final
								order: selects[i].order
							});

						} else {
							messages.push({
								label: "",
								value: subselect_val + '\n', //<---Aqui vai sem a vírgula no final
								order: selects[i].order
							});
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
			};


			// ----------| Preparing the data for the API |----------|

			var message = title_form + "\n\n";
			message += messageHtml;

			//alert(messageHtml);

			message = window.encodeURIComponent(message);

			if (openInNewWindow === "true") {

				blank = "_blank";
			} else {
				blank = "_self";
			}

			window.open("https://wa.me/" + mobile + "?text=" + message, blank);

			$("#title_form").css("display", "none");
			$(".fields").css("display", "none");

			$("p").append("<div>" + redirectMessage + "</div>");


		} else {
			alert("Por favor preencha todos os campos!");
		}
	}
</script>