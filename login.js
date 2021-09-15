async function entrar() {

    var email = document.getElementById ('email').value;
    var senha = document.getElementById ('senha').value;
 
        
          
          if(email == "" || email.indexOf('@') == -1 ){
                alert('E-mail.');
                return false;}
 
 
             if(senha == ""){
                alert("Campo vazio senha");return false;
             } 
 
    let formData = new FormData ()
       formData.append('email', email)
       formData.append('senha', senha)
       
       await fetch('loginphp.php', {
       method: 'POST',
       body: formData
          }).then(result => {
       console.log(result) 
       result
       .json()
       .then(res => {
           console.log (
               res
           )})
 })
      
       
 
 
 
    }
 