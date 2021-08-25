var express = require('express');
var router = express.Router();
var db=require('../database');
// another routes also appear here
// this script to fetch data from MySQL databse table
router.get('/dht11', function(req, res, next) {
    var sql='SELECT * FROM dht11';
    db.query(sql, function (err, data, fields) {
    if (err) throw err;
    res.render('dht11', { title: 'dht11', userData: data});
  });
});
module.exports = router;