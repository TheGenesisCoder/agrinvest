const express = require('express');
const router = express.Router();

const settings = require('../lib/settings');
const request = require('request');

router.get('/redirect', function(req, res, next) {
    //access token will be processed here

    //check if there is code given
    if(typeof req.query.code != 'undefined'){

        //build the request
        let options = {
            "url" : settings.ubp.url + '/token', //set the url
            headers: {  //set the headers
                'content-type' : '	application/x-www-form-urlencoded',
                'accept': 'text/html'
            },
            method: 'POST', //set request to POST
            form: { //create the form body of the request
                client_id: settings.ubp.client_id,          //client ID of Application
                code: req.query.code,                       //put the code we receive from UnionBank Online Login
                redirect_uri: settings.ubp.redirect_uri,    //this must be same with the redirect URI we used initially
                grant_type: 'authorization_code'            //set the grant type to authorization_code
            }
        };
        request(options, function(err, response, body){
            if(!err){
                console.log('Error', err);
            }
            if(response){   //output the result of request
                try{
                    res.json(JSON.parse(body)); //parse the body into json
                }catch(e){
                    res.json(e);    //if error in parsing
                }
            }else{
                res.send(); //send nothing if nothing is processed
            }
        });
    }
});
module.exports = router;