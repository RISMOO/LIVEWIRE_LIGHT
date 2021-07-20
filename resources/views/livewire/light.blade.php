<div class="center">
    <img src="{{ asset('img/live.png') }}" class="img-fluid" width="90%" /><br>
    <b><span class="badge rounded-pill bg-danger text-light mb-5">{{ $brightness }}%</span></b>
     <div class="progress" style="height: 30px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100"
            style="width: {{ $brightness }}%">
        </div>
    </div>
      <div class="mt-3">
        <button type="button" class="btn btn-danger m-1" wire:click="off">Off</button>
        <button type="button" class="btn btn-dark m-1" wire:click="increment" @if ($brightness > 90) disabled @endif>+</button>
        <button type="button" class="btn btn-dark m-1" wire:click="decrement" @if ($brightness < 10) disabled @endif>-</button>
        <button type="button" class="btn btn-primary m-1" wire:click="on">On</button>
        <!--si on clique sur le boutton on appelle la methode off-->
    </div>
  </div>
</div>
