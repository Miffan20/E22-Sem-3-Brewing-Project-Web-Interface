<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Batch command</title>
</head>
<body>
//div for mach speed
<div id="machSpeedwrite">

    //mach speed write
    <div id="machSpeed">
        <label>Set speed</label>
        <select name="machSpeed" id="machSpeedSelectID">
            <option value="0">value 0 < value < 600</option>
            <option value="1">value 0 < value < 300</option>
            <option value="2">value 0 < value < 150</option>
            <option value="3">value 0 < value < 200</option>
            <option value="4">value 0 < value < 100</option>
            <option value="5">value 0 < value < 125</option>
        </select>
    </div>

    //cntrlCmd write
    <div id="cntrlCmd">
        <label>Control command</label>
        <select name="contrlCmd" id="cntrlCmdSelectID">
            <option value="1">Reset</option>
            <option value="2">Start</option>
            <option value="3">Stop</option>
            <option value="4">Abort</option>
            <option value="5">Clear</option>
        </select>
    </div>

    //cmdChangeRequest write
    <div id="cmdChangeRequest">
        <select name="cmdCR" id="cmdChangeRequestID">
            <option value="1">True</option>
            <option value="2">False</option>
        </select>
    </div>

    //get batch ID write, måske lige snakke om hvordan den skal se ud
    <div id="batchID"></div>

    //product id for next batch write
    <div id="BatchID">
        <option value="0">Pilsner</option>
        <option value="1">Wheat</option>
        <option value="2">IPA</option>
        <option value="3">Stout</option>
        <option value="4">Ale</option>
        <option value="5">Alcohol Free</option>
    </div>

    //Amount of products in the next batch write, måske lige snakke om hvordan den skal se ud
    <div id="AmountID"></div>
</div>

</body>
</html>
