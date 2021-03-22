var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost", //<===change this
  user: "yourusername", //<===change this
  password: "yourpassword", //<===change this
  database: "mydb" //<===change this
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE customers (name VARCHAR(255), address VARCHAR(255))"; //<===change this
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
  });
});