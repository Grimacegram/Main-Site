//maybe
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost", //<===change this
  user: "yourusername", //<===change this
  password: "yourpassword", //<===change this
  database: "mydb" //<===change this
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM customers", function (err, result, fields) { //<===change this
    if (err) throw err;
    console.log(result);
  });
});