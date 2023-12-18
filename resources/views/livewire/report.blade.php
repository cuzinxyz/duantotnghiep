<div>
    <div class="report-box" x-show="open">
        <div class="dialog" @click.outside="open = false">
            <form>
                <span class="dialog__close" @click="open = false">&#x2715;</span>
                <h2 class="dialog__title">Hãy chọn vấn đề</h2>
                <div class="dialog__content">
                    <div class="list-group mt-3 list-group-light">
                        <div class="item_report mb-2">
                            <input class="form-check-input" type="checkbox" value="Lừa đảo" id="luadao" />
                            <label for="luadao">Lừa đảo</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox" value="Trùng lặp"
                                id="trunglap" />
                            <label for="trunglap">Trùng lặp</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox" value="Xe đã bán"
                                id="daban" />
                            <label for="daban">Xe đã bán</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox"
                                value="Không liên lạc được" id="lienlac" />
                            <label for="lienlac">Không liên lạc được</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox"
                                value="Thông tin sai sự thật" id="saithongtin" />
                            <label for="saithongtin">Thông tin sai sự thật</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox"
                                value="Xe hư hỏng sau khi mua" id="huhong" />
                            <label for="huhong">Xe hư hỏng sau khi mua</label>
                        </div>
                        <div class="item_report mb-2">
                            <input wire:model="content" class="form-check-input" type="checkbox" value="Lý do khác"
                                id="khac" />
                            <label for="khac">Lý do khác</label>
                        </div>
                    </div>
                </div>
                <div class="text-danger fw-bold py-2" style="font-size:12px">
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
                <button wire:loading.attr="disabled" class="dialog__action" wire:click.prevent="report">Báo
                    cáo&nbsp;&#8594;</button>
            </form>
        </div>
    </div>
</div>
