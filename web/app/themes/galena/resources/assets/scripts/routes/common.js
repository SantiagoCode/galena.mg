import {Solar} from '../solar';

export default {
  init() {
    // btn fade
    let nl = document.querySelector("[data-newsletter]");
    let appear = document.querySelector("[data-newsletter-appear]");
    let desappear = document.querySelector("[data-newsletter-desappear]");

    appear.addEventListener("click", (e) => {
      nl.classList.add("_newsletter-animation");
    });

    desappear.addEventListener("click", (e) => {
      e.preventDefault();
      nl.classList.remove("_newsletter-animation");

      setTimeout(() => {
        document.querySelector("[type=text]").value = "";
        document.querySelector("[type=email]").value = "";
      }, 600);
    });


    // data submit
          
      let btnSubmit = document.querySelector(".btnSubmit");
          
      btnSubmit.addEventListener("click", (e) => {
        e.preventDefault();        
        
        const form = document.querySelector("#newsletterForm");
        let formData = new FormData(form);
        formData.append( 'action', 'procesar_formulario' );
            
        fetch( window.location.origin + '/wp/wp-admin/admin-ajax.php', {
            method: 'POST',
            mode: 'no-cors',
            headers: { 'Content-Type': 'application/json' },
            body: formData
        })
        .then(response => response.text()) 
        .then(data => console.log(data)) 
        .catch(err => console.log(err))
      });
         

    },
    

  finalize() {
    Solar.start();
  },
};
