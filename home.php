<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">Online Lodash Tester <small>by <a href="https://form.io" target="_blank"><img src='https://help.form.io/assets/formio-logo.png' style="height:1em" /></a></small>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 65px;margin-bottom: 150px;">
        <div class="jumbotron">
            <h1>Online Lodash Tester</h1>
            <div class="alert alert-success">Testing Lodash version <strong id="version"></strong></div>
            <p>This is an online tester for the <a href="https://lodash.com" target="_blank">Lodash Library</a>. Simply type your code in the box below and press <strong>Execute</strong>. It will run your code and then show the results in the <strong>Results</strong> section.</p>
            <p>Brought to you with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> by <a href="https://form.io" target="_blank"><img src='https://help.form.io/assets/formio-logo.png' style="height:1em" /></a>.
            <p>
            </p>
        </div>
        <div class="row">
            <div class="col col-sm-12">
                <h3>Lodash Code</h3>
                <p>Enter your code below. Set the value of <code>result</code> to what you would like to show in the results section.</p>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-7">
                <div><strong>Example:</strong>
                    <pre>
                        "var users = [
                        { user: 'barney', age: 36, active: true },
                        { user: 'fred',  age: 40, active: false },
                        { user: 'travis', age: 37, active: true}
                        ];

                        result = _.filter(users, function(o) { return o.active; });"
                    </pre>
                </div>
                <div id="code" class="form-control"></div><br />
                <a class="btn btn-primary" id="execute">Execute</a>
            </div>
            <div class="col col-sm-5">
                <strong style="margin-top:0;">Result:</strong>
                <pre class="pre-scrollable" style="min-height: 390px;" id="result"></pre>
            </div>
        </div>
    </div> <!-- /container -->
    <div class="well" style="text-align:center;margin-bottom:0;border-radius:0;">
        <p>Brought to you by <a href="https://form.io">Form.io</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        document.getElementById('version').innerHTML = _.VERSION;
        window._ = _;
        var editor = ace.edit("code");
        editor.getSession().setTabSize(2);
        editor.getSession().setMode("ace/mode/javascript");
        document.getElementById('execute').addEventListener('click', function() {
            var code = editor.getValue();
            var result = null;
            try {
                result = eval(code);
            } catch (err) {
                result = err.message;
            }
            if (!result) {
                result = 'No result';
            }
            if (typeof result === 'object') {
                try {
                    result = JSON.stringify(result, null, '   ');
                } catch (err) {
                    result = err.message;
                }
            }
            document.getElementById('result').innerHTML = result;
        });
    </script>
</body>

</html>