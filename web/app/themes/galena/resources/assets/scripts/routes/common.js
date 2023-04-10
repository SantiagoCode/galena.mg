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

    const upload = (arg) => {
    
      console.log("arg ",arg);

      fetch('http://galena.v2.test/wp/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: arg,
        mode: 'no-cors',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      })
      .then(response => {console.log(response)})
      .catch(error => console.error(error))    
    };

    btnSubmit.addEventListener("click", (e) => {
      e.preventDefault();

      const form = document.querySelector("#newsletterForm");
      let data = new FormData(form);

      console.log("data ", data);

      upload(data);
    });  
    },
    

  finalize() {
    Solar.start();
  },
};
