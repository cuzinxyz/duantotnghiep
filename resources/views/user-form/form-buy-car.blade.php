<x-partials.layout-client>
    @push('styles')
        <style>
            .user__avatar {
                border-radius: 50%;
                width: 45px;
            }

            .messageSender__top {
                display: flex;
                align-items: center;
                border-bottom: 1px solid #eff2f5;
                padding: 15px;
            }

            .messageSender__top form {
                flex: 1;
                display: flex;
            }

            .messageSender__top form input {
                flex: 1;
                outline-width: 0;
                border: none;
                padding: 15px 20px;
                margin: 0 10px;
                border-radius: 999px;
                background-color: #eff2f5;
            }

            .card-post {
                margin: 10px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
                overflow: hidden;
            }

            .card-post .card-body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
                padding: 20px;
            }

            .card-post .tag {
                background: #cccccc;
                border-radius: 50px;
                font-size: 12px;
                margin: 0;
                color: #fff;
                padding: 2px 10px;
                text-transform: uppercase;
                cursor: pointer;
            }

            .card-post .tag-teal {
                background-color: #47bcd4;
            }

            .card-post .tag-purple {
                background-color: #5e76bf;
            }

            .card-post .tag-pink {
                background-color: #cd5b9f;
            }

            .card-post .card-body p {
                font-size: 15px;
                margin: 0 0 20px;
            }

            .card-post .user img {
                border-radius: 50%;
                width: 40px;
                height: 40px;
                margin-right: 10px;
                object-fit: cover;
            }

            .card-post .user-info h5 {
                margin: 0;
                font-size: 13px;
            }

            .card-post .user-info small {
                color: #545d7a;
            }
        </style>
    @endpush
    <div>
        <livewire:post-buy-car />
    </div>
</x-partials.layout-client>