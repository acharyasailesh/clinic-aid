<strong>Report of Patient</strong><br>
<p align="right">
    <img alt="image" src="{{$patient->pPhoto->path}}" width="100" height="100" style="float: right;"></p>

Name:{{$patient->firstName}} {{$patient->middleName}} {{$patient->lastName}} <br>

Gender:@if($patient->gender==0 ) Male
       @elseif($patient->gender=1) Female
       @else
           Others
       @endif
<br>
Blood Group:{{$patient->bloodGroup}} <br>
DOB:{{$patient->DOB}}<br>
Address: {{$patient->address}}<br>
Email: {{$patient->email}}<br>

<h1>Your Medical History</h1>

@foreach($patient->medicalHistory as $history)

    <div id="vertical-timeline" class="vertical-container dark-timeline">

        {{--//  $medical=\App\MedicalHistory::orderBy('id','DESC')->get();--}}
        {{--//--}}
        {{--//?>--}}

        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon gray-bg">
                <i class="fa fa-briefcase"></i>
            </div>
            <div class="vertical-timeline-content">
                <span class="vertical-date small text-muted"><u> Visit Date: {{$history->visitDate}} </span></u>
                <p>Patient Complain :{{$history->complain}}<br>
                    Advice Given : {{$history->doctorAdvice}}<br>

                </p>

            </div>
        </div>

    </div>
@endforeach
</body>
