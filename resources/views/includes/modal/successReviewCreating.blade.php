<div class="modal fade successModalDialog" id="successModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <span>
                {!! \App\Services\DataService::getTranslate('service/index.thank_you_for.review') !!}
            </span>
            <span>
                @lang('service/message.review_find')
            </span>
            <span>
                @lang('service/message.next_review')
            </span>
            <div class="d-flex justify-content-center">
                <div class="col-md-3">
                    <button class="otherButton" type="button" data-dismiss="modal">
                        @lang('service/index.cancel')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session()->has('success_review_creating'))
    <script>
        $(document).ready(function() {
            $('#successModal').modal();
        });
    </script>
@endif
