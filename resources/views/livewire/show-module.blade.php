<div>
    @if (!$module == '')
        <img src="{{asset('modules/'.$module['OMImage'])}}" class="moduleBanner">
        <h4>{{$module['OMName']}}</h4>
        <p>{{$module['OMDescription']}}</p>
        <div class="d-flex justify-content-evenly">
            <button class="btn-blue">
                Start Module
            </button>
            <button class="btn-blue">
                Feedback
            </button>
           
        </div>
    @endif
</div>
