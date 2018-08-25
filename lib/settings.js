module.exports = {
    ubp: {
        //UnionBank API Base Path
        url: 'https://api-uat.unionbankph.com/partners/sb',

        //Application Credentials (id, secret and redirect uri)
        client_id : 'e0778ce1-3371-4fd2-9117-1cdb08559ca0',
        client_secret: 'yB1kP0pL0gL0dK0gC6nW5rD0cY4jP2jD8kG5gN6sD7aH6dG4kQ',
        redirect_uri : 'https://f151f7d9.ngrok.io',
        
        //UnionBank Online Login has 3 scopes (payment, transfers, account_balances)
        scope: 'transfers', //we will be using scope since we are going to transfer funds
        request_type: "code",
        grant_type : "authorization_code"
    }
};