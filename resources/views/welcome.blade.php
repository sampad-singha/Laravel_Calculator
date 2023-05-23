<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <h1>Calculator</h1>

    <div class="formDiv">
        <form action="calculation" method="post">
            <div class="form-group">
                <label></label>
                @csrf
                <input id="num1" name="num1" placeholder="Number 1" type="number" required="required"
                    class="form-control">
            </div>
            <div class="form-group">
                <label></label>
                <input id="num2" name="num2" placeholder="Number 2" type="number" required="required"
                    class="form-control">
            </div>
            <div class="form-group">
                <label></label>
                <div>
                    <select id="operator" name="operation" required="required" class="form-select">
                        <option value="">Select operator</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
            </div>
            <!-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-info" value ="7">7</button>
                    <button type="button" class="btn btn-info" value ="8">8</button>
                    <button type="button" class="btn btn-info" value ="9">9</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="second group">
                    <button type="button" class="btn btn-info" value ="4">4</button>
                    <button type="button" class="btn btn-info" value ="5">5</button>
                    <button type="button" class="btn btn-info" value ="6">6</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="third group">
                    <button type="button" class="btn btn-info" value ="1">1</button>
                    <button type="button" class="btn btn-info" value ="2">2</button>
                    <button type="button" class="btn btn-info" value ="3">3</button>
                </div>
            </div> -->
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-outline-light">Calculate</button>
            </div>
        </form>
    </div>





    @if (session('result'))
    <div class="result">
        <h3>{{session('result')}}</h3>
    </div>

    @endif


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>