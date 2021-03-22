var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost", //<===change this
  user: "yourusername", //<===change this
  password: "yourpassword", //<===change this
  database: "mydb" //<===change this
});

con.connect(function(err) {
  if (err) throw err;
  var sql = "UPDATE customers SET address = 'Canyon 123' WHERE address = 'Valley 345'"; //<===change this
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result.affectedRows + " record(s) updated");
  });
});