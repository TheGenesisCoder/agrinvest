const express = require('express');
const app = express();

const bodyParser = require('body-parser');

const oauth = require('./routes/oauth');

//transfer route
const transfer = require('./routes/transfer');

const settings = require('./lib/settings');
const request = require('request');

app.get('/', function(req, res){
    //create redirect link
    let redirect_link = `${settings.ubp.url}/convergent/v1/oauth2/authorize?client_id=${settings.ubp.client_id}&scope=${settings.ubp.scope}&response_type=${settings.ubp.request_type}&redirect_uri=${settings.ubp.redirect_uri}`;

    //check if there is session token
    let has_token = false;
    if(typeof req.session.token != "undefined"){
        has_token = true;   //set the token to true
    }
    //display hello world
    res.render('index', //render /views/index.ejs
        //pass data to index.ejs
        {
            title: 'Index Page',
            has_token: has_token,
            redirect_link: redirect_link
        }
    );
});
/**
 * Available Paths are
 * 
 * GET          /oauth/redirect
 */
app.use('/oauth', oauth);
app.use('/transfer', transfer);

module.exports = app;