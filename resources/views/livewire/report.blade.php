<div>
    <div class="report-box" x-show="open">
        <div class="dialog" @click.outside="open = false">
            <form wire:submit="report">
                <span class="dialog__close" @click="open = false">&#x2715;</span>
                <h2 class="dialog__title">Hãy chọn vấn đề</h2>
                <div class="dialog__content">
                    <div class="list-group mt-3 list-group-light">
                        <div class="item_report mb-2">
                            <input name="content" class="form-check-input" type="checkbox" value="Lừa đảo"
                                id="luadao" />
                            <label for="luadao">Lừa đảo</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" name="content" class="form-check-input" type="checkbox"
                                value="Hình ảnh không đạt tiêu chuẩn cộng đồng" id="khoathan" />
                            <label for="khoathan">Hình ảnh không đạt tiêu chuẩn cộng đồng</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" name="content" class="form-check-input" type="checkbox"
                                value="Thông tin sai sự thật" id="saithongtin" />
                            <label for="saithongtin">Thông tin sai sự thật</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" name="content" class="form-check-input" type="checkbox"
                                value="Ngôn ngữ gây thù ghét" id="ngonngu" />
                            <label for="ngonngu">Ngôn ngữ gây thù ghét</label>
                        </div>
                    </div>
                </div>
                <button class="dialog__action">Báo cáo&#8594;</button>
            </form>
        </div>
    </div>
</div>
