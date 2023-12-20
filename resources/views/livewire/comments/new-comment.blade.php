<div>
    <div class="car-details-area">
        <div class="text-input-area mb-40">
            <form wire:submit="saveComment">
                <div class="form-inner" x-data="{ comment: '' }">
                    <textarea wire:model="comment" id="comment" placeholder="Nội dung bình luận..." style="resize: none"></textarea>
                    <button type="submit" x-on:click="document.getElementById('comment').value = '' ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path
                                d="M13.8697 0.129409C13.9314 0.191213 13.9736 0.269783 13.991 0.355362C14.0085 0.44094 14.0004 0.529754 13.9678 0.610771L8.78063 13.5781C8.73492 13.6923 8.65859 13.7917 8.56003 13.8653C8.46148 13.9389 8.34453 13.9839 8.22206 13.9954C8.09958 14.0068 7.97633 13.9842 7.86586 13.9301C7.75539 13.876 7.66199 13.7924 7.59594 13.6887L4.76304 9.23607L0.310438 6.40316C0.206426 6.33718 0.122663 6.24375 0.0683925 6.13318C0.0141218 6.02261 -0.00854707 5.89919 0.00288719 5.77655C0.0143215 5.65391 0.0594144 5.53681 0.13319 5.43817C0.206966 5.33954 0.306557 5.2632 0.420973 5.21759L13.3883 0.0322452C13.4694 -0.000369522 13.5582 -0.00846329 13.6437 0.00896931C13.7293 0.0264019 13.8079 0.0685926 13.8697 0.1303V0.129409ZM5.65267 8.97578L8.11385 12.8427L12.3329 2.29554L5.65267 8.97578ZM11.7027 1.66531L1.1555 5.88436L5.02333 8.34466L11.7027 1.66531Z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="text-danger">
                    @error('comment')
                        {{ $message }}
                    @enderror
                </div>
            </form>
        </div>
    </div>
    <div class="w-100 text-center" wire:loading>
        <img src="{{ asset('images/load.gif') }}" alt="" style="height:100px">
    </div>
    <div class="animated pulse fadeInUp" style="visibility: visible; animation-delay: 300ms;">
        <ul class="comment">
            @if (empty($listComments))
                <p>Không có bình luận</p>
            @else
                @foreach ($listComments as $item)
                    <li wire:key="{{ $item->id }}">
                        <div class="single-comment-area" x-data="{ open: false }">
                            <div class="author-img">
                                @if (strpos($item->user->avatar, "http") === 0)
                                    <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                        src="{{$item->user->avatar}}"
                                        alt="">
                                @elseif (Storage::url($item->user->avatar))
                                    <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                        src="{{asset('storage/'. $item->user->avatar)}}"
                                        alt="">
                                @else
                                    <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                        src="{{'https://ui-avatars.com/api/?name=' . $item->user->name }}"
                                        alt="">
                                @endif
                            </div>
                            <div class="comment-content" style="width:100%">
                                <div class="author-name-deg d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <h6>{{ $item->user->name }},</h6>
                                        <span style="font-size: 12px;">{{ $item->created_at->diffForHumans() }}</span>
                                    </div>
                                    @if (auth()->check())
                                        @if (auth()->user()->is_collaborator || auth()->user()->id == $item->user_id)
                                            <div class="delete-btn" style="cursor: pointer"
                                                wire:click="deleteComment({{ $item->id }})"
                                                wire:confirm="Xóa bình luận này ?">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    class="text-danger" viewBox="0 0 24 24"
                                                    style="fill: red;transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                                <p>{{ $item->body }}</p>
                                <div class="replay-btn" @click="open = ! open">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                        viewBox="0 0 14 11">
                                        <path
                                            d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                        </path>
                                    </svg>
                                    Reply
                                </div>

                                <div class="group" x-show="open">
                                    <form action="" wire:submit.prevent="replyComment({{ $item->id }})">
                                        <input type="text" class="input replyComment" wire:model="reply"
                                            placeholder="Nhập phản hồi">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <div
                                            style="
                                            text-align: end;
                                            margin-top: 12px;
                                        ">
                                            <button @click="open = false" type="button"
                                                style="
                                                background: none;
                                                font-size: 14px;
                                                font-weight: 600;
                                                ">
                                                Hủy
                                            </button>
                                            <button type="submit"
                                                style="
                                                font-size: 14px;
                                                border-radius: 10px;
                                                padding: 0 12px;
                                                color: #fff;
                                                margin-left: 24px;
                                                background-color: #46D993;
                                                font-weight: 600;
                                            "
                                                >
                                                Phản hồi
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if ($item->reply->count() > 0)
                            <ul class="comment-replay">
                                @foreach ($item->reply as $reply)
                                    <li wire:key="{{ $reply->id }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="single-comment-area ">
                                                <div class="author-img">
                                                    @if (strpos($item->user->avatar, "http") === 0)
                                                        <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                            src="{{$item->user->avatar}}"
                                                            alt="">
                                                    @elseif (Storage::url($item->user->avatar))
                                                        <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                            src="{{asset('storage/'. $item->user->avatar)}}"
                                                            alt="">
                                                    @else
                                                        <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                                            src="{{'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                                            alt="">
                                                    @endif
                                                </div>
                                                <div class="comment-content" style="width:100%">
                                                    <div class="author-name-deg">
                                                        <h6>{{ $reply->user->name }},</h6>
                                                        <span>{{ $reply->created_at->diffForHumans() }}</span>
                                                    </div>
                                                    <p>{{ $reply->body }}</p>
                                                </div>
                                            </div>

                                            @if (auth()->check())
                                                @if (auth()->user()->is_collaborator || auth()->user()->id == $reply->user_id)
                                                    <div class="delete-btn" style="cursor: pointer"
                                                        wire:click="deleteReplyComment({{ $reply->id }})"
                                                        wire:confirm="Xóa bình luận này ?">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" class="text-danger" viewBox="0 0 24 24"
                                                            style="fill: red;transform: ;msFilter:;">
                                                            <path
                                                                d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                            </path>
                                                            <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                                        </svg>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <li>
                    {{ $listComments->links(data: ['scrollTo' => '#comment-box']) }}
                </li>
            @endif
        </ul>
    </div>
</div>
