   async function enviar() {
   var nome = document.getElementById ('nome').value;   
   var cpf = document.getElementById ('cpf').value;
   var telefone = document.getElementById ('telefone').value;
   var voucher = document.getElementById ('voucher').value;
   var voucher = document.getElementById ('email').value;
   /*var email = formuser.email. value;*/
   var senha = document.getElementById ('senha').value;

            if(nome == ""){
               alert("Digite seu nome completo!"); return false;               
         }

            if(cpf == ""){
               alert("Campo vazio CPF");return false;               
         }
         
            if(telefone == ""){
               alert("Campo vazio telefone");return fals      
         }

            if(voucher == ""){
               alert("Campo vazio voucher");return false;      
         }

         if(email == ""){
            alert("Campo vazio email");return false;      
         }

         
            /*if(email == "" || email.indexOf('@') == -1 ){
               alert('Preencha o campo E-mail.');
               formuser.email.focus();
               return false;}*/


            if(senha == ""){
               alert("Campo vazio senha");return false;
            } 


   console.log('Nome: '+nome +'\n'+'CPF: '+cpf +'\n'+'Telefone: '+telefone +'\n'+'Email: '+email +'\n'+'\n'+ 'Cadastro Concluído!');



   let formData = new FormData ()
      formData.append('nome', nome)
      formData.append('cpf', cpf)
      formData.append('telefone', telefone)
      formData.append('voucher', voucher)
      formData.append('email', email)
      formData.append('senha', senha)
      
      await fetch('manolephp.php', {
      method: 'POST',
      body: formData
         }).then(result => {
      console.log( result)

      result
      .json()
      .then(res => {
      console.log(
            res
         )})

   })
   }
