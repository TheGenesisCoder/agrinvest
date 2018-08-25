module.exports = {
    ubp: {
        //url: 'https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2/token',
        url: 'https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2',

        client_id : 'e0778ce1-3371-4fd2-9117-1cdb08559ca0',
        client_secret: 'yB1kP0pL0gL0dK0gC6nW5rD0cY4jP2jD8kG5gN6sD7aH6dG4kQ',
        redirect_uri : 'https://83f18e48.ngrok.io/oauth/redirect',
        //redirect_uri : 'https://api-uat.unionbankph.com/partners/sb/convergent/v1/oauth2/token',
        
        scope: 'transfers', //we will be using scope since we are going to transfer funds
        request_type: "code",
        grant_type : "authorization_code"
    }
};