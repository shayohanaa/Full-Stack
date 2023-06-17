var express = require('express');
var bodyParser = require('body-parser');
var path = require('path');
var app = express();
var port = 3000;


app.use(function(req, res, next){
    console.log('time: ', Date.now);
    next();
})

app.use(bodyParser.json);
app.use(bodyParser.urlencoded({extended: false}));

app.get('/', function(req, res){
    res.send('Hello World');
});

app.listen(port);
console.log('Server started on port '+port);

module.export = app;