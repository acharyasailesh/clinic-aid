
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Updated Follow-up date</h2>

@if(isset($followUpdate,$firstName,$middleName))
    <div class="w3-container w3-orange">

        <p>
            <i>. Your follow up date has been Scheduled on {{$followUpdate}} with the <b>Dr. {{$firstName}} {{$middleName}} {{$lastName}}</b>you checked recently </i>

        </p>

    </div>
@endif
</body>
</html>