// https://developers.google.com/recaptcha/docs/display?hl=pt-br
// Ajuda de IA para entender melhor. (GPT-5.5 - OpenAI)

// <script src="https://www.google.com/recaptcha/api.js" async defer></script>

// <div class="g-recaptcha" data-sitekey="6LfU5g4tAAAAADP7cLanpolGa_LrsseTc6Cy6yhz" data-callback="enableSubmit" data-expired-callback="disableSubmit"></div>

window.enableSubmit = () => document.getElementById("loginBtn").disabled = false;
window.disableSubmit = () => document.getElementById("loginBtn").disabled = true;