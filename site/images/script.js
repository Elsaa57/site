function sendMail(params){
    var tempParams ={
        nom: document.getElementById("nom").value,
        prenom: document.getElementById("prenom").value,
        precisions: document.getElementById("precisions").value,
        email: document.getElementById("email").value,

    };
    emailjs.send('service_ed0qvsr','template_oz5koxs',tempParams)
   .then(() =>console.log('SUCCESS!'), function(error) {
                       console.log('FAILED...', error);
                   });
}
