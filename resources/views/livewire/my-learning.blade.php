
    <div class="card text-center">
        <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
            <a class="nav-link {{$curriculum == 'Core' ? 'active':''}}" wire:click="updateCurriculum('Core')">Core</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{$curriculum == 'Job' ? 'active':''}}" wire:click="updateCurriculum('Job')">Job</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{$curriculum == 'Leadership' ? 'active':''}}" wire:click="updateCurriculum('Leadership')">Leadership</a>
            </li>
        </ul>
        </div>
        <div class="moduleList">
            @foreach ($mods as $module)
                <div class="moduleDet">
                    <div class="row" wire:click="sendToShowModule({{$module}})">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <img src="{{asset('modules/'.$module->OMImage)}}" class="moduleThumb">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <h4>{{$module->OMName}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
