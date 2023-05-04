// Get the form data

var SibApiV3Sdk = require('sib-api-v3-sdk');
var defaultClient = SibApiV3Sdk.ApiClient.instance;

// Configure API key authorization: api-key
var apiKey = defaultClient.authentications['api-key'];
apiKey.apiKey = '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';

// Uncomment below two lines to configure authorization using: partner-key
// var partnerKey = defaultClient.authentications['partner-key'];
// partnerKey.apiKey = 'YOUR API KEY';

var apiInstance = new SibApiV3Sdk.TransactionalEmailsApi();

var sendSmtpEmail = new SibApiV3Sdk.SendSmtpEmail(); // SendSmtpEmail | Values to send a transactional email

sendSmtpEmail = {
    to: [{
        email: 'gueram.hov@proton.me',
        name: 'Gueram Hovhannisyan'
    }],
    templateId: 59,
    params: {
        name: 'Gueram',
        surname: 'Hovhannisyan'
    },
    headers: {
        'X-Mailin-custom': 'custom_header_1:custom_value_1|custom_header_2:custom_value_2'
    }
};

apiInstance.sendTransacEmail(sendSmtpEmail).then(function(data) {
  console.log('API called successfully. Returned data: ' + data);
}, function(error) {
  console.error(error);
});

const form = document.querySelector('#contactForm');
const formData = new FormData(form);

// Send the email using Sendinblue API
fetch('https://api.sendinblue.com/v3/smtp/email', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'api-key': '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'
  },
  body: JSON.stringify({
    to: [{email: 'gueram.hov@proton.me'}],
    subject: formData.get('subject'),
    htmlContent: formData.get('message'),
    sender: {
      name: formData.get('name'),
      email: formData.get('email')
    }
  })
})
.then(response => console.log(response))
.catch(error => console.error(error));