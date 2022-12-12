<script>
  /* ------------------------------------------------------------
   * Custom (fields)
   * ------------------------------------------------------------*/
   
   //Alterar url
     
   
   //Exibir as datas Ida/Volta conforme ação no select

  var select_custom = []; //Ver a possibilidade de deixar isso em cima do  ''subselects.push(selects[i].id);''

  if (select == "true") { // se caso existir select
    var arrayLengthSelect = selects.length; // pega o tamanho desse select

    for (var i = 0; i < arrayLengthSelect; i++) {
      // enquanto o tamanho do select(arrayLengthSelect) for maior que "i" vai fazendo..
      //e depois aumenta o "i" até ficar igual o tamanho do select
      id = selects[i].id; //pega o "nome do select" e guarda dentro de "id"

      if (selects[i].custom === "true") { //se a opção "custom" é "true" então prossiga! (Muito importante!!)
        select_custom.push(selects[i].id);
      $("#select_" + id).after("<div id='select_custom_" + selects[i].id + "'></div>");
    }
  }

  for (var cont = 0; cont < select_custom.length; cont++) {
      //enquanto "cont" q é igual a "0" no início for menor que o "select_custom" 
      //vai somando o "cont" +1 até ficar igual ao tamanho do "select_custom"
      idName = "#select_" + select_custom[cont];
      $(idName).on("change", function() { //on change => vair olhar quando a opçao do select for selecionada
        var valor = $(this).val(); // aqui vc pega cada valor selecionado com o this
        var select = $('option:selected', this).attr('select');
        var position = $('option:selected', this).attr('position');
        //alert('valor: ' + valor + ' | select: ' + select + ' | position(id): ' + position);
        content = "";

        //Define a Data Atual (date current)
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today =  yyyy + '-' + mm + '-' + dd;
       
   

        if (valor === 'Ida e Volta') {
          //gerar dois campos "data ida" "data volta"

          content += '<div class="grid-row">';
          content += '<div class="grid-row-content-container">'
          content += '<label class="est1"><strong>Selecione as datas</strong></label>';
          content += '</div></div>';

          content += '<div class="grid-row">';
          content += '<div class="grid-row-content-container">'
          content += '<label class="est1">Data da ida <span id="asterisk_input_data_ida"></span></label>';
          content += '<input type="date" id="select_custom_data_ida" min="'+today+'">';
          content += '<label class="est1">Data da volta <span id="asterisk_input_data_volta"></span></label>';
          content += '<input type="date" id="select_custom_data_volta" min="'+today+'">';
          content += '</div>';
          content += '</div>';
          $("#select_custom_" + select).html(content);
          
          //Tratando a nova data de volta a partir da data de ida
          $('#select_custom_data_ida').change(function() {
           var newDateMin = $(this).val();
           
           //definir a data minima para o campo data volta
           $('#select_custom_data_volta').attr( 'min',newDateMin);
          
          });


        } else
        if (valor === 'Somente Ida') {
          //gerar dois campos "data ida" "data volta"
          content += '<div class="grid-row">';
          content += '<div class="grid-row-content-container">'
          content += '<label class="est1">Data da ida <span id="asterisk_input_data_ida"></span></label>';
          content += '<input type="date" id="select_custom_data_ida" min="'+today+'">';
          content += '</div>';
          content += '</div>';
          $("#select_custom_" + select).html(content);
        } else {
          $("#select_custom_" + select).html(''); //apagar o campo select_custom
        }
      })
    }
  }

  div_footer = '<h2 id="section_cnpj" style="font-size:1.2rem;" align="'+cnpj_position+'">'+cnpj+'</h2>';
    $(".botao-contato").after(div_footer);


   

</script>