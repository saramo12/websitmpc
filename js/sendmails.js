function sendMails() {
    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
        attachment: document.getElementById("file").files[0] // Get the selected file
    };

    const serviceID = "service_ja30roe";
    const templateID = "template_gg8wihq";

    // Convert the file to base64 format
    const reader = new FileReader();
    reader.onload = function () {
        params.attachment = reader.result;

        emailjs.send(serviceID, templateID, params).then(
            res => {
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("subject").value = "";
                document.getElementById("message").value = "";
                document.getElementById("file").value = ""; // Clear the file input
                console.log(res);
                alert("Your message was sent successfully!");
            }
        ).catch(err => console.log(err));
    };
    
    if (params.attachment) {
        reader.readAsDataURL(params.attachment); // Read the file as base64
    } else {
        emailjs.send(serviceID, templateID, params).then(
            res => {
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("subject").value = "";
                document.getElementById("message").value = "";
                console.log(res);
                alert("Your message was sent successfully!");
            }
        ).catch(err => console.log(err));
    }
}
