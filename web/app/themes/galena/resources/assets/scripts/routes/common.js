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
        let _inputName = document.querySelector("[type=text]").value = "";
        let _inputEmail = document.querySelector("[type=email]").value = "";
      }, 600);
    });

    // data submit
    let _btnSubmit = document.querySelector("[type=submit]");

    const upload = (arg) => {
      fetch('', {
        method: 'POST',
        body: arg
      }).then(
        response => response.json()
      ).then(
        success => console.log(success)
      ).catch(
        error => console.log(error)
      );
    };

    _btnSubmit.addEventListener("click", function(e){
      e.preventDefault();
      var _inputName = document.querySelector("[type=text]").value;
      var _inputEmail = document.querySelector("[type=email]").value;

      var _message = new FormData();
      _message.append("name", _inputName);
      _message.append("name", _inputEmail);

      upload(_message);
    });
    },
    

  finalize() {
    Solar.start();
  },
};
