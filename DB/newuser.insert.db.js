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
  console.log("Connected!");
  var sql = "INSERT INTO customers (name, address) VALUES ('Company Inc', 'Highway 37')"; //<===change this
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});