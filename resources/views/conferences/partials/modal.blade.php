<div class="modal fade" id="deleteConferenceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('app.conferences_module.deleteModalTitle')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{__('app.conferences_module.deleteWarning')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('app.conferences_module.cancel')}}</button>
                <button type="button" class="btn btn-primary">{{__('app.conferences_module.delete')}}</button>
            </div>
        </div>
    </div>
</div>
