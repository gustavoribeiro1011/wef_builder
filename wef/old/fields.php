<script>
  result_fields = "";




  //Input
  if (input == "true") {
    var arrayLengthInput = inputs.length;
    result_input = "";
    for (var i = 0; i < arrayLengthInput; i++) {
      if (inputs[i].order) {
        result_input += '<div data-sid="' + inputs[i].order + '" id="' + inputs[i].order + '">';
        result_input += '<label class="est1" ' + inputs[i].label_custom + '>' + inputs[i].label;
        result_input += '<span id="asterisk_input_' + inputs[i].id + '"></span></label>';
        result_input += '<input type="' + inputs[i].type + '" ';
        result_input += 'id="' + inputs[i].id + '"';
        result_input += 'placeholder="' + inputs[i].placeholder + '"';
        result_input += 'class="' + inputs[i].class + '"';
        result_input += 'required="' + inputs[i].required + '">';
        result_input += '<span id="help_input_' + inputs[i].id + '" class="textHelp"></span></label>';
        result_input += '</div>';
      } else {
        alert('Defina uma ordem de exibição para input "' + inputs[i].label + '"');
      }
    }
    result_fields += result_input;
  }

  //Textarea
  if (textarea == "true") {
    var arrayLengthTextArea = textareas.length;
    result_textarea = "";
    for (var i = 0; i < arrayLengthTextArea; i++) {
      if (textareas[i].order) {
        result_textarea += '<div data-sid="' + textareas[i].order + '" id="' + inputs[i].order + '">';
        result_textarea += '<label class="est1" ' + textareas[i].label_custom + '>' + textareas[i].label;
        result_textarea += '<span id="asterisk_textarea_' + textareas[i].id + '"></span></label>';
        result_textarea += '<textarea placeholder="' + textareas[i].placeholder + '" id="' + textareas[i].id + '"></textarea>';
        result_textarea += '</div>';

      } else {
        alert('Defina uma ordem de exibição para textarea "' + textareas[i].label + '"');
      }
    }
    result_fields += result_textarea;
  }

  //Checkbox
  if (checkbox == "true") {
    var arrayLengthCheckbox = checkboxs.length;
    result_checkbox = "";
    for (var i = 0; i < arrayLengthCheckbox; i++) {
      if (checkboxs[i].order) {
        result_checkbox += '<div data-sid="' + checkboxs[i].order + '" id="' + inputs[i].order + '">';
        result_checkbox += '<label class="est1" ' + checkboxs[i].label_custom + '>' + checkboxs[i].label;
        result_checkbox += '<span id="asterisk_checkbox_' + checkboxs[i].id + '"></span>';
        result_checkbox += '</label>';
        var arrayLengthCheckboxOptions = checkboxs[i].options.length;
        for (var x = 0; x < arrayLengthCheckboxOptions; x++) {
          result_checkbox += '<div class="est1">';
          result_checkbox += '<input type="checkbox"';
          result_checkbox += 'name="checkbox_' + checkboxs[i].id + '"';
          result_checkbox += 'value="' + checkboxs[i].options[x] + '">';
          result_checkbox += '<label>' + checkboxs[i].options[x] + '</label></div>';
        }
        result_checkbox += '</div>';
      } else {
        alert('Defina uma ordem de exibição para checkbox "' + checkboxs[i].label + '"');
      }
    }
    result_fields += result_checkbox;
  }

  //Radio
  if (radio == "true") {
    var arrayLengthRadio = radios.length;
    result_radio = "";
    for (var i = 0; i < arrayLengthRadio; i++) {
      if (radios[i].order) {
        result_radio += '<div data-sid="' + radios[i].order + '" id="' + inputs[i].order + '">';
        result_radio += '<label class="est1" ' + radios[i].label_custom + '>' + radios[i].label;
        result_radio += '<span id="asterisk_radio_' + radios[i].id + '"></span>';
        result_radio += '</label>';
        var arrayLengthRadioOptions = radios[i].options.length;
        for (var x = 0; x < arrayLengthRadioOptions; x++) {
          result_radio += '<div class="est1">';
          result_radio += '<input type="radio"';
          result_radio += 'id="radio_' + i + '"';
          result_radio += 'name="radio_' + radios[i].id + '"';
          result_radio += 'value="' + radios[i].options[x] + '"> <label>' + radios[i].options[x] + '</label></div>';
        }
        result_radio += '</div>';
      } else {
        alert('Defina uma ordem de exibição para radio "' + radios[i].label + '"');
      }
    }
    result_fields += result_radio;
  }

  //Select
  if (select == "true") {
    var arrayLengthSelect = selects.length;
    result_select = "";
    for (var i = 0; i < arrayLengthSelect; i++) {
      if (selects[i].order) {

        result_select += '<div data-sid="' + selects[i].order + '" id="' + inputs[i].order + '">';
        result_select += '<label class="est1" ' + selects[i].label_custom + '>' + selects[i].label;
        result_select += '<span id="asterisk_select_' + selects[i].id + '"></span>';
        result_select += '</label>';
        var arrayLengthSelectOptions = selects[i].options.length;
        result_select += '<select name="select_' + selects[i].id + '" id="select_' + selects[i].id + '">';
        result_select += '<option value="999" select="' + selects[i].id + '" position="' + i + '">' + selects[i].first_option_select + '</option>';

        for (var x = 0; x < arrayLengthSelectOptions; x++) {
          result_select += '<option value="' + selects[i].options[x] + '" select="' + selects[i].id + '" position="' + i + '">' + selects[i].options[x] + '</option>';
        }
        result_select += '</select></div>';

      } else {
        alert('Defina uma ordem de exibição para select "' + selects[i].label + '"');
      }
    }
    result_fields += result_select;
  }

  //Button
  result_button = '<div data-sid="999" id="999">';
  result_button += '<button class="botao-contato" id="submit">';
  result_button += '<i class="fab fa-whatsapp"></i>' + button_name;
  result_button += '</button>';
  result_fields += result_button;

  //Show fields
  $("p").append("<div class='fields'>" + result_fields + "</div>");

  //Subselect - inclui a função subselect caso exista
  var subselects = [];

  if (select == "true") {
    var arrayLengthSelect = selects.length;

    for (var i = 0; i < arrayLengthSelect; i++) {
      id = selects[i].id;
      if (selects[i].subselect === "true") {
        subselects.push(selects[i].id);
        $("#select_" + id).after("<div id='subselect_" + selects[i].id + "'></div>");
      }
    }

    for (var cont = 0; cont < subselects.length; cont++) {

      idName = "#select_" + subselects[cont];


      $(idName).on("change", function() {
        var valor = $(this).val(); // aqui vc pega cada valor selecionado com o this
        var select = $('option:selected', this).attr('select');       
        var position = $('option:selected', this).attr('position');
        //alert('valor: ' + valor + ' | select: ' + select + ' | position(id): ' + position);
        if (valor === '999') {          
          $("#subselect_" + select).html('');
        }
        else{          
          content = "<label class='est1'>" + selects[position].subselect_label + "</label>";
          content += '<div class="grid-row">';
          //------Inicio do while com as opções do subselect
          var arrayLengthSubSelectOptions = "";
          var contOptions = 1;
          while (contOptions <= valor) {
            arrayLengthSubSelectOptions = selects[position].subselect_options.length;
            content += '<div class="grid-row-content">';
            content += "<label class='est1'><select id='subselect_" + select + "_value_" + contOptions + "'>";
            content += "<option>-</option>";
            for (var x = 0; x < arrayLengthSubSelectOptions; x++) {
              content += '<option value="' + selects[position].subselect_options[x] + '">' + selects[position].subselect_options[x] + '</option>';
            }
            content += "</select></label>";
            content += '</div>';
            contOptions++;
          } //------Fim do while
          content += '</div>';
          $("#subselect_" + select).html(content);


        }






      })

    }

  }


  /*//Exbibe label
  $("#select_" + id).after("<div id='subselect_" + selects[i].id + "'>[subselect_" + selects[i].id + "]</div>");
*/







  /*
            //pega o valor so select primário
            value_subselect = this.value;

            if (value_subselect !== '999') {
              i = 1;

              content = "<label class='est1'>" + selects[i].subselect_label + "</label>";
              content += '<div class="grid-row">';
              var arrayLengthSubSelectOptions = "";
              var cont = 1;
              while (cont <= value_subselect) {
                arrayLengthSubSelectOptions = selects[i].subselect_options.length;

                content += '<div class="grid-row-content">';
                content += "<label class='est1'><select id='subselect_"+id+"_value_"+cont+"'>";
                content += "<option>-</option>";

                for (var x = 0; x < arrayLengthSubSelectOptions; x++) {
                  content += '<option value="'+selects[i].subselect_options[x]+'">' + selects[i].subselect_options[x] + '</option>';
                }

                content += "</select></label>";
                content += '</div>';

                cont++;
               
              }
              content += '</div>';

              $("#subselect_" + id).html(content);

            } else {
              $("#subselect_" + id).html('');
            }*/

  /*})

      }
    }
  }*/
</script>