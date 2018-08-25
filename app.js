const express = require('express');
const app = express();

const settings = require('./lib/settings');
const oauth = require('./routes/oauth');

app.get('/', function(req, res){
    res.send('Hello world');
});
/**
 * Available Paths are
 * 
 * GET          /oauth/redirect
 */
app.use('/oauth', oauth);

module.exports = app;