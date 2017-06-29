/**
 * Created by sean on 5/28/17.
 */

function contactValidator(document, submitId, nameId, messageId, emailId, errorId){
    console.log("Hello!");
    this.submitButton = document.getElementById(submitId);
    this.nameField = document.getElementById(nameId);
    this.messageField = document.getElementById(messageId);
    this.emailField = document.getElementById(emailId);
    this.errorField = document.getElementById(errorId);
    var that = this;
    this.submitButton.onclick = function(event){
        var name = that.nameField.value.trim();
        var message = that.messageField.value.trim();
        var email = that.emailField.value.trim();

        if(name == 0){
            event.preventDefault();
            html = "<p>No name given!</p>";
            that.errorField.innerHTML = html;
            that.nameField.value = "";
        }
        else if(email == 0){
            event.preventDefault();
            html = "<p>No email given!</p>";
            that.errorField.innerHTML = html;
            that.emailField.value = "";
        }
        else if(message == 0){
            event.preventDefault();
            html = "<p>Please enter a message!</p>";
            that.errorField.innerHTML = html;
            that.messageField.value = "";
        }

    }
}
