<div>
    <div class="container mt-3" style="max-width: 600px">
        <div class="alert alert-primary">
            Chú ý: Chỉ đăng tin mua xe ở đây. Không đăng tin bán xe hay tin rao vặt khác...nếu vi phạm tài khoản sẽ bị
            khóa !
            <br>
            Nội dung phải nhập bằng Tiếng Việt có dấu
        </div>

        <div class="messageSender__top">
            <img class="user__avatar"
                src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                alt="">
            <form wire:submit.prevent="save">
                <input class="messageSender__input" wire:model="content" placeholder="Bạn cần mua xe gì?" type="text">
            </form>
        </div>
        <div class="text-danger">
            @error('content')
                {{ $message }}
            @enderror
        </div>


        <div class="mt-5 mb-5">
            @if ($pending->count() > 0)
                <div class="container bg-warning rounded-3 shadow px-2 py-3">
                    @foreach ($pending as $demand)
                        <div class="card-post">
                            <div class="card-body">
                                <span class="badge bg-warning text-dark pb-2">tin chờ duyệt</span>
                                <p>
                                    {{ $demand->content }}
                                </p>
                                <div class="user w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="border border-dark border-1"
                                                src="{{ asset('storage/' . $demand->user->avatar) }}" alt="user" />
                                            <div class="user-info">
                                                <h5>{{ $demand->user->name }}</h5>
                                                <small>{{ $demand->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>

                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="bi bi-lock-fill"></i>

                                            <button wire:click="remove({{ $demand->id }})"
                                                class="btn btn-danger rounded-circle"
                                                wire:confirm="Bạn có chắc muốn xoá không?">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($demands->count() > 0)
                @foreach ($demands as $demand)
                    <div class="card-post">
                        <div class="card-body">
                            <p>
                                {{ $demand->content }}
                            </p>
                            <div class="user w-100">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="border border-dark border-1"
                                            src="{{ asset('storage/' . $demand->user->avatar) }}" alt="user" />
                                        <div class="user-info">
                                            <h5>{{ $demand->user->name }}</h5>
                                            <small>{{ $demand->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex gx-3 align-items-center">
                                        <button class="btn"
                                            onclick="window.location.href='/chatify/{{ $demand->user_id }}'"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Chat với người bán ngay">
                                            <i class="bi bi-chat-dots"></i>
                                        </button>
                                        <a @if (!empty($demand->user->phone_number)) href="tel:{{ $demand->user->phone_number }}" @endif
                                            @if (!empty($demand->user->email)) href="mailto:{{ $demand->user->email }}" @endif>
                                            <button class="btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Liên hệ: {{ $demand->user->phone_number ? $demand->user->phone_number : $demand->user->email }}">
                                                <i class="bi bi-telephone"></i>
                                            </button>
                                        </a>

                                        @if ($demand->user_id == auth()->id())
                                            <button wire:click="remove({{ $demand->id }})"
                                                class="btn btn-danger rounded-circle"
                                                wire:confirm="Bạn có chắc muốn xoá không?">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h6 class="text-center mt-3">Không có tin đăng nào 😢</h6>
            @endif
        </div>
    </div>
</div>
