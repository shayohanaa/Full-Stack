var express = require('express');
var bodyParser = require('body-parser');
var path = require('path');

var port = 3000;

var app = express();


app.use(function(req, res, next){
    console.log('Time: ', Date.now());
    next();
});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));
app.use(express.static(path.join(__dirname, "public")));

// Navigations

app.get('/', function(req, res){
    res.send('Hello World!');
});

app.get('/About', function(req, res){
    res.send('About Page.');
});

app.get('/Contact', function(req, res){
    res.send('Contact Page.');
});

app.get('/Forum', function(req, res){
    res.send('Forum Page.');
});

// Navigations

app.listen(port);
console.log('Server started on port '+port);

module.exports = app;
