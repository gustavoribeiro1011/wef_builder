==============================================================================================
version: 4.0
build: 01.02.2023

1- Layout novo
   -Nova resolução para o banner: 1000x250
   -Agora o formulário conta com preenchimento por etapas
   -Foram inclúidos ícones para preenchimento data ida/volta
   -Implementado animação ao redirecionar usuário para  whatsapp
   -Novas regras de validação para os campos obrigatórios, agora cada campo possui uma mensagem
    de erro personalizada

   Correções para a próxima atualização:
   - Campo "Quero bagagem de 23Kg" não está gravando corretamente no BD

==============================================================================================
version: 3.1.7
build: 31.01.2023

1- Correção do bug do redirecionamento par dispositivos iOS

Bug: quando a pessoa preenche o formulário pelo Android e envia, o redirecionamento acontece 
normal. Agora se a pessoa utilizar um iOS o redirecionamento não acontece. 

Detalhes: Foi implementado o setTimeout

Envolver sua window.open(url, '_blank')linha de código na função assíncrona com um setTimeout
também funciona.

setTimeout(() => {
    window.open(url, '_blank');
})

O código setTimeout é executado no thread principal, em vez do assíncrono. Testado no Chrome
e Safari.
==============================================================================================
version: 3.1.6 
build: 30.01.2023

1- Correção do bug Origem/Destinho 

Bug: se a pessoa esquecia de preencher a origem e destino
o script deixava enviar mesmo assim com valores escritos "Origem: Origem" "Destino: Destino"
 
2- Foram implementadas melhorias nas validações dos campos de entrada para garantir a correta 
validação de todos os campos. Em caso de esquecimento de preenchimento por parte do usuário,
será exibida uma mensagem de alerta amarela abaixo do campo com erro de validação.

3-Pastas organizadas em css, js
==============================================================================================