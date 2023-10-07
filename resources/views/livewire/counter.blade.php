<div class="d-flex align-items-center justify-content-center py-5">
  <style>
    .btnDemo {
      line-height: 60px;
      width: 60px;
      height: 60px;
      font-size: 100px;
      border: 1px solid #eee;
      border-radius: 50%;
    }
  </style>

  <div class="d-flex gap-3 justify-center align-items-center">
    <button class="btnDemo" wire:click="increment">+</button>
      <h1 class="fs-1 text-success">{{ $count }}</h1>
    <button class="btnDemo" wire:click="decrement">-</button>
  </div>
</div>
