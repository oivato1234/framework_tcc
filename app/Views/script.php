<script>
      function confirmar(){
    // Só permitirá o envio se o usuário responder OK
    var resposta = window.confirm("Deseja enviar o formulário se responsabilizando que todas as informações são verídicas? " + 
                                  " Recomendamos que revise seus dados antes de concluir o cadastro." + 
                                  " Clique em 'Cancelar' para revisar e 'Ok' para concluir o envio. " +
                                  " Conforme previsto na Lei n°2848/40, Art. 299 do Código Penal Brasileiro." + 
                                  " Qualquer violação de dados é" + " Falsidade Ideológica");
    if(resposta)
      return true;
    else
      return false; 
  }
</script>