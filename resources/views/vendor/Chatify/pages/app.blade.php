@include('Chatify::layouts.headLinks')

<div class="container-fluid" style="position: relative">
    <style>
        button.back {
            background: #FBCA1F;
            font-family: inherit;
            padding: 0.6em 1.3em;
            font-weight: 900;
            font-size: 18px;
            border: 3px solid black;
            border-radius: 0.4em;
            box-shadow: 0.1em 0.1em;
            display: flex;
            align-items: center
        }

        button.back:hover {
            transform: translate(-0.05em, -0.05em);
            box-shadow: 0.15em 0.15em;
        }

        button.back:active {
            transform: translate(0.05em, 0.05em);
            box-shadow: 0.05em 0.05em;
        }
    </style>
    <div style="position: fixed;z-index:120;right:30px;top:30px;">
        <button onclick="window.location.href='/'" class="back">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house"
                viewBox="0 0 20 20">
                <path
                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
            </svg>
            Trang Chủ</button>
    </div>
    <div class="messenger">
        {{-- ----------------------Users/Groups lists side---------------------- --}}
        <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
            {{-- Header and search bar --}}
            <div class="m-header">
                <nav>
                    <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span>
                    </a>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                        <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                    </nav>
                </nav>
                {{-- Search input --}}
                <input type="text" class="messenger-search" placeholder="Search" />
                {{-- Tabs --}}
                {{-- <div class="messenger-listView-tabs">
                <a href="#" class="active-tab" data-view="users">
                    <span class="far fa-user"></span> Contacts</a>
            </div> --}}
            </div>
            {{-- tabs and lists --}}
            <div class="m-body contacts-container">
                {{-- Lists [Users/Group] --}}
                {{-- ---------------- [ User Tab ] ---------------- --}}
                <div class="show messenger-tab users-tab app-scroll" data-view="users">
                    {{-- Favorites --}}
                    <div class="favorites-section">
                        <p class="messenger-title"><span>Favorites</span></p>
                        <div class="messenger-favorites app-scroll-hidden"></div>
                    </div>
                    {{-- Saved Messages --}}
                    <p class="messenger-title"><span>Your Space</span></p>
                    {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
                    {{-- Contact --}}
                    <p class="messenger-title"><span>All Messages</span></p>
                    <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;">
                    </div>
                </div>
                {{-- ---------------- [ Search Tab ] ---------------- --}}
                <div class="messenger-tab search-tab app-scroll" data-view="search">
                    {{-- items --}}
                    <p class="messenger-title"><span>Search</span></p>
                    <div class="search-records">
                        <p class="message-hint center-el"><span>Type to search..</span></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView">
            {{-- header title [conversation name] amd buttons --}}
            <div class="m-header m-header-messaging">
                <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    {{-- header back button, avatar and user name --}}
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                        <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                        <div class="avatar av-s header-avatar"
                            style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>
                        <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                    </div>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                        <a href="/"><i class="fas fa-home"></i></a>
                        <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                    </nav>
                </nav>
                {{-- Internet connection --}}
                <div class="internet-connection">
                    <span class="ic-connected">Connected</span>
                    <span class="ic-connecting">Connecting...</span>
                    <span class="ic-noInternet">No internet access</span>
                </div>
            </div>

            {{-- Messaging area --}}
            <div class="m-body messages-container app-scroll">
                <div class="messages">
                    <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing">
                        <div class="message">
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Send Message Form --}}
            @include('Chatify::layouts.sendForm')
        </div>
        {{-- ---------------------- Info side ---------------------- --}}
        <div class="messenger-infoView app-scroll">
            {{-- nav actions --}}
            <nav>
                <p>User Details</p>
                <a href="#"><i class="fas fa-times"></i></a>
            </nav>
            {!! view('Chatify::layouts.info')->render() !!}
        </div>
    </div>
</div>
@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
