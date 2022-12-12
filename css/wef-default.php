<style>
  body {
    text-align: center;
    font-family: 'Roboto', sans-serif;
    color: #212529;
    padding-top: 326px;
    padding-bottom: 30px;
    margin: 0;
    text-rendering: optimizeLegibility !important;
    background-color: #3761a1;
  }

  .logo {
    width: 100%;
    top: 0;
    padding: 25px 0 260px 0;
    position: absolute;
    z-index: -1;
  }

  .banner {
    width: 100%;
    top: 0;
    margin-top: 90px;
    position: relative;
    z-index: -1;
  }

  /*---------------------
* Label Float
*----------------------
*/
  .label_float {
    color: #000 !important;
    font-weight: bold;
    margin-top: -18px !important;
    background: #FFF;
    padding: 0 6px 0 6px;
    border-radius: 3px;
    -webkit-box-shadow: -5px -3px 45px #C0C0C0;
    -moz-box-shadow: -5px -3px 45px #C0C0C0;
    box-shadow: -5px -3px 45px #C0C0C0;
  }

  .input_float {
    margin-left: 6px;
  }

  /*custom */
  .phone_with_ddd::placeholder   {
    color: #000;
  }
  input[name="radio_tipo_passagem"]{
    margin-bottom:30px;
  }
  input[name="radio_tipo_viagem"]{
    margin-bottom:16px;
  }
  


  #title_form {
    font-size: 12px !important;
  }


  button,
  [role="button"] {
    cursor: pointer;
  }

  @media (max-width: 767px) {
    .logo {
      position: relative;
      padding: 0;
    }

    .logo img {
      height: 180px;
      max-width: 100%;
    }

    body {
      padding-top: 0;
      padding-bottom: 0;
      margin: 0;
    }

    .banner {
      margin-top: 0;
    }


    .banner img {

      max-width: 100%;
    }


  }

  .fab {
    font-size: 1.4em;
    margin-right: 6px;
  }

  .formulario {
    -webkit-box-shadow: -5px -3px 45px #C0C0C0;
    -moz-box-shadow: -5px -3px 45px #C0C0C0;
    box-shadow: -5px -3px 45px #C0C0C0;
    margin: auto;
    background-color: #3761a1;
    padding: 20px;
    color: #FFF;
    max-width: 660px;
    border-radius: 0 0 30px 30px;
    font-size: 16px;
    display: block;
  }

  input[type="number"],
  input[type="text"],
  input[type="email"],
  input[type="date"],
  select,
  textarea {
    width: 100%;
    padding: 12px 8px;
    margin: 8px 0;
    display: inline-block;
    border-radius: 4px;
    box-sizing: border-box;
    padding: 8px;
    font-size: 1rem;
    border: 1px solid #000;
    color: #000;
    text-align: left;
    font-family: Roboto, sans-serif;
  }

  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

  input[type="number"] {
    -moz-appearance: textfield;
    appearance: textfield;
  }

  .radio {
    display: flex;
    flex-wrap: wrap;
  }

  .est1 {
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
  }

  .textHelp {
    margin-top: 0px;
    display: flex;
    flex-wrap: wrap;
    color: red;
  }

  .form-check {
    display: flex;
  }

  input[type="submit"] {
    width: 100%;
    background-color: #4caf50;
    color: #fff;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  img {
    vertical-align: middle;
  }

  button {
    font-size: 1.4rem;
    background-color: #FFF;
    border: 0;
    padding: 4px 30px;
    color: #000;
    border-radius: 4px;
    cursor: pointer;
    line-height: 50px;
    margin-top: 16px;
  }

  .botao-contato {
    font-size: 1rem;
    font-weight: 700;
    background-color: rgb(41 182 101);
    border: 0;
    padding: 4px 30px;
    color: white;
    border-radius: 40px;
    cursor: pointer;
    line-height: 50px;
    margin-top: 16px;
    vertical-align: middle;
  }

  .botao-contato:hover {
    background-color: rgb(29 142 77);
    color: white;

  }

  .span {
    display: flex;
    flex-wrap: wrap;
  }

  #seletor_idade select {
    width: 60px;
  }


  .grid-row {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .grid-row-content {
    padding-right: 14px;
  }

  .grid-row-content-container {
    display: flex;
    flex-wrap: wrap;
    flex-grow: 1;
  }
</style>