<div class="modal fade" id="{{"deleteConferenceModal_{$conference['id']}"}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="exampleModalLabel">{{__('app.conferences_module.deleteModalTitle')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-black">
                {{__('app.conferences_module.deleteWarning')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('app.conferences_module.cancel')}}</button>
                <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="{{__('app.conferences_module.delete')}}" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
