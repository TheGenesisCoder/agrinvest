const express = require('express');
const app = express();

const bodyParser = require('body-parser');

const oauth = require('./routes/oauth');
const transfer = require('./routes/transfer');

const settings = require('./lib/settings');
const request = require('request');

app.get('/', function(req, res){
    //setup a redirect link
    let redirect_link = `${settings.ubp.url}/authorize?client_id=${settings.ubp.client_id}&scope=${settings.ubp.scope}&response_type=code&redirect_uri=${settings.ubp.redirect_uri}`;
    
    //render the direct link into the page
    res.send(`<a href="${redirect_link}">Login</a>`);
});
/**
 * Available Paths are
 * 
 * GET          /oauth/redirect
 */
app.use('/oauth', oauth);
app.use('/transfer', transfer);

module.exports = app;