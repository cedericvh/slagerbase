<div class="modal fade" id="send-email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Send email</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="template">Template</label>
                        <select ng-model="template" id="template" class="form-control">
                            @foreach($templates as $template)
                                <option value="{{ $template->getKey() }}">{{ $template->getAttribute('name') }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="$ctrl.sendEmails(template)">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>