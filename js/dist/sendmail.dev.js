"use strict";

// function emailSend(){
//     Email.send({
//         Host : "smtp.mailendo.com",
//         Username : "username",
//         Password : "password",
//         To : 'them@website.com',
//         From : "you@isp.com",
//         Subject : "This is the subject",
//         Body : "And this is the body"
//     }).then(
//       message => alert(message)
//     );
// }
function emailSend() {
  var parms = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("jubject").value,
    message: document.getElementById("message").value
  };
  emailjs.send("service_ja30roe", "template_5rao0j2", parms).then(alert("Email Send!!"));
}