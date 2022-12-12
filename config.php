<script>
  /* -----------------------------------------------------
   *
   * Configuração
   * 
   * -----------------------------------------------------
   */
  mobile = "351935082319";
  link = "voarmaiscomkelle.com.br";
  cnpj = "CNPJ: 47.622.983/0001-61";

  //Messages & Titles
  redirectMessage = "Você foi redirecionado para o whatsapp da <b>Voarmais.comkelle!</b> 😊✈️";
  title_page = "Voarmais.comkelle"; //Título da página
  title_form = "COTAÇÃO VOARMAIS.COMKELLE"; //Título do formulário
  message_footer = "";

  //Actions
  openInNewWindow = "true"; // Abrir o WhatsApp em um nova janela

  //Validation
  asterisk_required = "true"; // Deixe "true" para mostrar o 'asterisco' nos campos obrigatórios

  //Positions
  title_form_position = "left";
  button_submit_position = "center";
  cnpj_position = "center";

  //Img
  logo = "true"; // Deixe true para mostrar a logo no formulário
  logo_url = "img/sua-marca-aqui.png"; //Imagem padrão (Medidas recomendadas: 700x300)

  certificate = "false";
  certificate_url = "modelo-certificado.png";

  //Security
  disable_key_f12 = "false";
  disable_click_right = "false";


  /* -----------------------------------------------------
   *
   * Inputs
   *
   * -----------------------------------------------------
   */
  input = "true"; // True/false para ativar/desativar campos do tipo Input
  inputs = [{
      id: '__quantidade_passageiros',
      label: 'Quantidade de passageiros',
      label_custom: ' style="font-weight:bold;margin-top:30px;" ',
      input_custom: ' style="display:none;" ',
      placeholder: '',
      required: '',
      type: 'text',
      class: 'est1',
      style: "", //float
      order: 69,
    },
    {
      //esse campo nao precisa ir na msg*
      id: '__tipo_viagem',
      label: 'Tipo de Viagem',
      label_custom: ' style="font-weight:bold;margin-top:30px;" ',
      input_custom: ' style="display:none;" ',
      placeholder: '',
      required: '',
      type: 'text',
      class: 'est1',
      style: "", //float
      order: 109,
    },
    {
      id: 'nome',
      label: 'Nome',
      label_custom: '',
      input_custom: ' maxlength="55" ',
      placeholder: 'Digite seu nome completo',
      required: 'required',
      type: 'text',
      class: 'est1',
      style: "float", //float
      order: 400,
    },
    {
      id: 'origem',
      label: 'Origem',
      label_custom: '',
      input_custom: ' maxlength="50" ',
      placeholder: 'Ex. São Paulo',
      required: 'required',
      type: 'text',
      class: 'est1',
      style: "float", //float
      order: 10,
    },
    {
      id: 'destino',
      label: 'Destino',
      label_custom: '',
      input_custom: ' maxlength="50" ',
      placeholder: 'Ex. Lisboa',
      required: 'required',
      type: 'text',
      class: 'est1',
      style: "float", //float
      order: 11,
    },
    {
      id: 'email',
      label: 'E-mail',
      label_custom: ' style="margin-top:35px;" ',
      input_custom: ' maxlength="70" ',
      placeholder: 'Seu e-mail',
      required: 'required',
      type: 'email',
      class: 'est1',
      style: "float", //float
      order: 401,
    },
    {
      id: 'telefone',
      label: 'Whatsapp',
      label_custom: '',
      input_custom: ' maxlength="15" ',
      placeholder: 'Ex. 351930539239',
      required: 'required',
      type: 'text',
      class: '',
      style: "float", //float
      order: 402,
    },
    {
      id: 'indicacao',
      label: 'Quem te indicou a agência?',
      label_custom: '',
      input_custom: ' maxlength="40" ',
      placeholder: 'Informar o nome',
      required: 'required',
      type: 'text',
      class: '',
      style: "float", //float
      order: 403,
    },
    {
      id: 'flexibilidade',
      label: 'Tem flexibilidade de datas?',
      label_custom: '',
      input_custom: ' maxlength="5" ',
      placeholder: 'Ex. Sim ou não',
      required: 'required',
      type: 'text',
      class: '',
      style: "float", //float
      order: 404,
    }
  ];

  /* -----------------------------------------------------
   *
   * Textarea
   *
   * -----------------------------------------------------
   */
  textarea = "false"; // True/false para ativar/desativar campos do tipo Textarea
  textareas = [{
      id: 'observacao',
      label: 'Observação',
      label_custom: '',
      placeholder: "Escreva aqui alguma observação",
      required: '',
      order: 11
    },

  ];

  /* -----------------------------------------------------
   *
   * Checkbox
   *
   * -----------------------------------------------------
   */
  checkbox = "true"; // True/false para ativar/desativar campos do tipo Checkbox
  checkboxs = [{
    id: 'bagagem',
    label: "",
    label_custom: 'display:none',
    options: ['Quero bagagem de 23Kg'],
    required: '',
    div_custom: ' style="margin-top:-20px;margin-bottom:20px;" ',
    order: 19
  }];

  /* -----------------------------------------------------
   *
   * Radio
   *
   * -----------------------------------------------------
   */
  radio = "true"; // True/false para ativar/desativar campos do tipo Radio
  radios = [{
    id: 'tipo_passagem',
    label: "Tipo da passagem:",
    label_custom: ' style="margin-right:20px;display:none;" ',
    div_custom: ' style="display:flex;flex-wrap: wrap;" ', //Deixar na mesma linha
    options: ['Ida e volta &nbsp;&nbsp;&nbsp;', 'Só ida'],
    required: 'required',
    order: 5,
    custom: 'horizontal'
  },
  {
    id: 'tipo_viagem',
    label: "Tipo de viagem:",
    label_custom: ' style="margin-right:20px;display:none;" ',
    div_custom: ' style="display:flex;flex-wrap: wrap;" ', //Deixar na mesma linha
    options: ['Turismo (Passeio) &nbsp;&nbsp;&nbsp;', 'Morar (Opção para morar)'],
    required: 'required',
    order: 110,
    custom: 'horizontal'
  }];

  /* -----------------------------------------------------
   *
   * Select
   *
   * -----------------------------------------------------
   */
  select = "true"; // True/false para ativar/desativar campos do tipo Select
  selects = [{
      id: 'adultos',
      label: "Adultos",
      label_custom: '',
      first_option_select: "selecionar",
      options: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      required: 'required',
      order: 70
    },
    {
      id: 'criancas_1',
      label: "Crianças (de 0 a 4 anos)",
      label_custom: '',
      first_option_select: "nenhum",
      options: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      subselect: "false",
      subselect_label: "Idade das crianças",
      subselect_options: ["2", "3", "4", "5", "6", "7", "8", "9", "10", "11"],
      required: '',
      order: 80
    },
    {
      id: 'criancas_2',
      label: "Crianças (de 5 a 12 anos)",
      label_custom: '',
      first_option_select: "nenhum",
      options: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      subselect: "false",
      subselect_label: "Meses dos bebês",
      subselect_options: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23"],
      required: '',
      order: 90
    }
  ];

  /* -----------------------------------------------------
   *
   * Botão Enviar
   *
   * -----------------------------------------------------
   */
  button_name = "<i class='bi bi-whatsapp'></i> Enviar Cotação Para o WhatsApp"; //Texto do botão Enviar
</script>